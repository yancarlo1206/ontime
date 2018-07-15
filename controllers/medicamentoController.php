<?php

class medicamentoController extends Controller
{   
    public function __construct() {
        parent::__construct();
        $this->_tipoMedicamento = $this->loadModel('tipomedicamento');
        $this->_laboratorio = $this->loadModel('laboratorio');
        $this->_presentacion = $this->loadModel('presentacion');
    }
    
    public function index() {
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Listado';
        $this->_view->controlador = ucwords($this->_presentRequest->getControlador());
        $this->_view->datos = $this->_model->resultList();
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
        $this->_view->tiposMedicamentos = $this->_tipoMedicamento->resultList();
        $this->_view->laboratorios = $this->_laboratorio->resultList();
        $this->_view->presentaciones = $this->_presentacion->resultList();
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
        $this->_view->tiposMedicamentos = $this->_tipoMedicamento->resultList();
        $this->_view->laboratorios = $this->_laboratorio->resultList();
        $this->_view->presentaciones = $this->_presentacion->resultList();
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
        $arrayTexto = array('nombre','infoAdicional');
        $arrayInt = array('presentacion','tipo','laboratorio', 'cantidad');
        $rta = $this->validarArrays($arrayTexto, $arrayInt);
        if($rta){
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $this->_model->getInstance()->setNombre($this->getTexto('nombre'));
        $this->_model->getInstance()->setPresentacion($this->_presentacion->get($this->getInt('presentacion')));
        $this->_model->getInstance()->setTipoMedicamento($this->_tipoMedicamento->get($this->getInt('tipo')));
        $this->_model->getInstance()->setLaboratorio($this->_laboratorio->get($this->getInt('laboratorio')));
        $this->_model->getInstance()->setCantidad($this->getInt('cantidad'));
        $this->_model->getInstance()->setInfoAdicional($this->getTexto('infoAdicional'));
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