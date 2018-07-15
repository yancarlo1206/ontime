<?php

class mantenimientoController extends Controller {   

    public function __construct() {
        parent::__construct();
        //Session::acceso('admin');
        //Session::acceso('usuario');
    }
    
    public function index() {
    	$this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Listado';
        $this->_view->datos = $this->_model->resultList();
        $this->_view->setJsP(array('dataTables/jquery.dataTables','dataTables/dataTables.bootstrap'));
        $this->_view->setCssP(array('dataTables.bootstrap'));
        $this->_view->renderizar('index', ucwords(strtolower($this->_presentRequest->getControlador())));
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

    public function agregar($id = 0) {
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Agregar';
        if($_POST){
            $this->_model = $this->loadModel($this->_presentRequest->getControlador());
            $this->obj();
        }
        $this->_view->renderizar('obj', ucwords(strtolower($this->_presentRequest->getControlador())));
    }

     private function obj($new = true) {
        $arrayTexto = array('nombre','descripcion');
        $arrayInt = array('id');
        $rta = $this->validarArrays($arrayTexto,$arrayInt);
        if($rta){
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $this->_model->getInstance()->setItem($this->getTexto('item'));
        $this->_model->save();
        if($new){
            Session::set('mensaje','Registro Creado con Exito.');
        }else{
            $this->_model->update(); 
            Session::set('mensaje','Registro Actualizado con Exito.');
        }
        $this->redireccionar($this->_presentRequest->getControlador().'/');
    }

}

?>