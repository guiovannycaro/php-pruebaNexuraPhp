<?php
require_once '../DataB/conexion.php';

$empleadoId = isset($_GET['empleado_id']) ? $_GET['empleado_id'] : null; 

if (!$empleadoId) {
    echo json_encode(["error" => "Empleado ID no proporcionado"]);
    exit;
}

class obtenerRol {

    private $db;

    public function __construct() {
        $this->db = new base_datos(); 
    }

    public function getRoles($empleadoId) {
      
        $query = 'SELECT rol_id FROM empleado_rol WHERE empleado_id = ' . (int)$empleadoId;
        $resclientesg = $this->db->query($query);
        $roles = [];
        while ($itemclientesg = $this->db->fetch_row($resclientesg)) {
            $roles[] = $itemclientesg['rol_id'];
        }
        return $roles; 
    }
}


$rolObj = new obtenerRol();
$roles = $rolObj->getRoles($empleadoId);
header('Content-Type: application/json');
echo json_encode($roles);
?>