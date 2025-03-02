<?php

require_once 'modelos/areas.php';

class areasController{

    private $model;

    public function __CONSTRUCT(){
     
        $this->model = new areas();

    }
    
    public function Index(){
       
        require_once 'vistas/areas/areas.php';
       
    }
    
    public function Crud(){
        $areas = new areas();
        
        if(isset($_REQUEST['id'])){
            $areas = $this->model->Obtener($_REQUEST['id']);
        }
        
    
        require_once 'vistas/areas/areas-editar.php';
        
    }
    
    public function Guardar(){
        $area = new areas();
        
       
        $area->nombre = $_POST['nombre'];  
        $area->estado = $_POST['estado']; 
     
      
        $area->id > 0; 
        $this->model->Registrar($area);      
    }

    public function Updated(){
       
        $id = $_POST['id'];
        $nombre = $_POST['nombre']; 
        $estado = $_POST['estado'];

       
    
        $area = new areas();
        
        $area->id =$id;
        $area->nombre = $nombre;  
        $area->estado = $estado; 
      
       
        
        $this->model->Actualizar($area);      
       
    }
    
    public function Drop(){

       
        $this->model->Eliminar($_GET['id']);
   
    }
}