<?php

class campanaController extends Controller
{   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
        $this->_tiposMensaje = $this->loadModel('tiposmensaje');
        $this->_estadoMensaje = $this->loadModel('estadomensaje');
    }
    
    public function index() {
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Listado';
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        $this->_view->datos = $this->_model->findBy(array('usuario' => Session::get('codigo')));
        $this->_view->setJsP(array('dataTables/jquery.dataTables','dataTables/dataTables.bootstrap'));
        $this->_view->setCssP(array('dataTables/dataTables.bootstrap'));
        $this->_view->renderizar('index', strtolower($this->_presentRequest->getControlador()));
    }

    public function agregar() {
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Agregar';
        $this->_view->miga = "Agregar";
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        $this->_view->tiposMensajes = $this->_tiposMensaje->findBy(array('estado' => 1));
        if($_POST){
            $this->_model = $this->loadModel($this->_presentRequest->getControlador());
            $this->obj();
        }
        $this->_view->renderizar('obj', ucwords(strtolower($this->_presentRequest->getControlador())));
    }

    private function obj($new = true) {
        $arrayTexto = array('nombre');
        $rta = $this->validarArrays($arrayTexto);
        if($rta){
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $file = $_FILES['archivo']['tmp_name'];
        $cadena = file_get_contents($file);
        $arrayCadena =  explode("\n", $cadena);
        foreach ($arrayCadena as $key => $value) {
            $arrayFila = explode(",", $value);
            foreach ($_POST['tipoMensaje'] as $key => $men) {
                $this->_mensaje = $this->loadModel('mensaje');
                $this->_mensaje->getInstance()->setTelefono($arrayFila[2]);
                $this->_mensaje->getInstance()->setCorreo($arrayFila[1]);
                if($this->getTexto('fecha') == ""){
                    $fecha = new \DateTime($this->getFecha($arrayFila[4]));
                }else{
                    $fecha = new \DateTime($this->getFecha($this->getTexto('fecha')));
                }
                $this->_mensaje->getInstance()->setFechaProgramada($fecha);
                $this->_mensaje->getInstance()->setDosis(null);
                $this->_mensaje->getInstance()->setUsuario($this->_usuario->get(Session::get('codigo')));
                if($this->getTexto('mensaje') == ""){
                    $mensaje = $arrayFila[3];
                }else{
                    $mensaje = $this->getTexto('mensaje');
                }
                $this->_mensaje->getInstance()->setMensaje($mensaje);
                $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(0));
                $this->_mensaje->getInstance()->setFechaEnvio(new \DateTime('00/00/00 00:00'));
                $this->_mensaje->getInstance()->setTipoMensaje($men);
                $valorMensaje = $this->_tiposMensaje->get($men)->getValor();
                $this->_mensaje->getInstance()->setValor($valorMensaje);
                $this->_mensaje->save();
            }
        }
        $this->_model->getInstance()->setNombre($this->getTexto('nombre'));
        $this->_model->getInstance()->setFechaCampa(new \DateTime());
        $this->_model->getInstance()->setUsuario($this->_usuario->get(Session::get('codigo')));
        if($new){
            $this->_model->save(); 
            Session::set('mensaje','Registro Creado con Exito.');
        }else{
            $this->_model->update(); 
            Session::set('mensaje','Registro Actualizado con Exito.');
        }
        $this->redireccionar($this->_presentRequest->getControlador().'/');
    }

}

?>