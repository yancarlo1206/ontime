<?php

class dosificacionController extends Controller
{   
    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
        $this->_cliente = $this->loadModel('cliente');
        $this->_medicamento = $this->loadModel('medicamento');
        $this->_frecuencia = $this->loadModel('frecuencia');
        $this->_tiposMensaje = $this->loadModel('tiposmensaje');
        $this->_estadoMensaje = $this->loadModel('estadomensaje');
        $this->_mensaje = $this->loadModel('mensaje');
        $this->_dosificacion = $this->loadModel('dosificacion');
        $this->_tarifas = $this->loadModel('tarifas');
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
        $this->_view->clientes = $this->_cliente->findBy(array('usuario' => Session::get('codigo')));
        $this->_view->medicamentos = $this->_medicamento->resultList();
        $this->_view->frecuencias = $this->_frecuencia->resultList();
        $this->_view->tiposMensajes = $this->_tiposMensaje->findBy(array('estado' => 1));
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
        $this->_view->clientes = $this->_cliente->findBy(array('usuario' => Session::get('codigo')));
        $this->_view->medicamentos = $this->_medicamento->resultList();
        $this->_view->frecuencias = $this->_frecuencia->resultList();
        $this->_view->tiposMensajes = $this->_tiposMensaje->findBy(array('estado' => 1));
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
        $arrayTexto = array('fechainicio','plantilla');
        $arrayInt = array('dosis','cliente','medicamento','frecuencia','cantidad');
        $rta = $this->validarArrays($arrayInt);
        if($rta){
            Session::set('error','Falto digitar o seleccionar <b>'.$rta.'</b>');
            $this->redireccionar($this->_presentRequest->getUrl());
            exit;  
        }
        $this->_model->getInstance()->setCliente($this->_cliente->get($this->getInt('cliente')));
        $this->_model->getInstance()->setMedicamento($this->_medicamento->get($this->getInt('medicamento')));
        $this->_model->getInstance()->setDosis($this->getInt('dosis'));
        $this->_model->getInstance()->setFechaInicio(new \DateTime($this->getFecha($this->getTexto('fechainicio'))));
        $this->_model->getInstance()->setFrecuencia($this->_frecuencia->get($this->getInt('frecuencia')));
        /*$this->_model->getInstance()->setPlantilla($this->getTexto('plantilla'));*/
        //$this->_model->getInstance()->setTiposMensaje($this->_tiposMensaje->get($this->getInt('tiposMensaje')));
        $this->_model->getInstance()->setUsuario($this->_usuario->get(Session::get('codigo')));
        $this->_model->getInstance()->setCantidadMensajes(0);
        $this->_model->getInstance()->setMensajesEnviados(0);
        $this->_model->getInstance()->setRecompra(1);
        $this->_model->getInstance()->setEstado(1);
        if($new){
            $this->_model->save();
            $medicamento = $this->_model->getInstance()->getMedicamento();
            $dosis = $this->getInt('dosis');
            $tempDosis = $dosis;
            //$cantidadMedicamento = $medicamento->getCantidad();
            $cantidadMedicamento = $this->getInt("cantidad");
            $presentacionMedicamento = $medicamento->getPresentacion();
            $frecuencia = $this->_model->getInstance()->getFrecuencia();
            $fecha = new \DateTime($this->getFecha($this->getTexto('fechainicio')));
            $tarifa = $this->_tarifas->findByObject(array('usuario' => Session::get('codigo')));
            while ($dosis <= $cantidadMedicamento) {
                foreach ($_POST['tipoMensaje'] as $key => $value) {
                    $this->_mensaje = $this->loadModel('mensaje');
                    $this->_mensaje->getInstance()->setTelefono($this->_cliente->getInstance()->getTelefono());
                    $this->_mensaje->getInstance()->setCorreo($this->_cliente->getInstance()->getCorreo());
                    $this->_mensaje->getInstance()->setFechaProgramada($fecha);
                    $this->_mensaje->getInstance()->setDosis($this->_dosificacion->get($this->_model->getInstance()->getId()));
                    $this->_mensaje->getInstance()->setUsuario(null);
                    $this->_mensaje->getInstance()->setMensaje($this->crearMensaje($this->_model->getInstance()));
                    $this->_mensaje->getInstance()->setEstadoMensaje($this->_estadoMensaje->get(0));
                    $this->_mensaje->getInstance()->setFechaEnvio(new \DateTime('00/00/00 00:00'));
                    $this->_mensaje->getInstance()->setTipoMensaje($value);
                    $this->_tiposMensaje = $this->loadModel('tiposmensaje');
                    $valorMensaje = $this->_tiposMensaje->get($value)->getValor();
                    if($tarifa){
                        $valorMensaje = $valorMensaje - ($valorMensaje * ($tarifa->getPorcentajeDescuento() / 100));
                    }
                    $this->_mensaje->getInstance()->setValor($valorMensaje);
                    $this->_mensaje->save();
                }
                $dosis += $tempDosis;
                $horas = 'PT'.$frecuencia->getHoras().'H';
                $fecha->add(new DateInterval($horas));
            } 
            Session::set('mensaje','Registro Creado con Exito.');
        }else{
            $this->_model->update(); 
            Session::set('mensaje','Registro Actualizado con Exito.');
        }
        $this->redireccionar($this->_presentRequest->getControlador().'/');
    }

    public function crearMensaje($dosis = null){
        $usuario = $this->_usuario->get(Session::get('codigo'));
        $mensaje = "";
        $cliente = $dosis->getCliente();
        $medicamento = $dosis->getMedicamento();
        if($cliente->getSexo() == 1){
            $mensaje .= "Señor ";
        }else{
            $mensaje .= "Señora ";
        }
        $mensaje .= $cliente->getNombre()." le recordamos tomar ". $medicamento->getNombre().". Este es un mensaje de ".$usuario->getNombre().", ".$usuario->getSlogan();
        return $mensaje;
    }

    public function cargarMedicamento(){
        $medicamento = $this->getPostParam("medicamento");
        $cantidad = $this->_medicamento->get($medicamento)->getCantidad();
        echo $cantidad;
    }

}

?>