<?php

class empleados
{
    public $id;
    public $nombre;
    public $email;
    public $sexo;
    public $areaId;
    public $aname;    
    public $boletin;    
    public $descripcion;    
    public $estado;
    public $rol;
    private $db;

    public function __construct() {
        $this->db = new base_datos(); // Instancia de la base de datos
    }

    public function Listar() {
        try {
            $clientesg = array();
            $sqlclientesg = 
            "SELECT empleados.idempleado,empleados.nombre,empleados.email,
                    empleados.sexo,areas.nombre as narea,empleados.boletin
	               ,empleados.descripcion,roles.idrol as rol,empleados.estado,areas.idarea as area
	         FROM empleado_rol
	         join empleados on empleado_rol.empleado_id = empleados.idempleado
	         join areas on empleados.area_id =areas.idarea
	         join roles on empleado_rol.rol_id = roles.idrol";
            $resclientesg = $this->db->query($sqlclientesg);
    
            // Iterate over the result set and create objects of class empleados
            while ($itemclientesg = $this->db->fetch_row($resclientesg)) {
                $empleado = new empleados();
                $empleado->id = $itemclientesg['idempleado'];
                $empleado->nombre = $itemclientesg['nombre'];
                $empleado->email = $itemclientesg['email'];
                $empleado->sexo = $itemclientesg['sexo'];
                $empleado->areaId = $itemclientesg['narea'];
                $empleado->boletin = $itemclientesg['boletin'];
                $empleado->descripcion = $itemclientesg['descripcion'];
                $empleado->rol = $itemclientesg['rol'];
                $empleado->estado = $itemclientesg['estado'];
                $empleado->aname = $itemclientesg['area'];
                array_push($clientesg, $empleado); // Push the object instead of the array
            }
    
            return $clientesg;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function Registrar(empleados $empleado)
    {
    
        $sqlclientesg = "INSERT INTO empleados (nombre, email, sexo, area_id, boletin, descripcion, estado)
                          VALUES ('" . $empleado->nombre . "','" . $empleado->email . "','" . $empleado->sexo . "','" . $empleado->areaId . "'
                         ,'" . $empleado->boletin . "','" . $empleado->descripcion . "','" . $empleado->estado . "')";
      
     
                         $resclientesg = $this->db->query($sqlclientesg);
       

        if ($resclientesg) {
     
            $sqlempl = "SELECT idempleado FROM empleados WHERE email = '" . $empleado->email . "'";
            $resempl = $this->db->query($sqlempl);

            if ($itemclientesg = $this->db->fetch_row($resempl)) {
                $empleado->id = $itemclientesg['idempleado'];
            }

            if (!empty($empleado->rol)) {
            
                $sqlemrg = "INSERT INTO empleado_rol (empleado_id, rol_id)
                VALUES (" . $empleado->id . "," . $empleado->rol . ")";
                $resrolg = $this->db->query($sqlemrg);
                
                if ($resrolg) {
                    echo "Rol asignado correctamente";
                } else {
                    echo "Error al asignar rol";
                }
            } else {
                echo "No se ha asignado un rol";
            }
    
            echo "Empleado registrado de manera correcta";
        } else {
            echo "Empleado no registrado de manera correcta";
        }
    }

    public function Actualizar(empleados $empleado)
	{
        $dato = false;
   
       $i_solicitud = array();

       $sqlempg = "UPDATE empleados
                   SET nombre ='".$empleado->nombre."',
                       email ='".$empleado->email."',
                       sexo ='".$empleado->sexo."',
                       area_id =".$empleado->areaId.",
                       boletin =".$empleado->boletin.",
                       descripcion ='".$empleado->descripcion."',
                    estado ='".$empleado->estado."'
                   WHERE 
                   idempleado = ".$empleado->id."";
                    
            $resclientesg = $this->db->query($sqlempg);

            if($resclientesg){
 
                echo "Cliente actualizado de manera correcta";
            }else{
                echo "Cliente no actualizado de manera correcta";
             } 

          
    }




public function Eliminar($empleado)
{
  

   $i_solicitud = array();

   $sqlg ="DELETE FROM empleado_rol
   WHERE empleado_id = ".$empleado."";
   $resg = $this->db->query($sqlg);


   $sqlempg ="DELETE FROM empleados
             WHERE idempleado = ".$empleado."";
   $resclientesg = $this->db->query($sqlempg);


   if($resclientesg){

       echo "Cliente eliminado de manera correcta";
   }else{
       echo "Cliente no eliminado de manera correcta";
    } 

}
}


?>