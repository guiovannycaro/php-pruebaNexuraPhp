<?php
require_once 'modelos/empleados.php';
require_once 'modelos/areas.php';
require_once 'modelos/roles.php';
class empleadosController{
    
    private $model;
    private $area;
    private $rol;
    public function __CONSTRUCT(){
        $this->model = new empleados();
        $this->area = new areas();
        $this->rol = new roles();
    }
    
    public function Index(){
       
        require_once 'vistas/empleados/empleados.php';
       
    }
    
    public function Crud(){
        $empleados = new empleados();
        
        if(isset($_REQUEST['id'])){
            $empleados = $this->model->Obtener($_REQUEST['id']);
        }
        
    
        require_once 'vistas/empleados/empleados-editar.php';
        
    }
    
    public function Guardar(){

      
        $empleado = new empleados();
        
       
        $empleado->nombre = $_POST['nombre'];
        $empleado->email = $_POST['email'];
        $empleado->sexo = $_POST['sexo'];
        $empleado->areaId = $_POST['area'];  
        $empleado->boletin = $_POST['boletin'];    
        $empleado->descripcion = $_POST['descripcion'];    
        $empleado->estado = $_POST['estado']; 
        $empleado->rol = $_POST['rol']; 
      
        $empleado->id > 0; 
        $this->model->Registrar($empleado);      
    }

    public function Updated(){
       
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $area = $_POST['area'];
        $descripcion = $_POST['descripcion'];
        $boletin = $_POST['boletin'];
        $roles = isset($_POST['roles']) ? $_POST['roles'] : ''; // Los roles están separados por comas
        $estado = $_POST['estado'];

       
    
        $empleado = new empleados();
        
        $empleado->id =$id;
        $empleado->nombre = $nombre;
        $empleado->email = $email;
        $empleado->sexo = $sexo;
        $empleado->areaId = $area;  
        $empleado->boletin = $boletin;    
        $empleado->descripcion = $descripcion; 
        $empleado->rol =  $roles;       
        $empleado->estado = $estado; 
      
       
        
        $this->model->Actualizar($empleado);      
       
    }
    
    public function Drop(){

       
        $this->model->Eliminar($_GET['id']);
   
    }
}