<?php

class vehiculoController extends Controller
{   
    public function __construct() {
        parent::__construct();
        Session::acceso('admin');
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

    public function agregar() {
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Agregar';
        if($_POST){
            $this->_model = $this->loadModel($this->_presentRequest->getControlador());
            $this->obj();
        }
        $this->_view->renderizar('obj', ucwords(strtolower($this->_presentRequest->getControlador())));
    }

    public function actualizar($id=0) {
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_view->titulo = ucwords($this->_presentRequest->getControlador()).' :: Actualizar';
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
        $rta = $this->validarArrays($arrayTexto);
        if($rta){
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $this->_model->getInstance()->setItem($this->getTexto('item'));
        if($new){
            $this->_model->save(); 
            Session::set('mensaje','Registro Creado con Exito.');
        }else{
            $this->_model->update(); 
            Session::set('mensaje','Registro Actualizado con Exito.');
        }
        $this->redireccionar($this->_presentRequest->getControlador().'/');
    }

    /*public function subirImagen() {
        $id = $this->getInt("id");
        $tipo = $this->getInt("tipoImagen");
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_model->get($id);
        $metodo = "getImagen".$tipo;
        if($this->_model->getInstance()->$metodo()){
           $array["error"] = "La Imagen Número ".$tipo." ya Existe";
            echo (json_encode($array));
            exit; 
        }
        if ($_FILES['imagen']['name'] != "") {
            $array = array();
            $configSubir = array();
            $configRender = array();
            $configSubir['allowed_types'] = 'jpg|png|jpeg';
            $configSubir['file_name'] = $this->_model->getInstance()->getPlaca()."_".$tipo;
            $configRender['new_image']=ROOT.'public'.DS.'img'.DS.'vehiculos'.DS;
            $configRender['width']=600;//245
            $configRender['height']=388;//184
            $rta = $this->subirImg($configSubir,$configRender,'imagen');
            if($rta){
                $array["error"] = $rta;
                echo (json_encode($array));
                exit;
            }
            $nombreImg = $_FILES['imagen']['name'];
            $extTmp = explode(".", $nombreImg);
            $ext = $extTmp[count($extTmp)-1];
            $metodo = "setImagen".$tipo;
            $this->_model->getInstance()->$metodo($ext);
            $this->_model->update();
            $array["id"] = $this->_model->getInstance()->getId();
            $array["placa"] = $this->_model->getInstance()->getPlaca();
            $array["imagen1"] = $this->_model->getInstance()->getImagen1();
            $array["imagen2"] = $this->_model->getInstance()->getImagen2();
        }
        echo (json_encode($array));
    }*/

    /*public function eliminarImagen(){
        $array = array();
        $id = $this->getInt('id');
        $imagen = $this->getInt('imagen');
        $this->_model = $this->loadModel($this->_presentRequest->getControlador());
        $this->_model->get($id);
        $metodoGet = "getImagen".$imagen;
        $metodoSet = "setImagen".$imagen;
        if($this->_model->getInstance()){
            $nombreImagen = $this->_model->getInstance()->getPlaca()."_".$imagen;
            try {
                unlink(ROOT."public".DS."img".DS."vehiculos".DS.$nombreImagen.".".$this->_model->getInstance()->$metodoGet());
                $this->_model->getInstance()->$metodoSet("");
                $this->_model->update();
            } catch (Exception $e) {
                $array["error"] = "Error";
                echo (json_encode($array));
                exit; 
            }
        }else{
            $array["error"] = "Error";
            echo (json_encode($array));
            exit; 
        }
        echo (json_encode($array));
    }*/

}

?>