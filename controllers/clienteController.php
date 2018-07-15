<?php

class clienteController extends Controller
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

    public function get() {
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        header('Content-type: application/json');
        $arrayRta = array('error'=>false);
        if(!$_POST){
            $arrayRta['error'] = 'Error';
            echo json_encode($arrayRta);
            exit;   
        }
        if($this->getInt('id')<1){
            $arrayRta['error'] = 'Error de id';
            echo json_encode($arrayRta);
            exit;   
        }
        $obj = $this->_model->get($this->getInt('id'));
        if(!$obj){
            $arrayRta['error'] = ' Elemento no existe';
            echo json_encode($arrayRta);
            exit; 
        }
        $datos = array();

        $datos['item'] = $obj->getItem();
        $arrayRta['datos'] = $datos;
        echo json_encode($arrayRta);
        exit; 
    }

    public function agregar() {
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Agregar';
        $this->_view->miga = "Agregar";
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        if($_POST){
            $this->_model = $this->loadModel($this->_presentRequest->getControlador());
            $this->obj();
        }
        $this->_view->renderizar('obj', ucwords(strtolower($this->_presentRequest->getControlador())));
    }

    public function actualizar($id=0) {
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Actualizar';
        $this->_view->miga = "Actualizar";
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        if($this->filtrarInt($id)<1){
            Session::set('error','Registro No Encontrado.');
            $this->redireccionar();
        }
        $this->_model->get($this->filtrarInt($id));
        if(!$this->_model->getInstance()){
            Session::set('error','Registro No Encontrado.');
            $this->redireccionar();
        }
        $this->_view->dato = $this->_model->getInstance();
        if($_POST){
            $this->obj(false);
        }
        $this->_view->renderizar('obj', ucwords(strtolower($this->_presentRequest->getControlador())));
    }

    private function obj($new = true) {
        $arrayTexto = array('nombre', 'apellido', 'correo', 'telefono');
        $arrayInt = array('documento', 'sexo');
        $rta = $this->validarArrays($arrayTexto, $arrayInt);
        if($rta){
            var_dump($rta);
            exit;
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $this->_model->getInstance()->setDocumento($this->getTexto('documento'));
        $this->_model->getInstance()->setNombre($this->getTexto('nombre'));
        $this->_model->getInstance()->setApellido($this->getTexto('apellido'));
        $this->_model->getInstance()->setCorreo($this->getTexto('correo'));
        $this->_model->getInstance()->setTelefono($this->getTexto('telefono'));
        $this->_model->getInstance()->setSexo($this->getInt('sexo'));
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

    public function masivo(){
        if($this->getInt('guardar') == 1){
            $this->_model = $this->loadModel($this->_presentRequest->getControlador());
            $clientes = $this->_model->findBy(array('usuario' => Session::get('codigo')));
            $mensaje = $this->getTexto('mensaje');
            $fecha = new \DateTime($this->getFecha($this->getTexto('fecha')));
            foreach ($_POST['tipoMensaje'] as $key => $value) {
                foreach ($clientes as $key => $cliente) {
                    $this->_mensaje = $this->loadModel('mensaje');
                    $this->_mensaje->getInstance()->setTelefono($cliente->getTelefono());
                    $this->_mensaje->getInstance()->setCorreo($cliente->getCorreo());
                    $this->_mensaje->getInstance()->setFechaProgramada($fecha);
                    $this->_mensaje->getInstance()->setDosis(null);
                    $this->_mensaje->getInstance()->setMensaje($mensaje);
                    $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(0));
                    $this->_mensaje->getInstance()->setFechaEnvio(new \DateTime('00/00/00 00:00'));
                    $this->_mensaje->getInstance()->setTipoMensaje($value);
                    $this->_mensaje->save();
                }
            }
            Session::set('mensaje','Mensajes Creados con Exito.');
            $this->redireccionar($this->_presentRequest->getControlador().'/');
        }
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Envio Masivo';
        $this->_view->miga = "Envio Masivo";
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        $this->_view->tiposMensajes = $this->_tiposMensaje->findBy(array('estado' => 1));
        $this->_view->renderizar('masivo', ucwords(strtolower($this->_presentRequest->getControlador())));      
    }

}

?>