<?php

class cancelarController extends Controller
{   
    public function __construct() {
        parent::__construct();
        $this->_mensaje = $this->loadModel('mensaje');
        $this->_estadoMensaje = $this->loadModel('estadoMensaje');
        $this->_mensajeCancelado = $this->loadModel('mensajeCancelado');
    }
    
    public function index() {
        if($this->getInt('registrar')){
            $mensaje = $this->getInt('mensaje');
            $codigo = $this->getInt('codigo');
            $this->_mensaje->get($mensaje);
            $this->_mensajeCancelado->findByObject(array('mensaje' => $mensaje));
            if(!$this->_mensajeCancelado->getInstance()){
                $this->redireccionar("error");
            }
            $codigoMensaje = $this->_mensajeCancelado->getInstance()->getCodigo();
            if($codigoMensaje == $codigo){
                $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(4));
                $this->_mensaje->update();
                Session::set('mensaje','Proceso Validado');
            }else{
                Session::set('error','Error del Proceso');
            }
            $this->redireccionar('cancelar/'.$mensaje);
        }
        $url = $_GET['url'];
        $urlCancelar = str_replace("cancelar", "", $url);
        $codMensaje = str_replace("/", "", $urlCancelar);
        if($codMensaje == ""){
            $this->redireccionar("error");
        }
        $this->_mensaje->get($codMensaje);
        if(!$this->_mensaje->getInstance()){
            $this->redireccionar("error");
        }
        $codigoSeguridad = rand(100000,999999);
        $cancelado = $this->_mensajeCancelado->findByObject(array('mensaje' => $codMensaje));
        if($cancelado){
            $this->_mensajeCancelado->getInstance()->setCodigo($codigoSeguridad);    
            $this->_mensajeCancelado->getInstance()->setFecha(new \DateTime());
        }else{
            $this->_mensajeCancelado->getInstance()->setMensaje($this->_mensaje->get($codMensaje));
            $this->_mensajeCancelado->getInstance()->setCodigo($codigoSeguridad);
            $this->_mensajeCancelado->getInstance()->setFecha(new \DateTime());
            $this->_mensajeCancelado->getInstance()->setEstado(1);
        }
        $this->_mensajeCancelado->save();
        $texto = "El codigo de confirmacion para eliminar es ".$codigoSeguridad.", este es un mensaje de Ontime.";
        $this->mensajeTexto($this->_mensaje->getInstance()->getTelefono(), $texto);
        $this->_view->mensaje = $codMensaje;
        $this->_view->renderizar("index");
    }

}

?>