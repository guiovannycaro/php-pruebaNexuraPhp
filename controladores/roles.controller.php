<?php

require_once 'modelos/roles.php';

class rolesController{

    private $model;

    public function __CONSTRUCT(){
     
        $this->model = new roles();

    }
    
    public function Index(){
       
        require_once 'vistas/roles/roles.php';
       
    }
    
    public function Crud(){
        $areas = new roles();
        
        if(isset($_REQUEST['id'])){
            $areas = $this->model->Obtener($_REQUEST['id']);
        }
        
    
        require_once 'vistas/roles/roles-editar.php';
        
    }
    
    public function Guardar(){
        $area = new roles();
        
       
        $area->nombre = $_POST['nombre'];  
        $area->estado = $_POST['estado']; 
     
      
        $area->id > 0; 
        $this->model->Registrar($area);      
    }

    public function Updated(){
       
        $id = $_POST['id'];
        $nombre = $_POST['nombre']; 
        $estado = $_POST['estado'];

       
    
        $area = new roles();
        
        $area->id =$id;
        $area->nombre = $nombre;  
        $area->estado = $estado; 
      
       
        
        $this->model->Actualizar($area);      
       
    }
    
    public function Drop(){

       
        $this->model->Eliminar($_GET['id']);
   
    }
}