<?php

class automatizacionController extends Controller
{   
    public function __construct() {
        parent::__construct();
        $this->_mensaje = $this->loadModel('mensaje');
        $this->_estadoMensaje = $this->loadModel('estadoMensaje');
        $this->_usuario = $this->loadModel('usuario');
    }
    
    public function index() {
        $this->envioCorreo();
        $this->envioMensajeTexto();
    }

    public function envioCorreo(){
        $fechaActual = date('Y-m-d H:i:s');
        $fechaTemp = strtotime('+5 minutes',strtotime($fechaActual));
        $fechaIncrementada = date('Y-m-d H:i:s',$fechaTemp);
        $mensajes = $this->_mensaje->dql("SELECT m FROM Entities\Mensaje m WHERE m.fechaprogramada >=:fechaActual AND m.fechaprogramada <=:fechaIncrementada AND m.tipomensaje =:tipoMensaje AND m.estadomensaje =:estadoMensaje",
        array('fechaActual' => $fechaActual, 'fechaIncrementada' => $fechaIncrementada, 'tipoMensaje' => 3, 'estadoMensaje' => 0));
        foreach ($mensajes as $key => $value) {
            $this->_mensaje->get($value->getId());
            $destino = $this->_mensaje->getInstance()->getCorreo();
            $texto = $this->_mensaje->getInstance()->getMensaje();
            $validacion = $this->correo($destino, $texto);
            if($validacion){
                $this->_usuario = $this->loadModel('usuario');
                if($value->getDosis()){
                    $this->_usuario->get($value->getDosis()->getUsuario()->getId());
                }else{
                    $this->_usuario->get($value->getUsuario()->getId());
                }
                $saldo = $this->_usuario->getInstance()->getSaldo();
                $saldo = $saldo - $this->_mensaje->getInstance()->getValor();
                $this->_usuario->getInstance()->getSaldo($saldo);
                $this->_usuario->update();
                $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(2));
                $this->_mensaje->getInstance()->setFechaEnvio(new \DateTime());
                $this->_mensaje->update();
            }
        }
    }

    public function envioMensajeTexto(){
        $fechaActual = date('Y-m-d H:i:s');
        $fechaTemp = strtotime('+5 minutes',strtotime($fechaActual));
        $fechaIncrementada = date('Y-m-d H:i:s',$fechaTemp);
        $mensajes = $this->_mensaje->dql("SELECT m FROM Entities\Mensaje m WHERE m.fechaprogramada >=:fechaActual AND m.fechaprogramada <=:fechaIncrementada AND m.tipomensaje =:tipoMensaje AND m.estadomensaje =:estadoMensaje",
        array('fechaActual' => $fechaActual, 'fechaIncrementada' => $fechaIncrementada, 'tipoMensaje' => 1, 'estadoMensaje' => 0));
        foreach ($mensajes as $key => $value) {
            $this->_mensaje->get($value->getId());
            $destino = $this->_mensaje->getInstance()->getTelefono();
            $texto = $this->_mensaje->getInstance()->getMensaje();
            $validacion = $this->mensajeTexto($destino, $texto);
            if($validacion){
                $this->_usuario = $this->loadModel('usuario');
                if($value->getDosis()){
                    $this->_usuario->get($value->getDosis()->getUsuario()->getId());
                }else{
                    $this->_usuario->get($value->getUsuario()->getId());
                }
                $saldo = $this->_usuario->getInstance()->getSaldo();
                $saldo = $saldo - $this->_mensaje->getInstance()->getValor();
                $this->_usuario->getInstance()->setSaldo($saldo);
                $this->_usuario->update();
                $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(2));
                $this->_mensaje->getInstance()->setFechaEnvio(new \DateTime());
                $this->_mensaje->update();
            }
        } 
    }

}

?>