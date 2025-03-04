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
    public $nomrol;
    private $db;

    public function __construct() {
        $this->db = new base_datos(); // Instancia de la base de datos
    }

    public function Listar() {
        try {
            $clientesg = array();
            $sqlclientesg = "
			SELECT 
                empleados.idempleado,
                empleados.nombre,
                empleados.email,
                empleados.sexo,
                areas.nombre AS narea,
                empleados.boletin,
                empleados.descripcion,
                STRING_AGG(roles.idrol::TEXT, ',' ORDER BY roles.idrol) AS rol,  -- Concatenamos los IDs de roles ordenados
                STRING_AGG(roles.nombre, ',' ORDER BY roles.nombre) AS nomrol,  -- Concatenamos los nombres de roles ordenados
                empleados.estado,
                areas.idarea AS area
            FROM  empleado_rol
                JOIN  empleados ON empleado_rol.empleado_id = empleados.idempleado
                JOIN areas ON empleados.area_id = areas.idarea
                JOIN  roles ON empleado_rol.rol_id = roles.idrol
            GROUP BY 
                empleados.idempleado, 
                empleados.nombre, 
                empleados.email, 
                empleados.sexo, 
                areas.nombre, 
                empleados.boletin, 
                empleados.descripcion, 
                empleados.estado, 
                areas.idarea
             ORDER BY 
                empleados.nombre ";
             
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
                $empleado->nomrol=$itemclientesg['nomrol'];
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
       
        $sqlempl1 = "SELECT idempleado FROM empleados WHERE email = '" . $empleado->email . "'";
        $resempl1 = $this->db->query($sqlempl1);
        $itemclientesg1 = $this->db->fetch_row($resempl1);

        if ($itemclientesg1 > 0) {
            echo "El email ya está registrado. Por favor ingrese un email diferente.";
            return;  
        }
       
        $sqlclientesg = "INSERT INTO empleados (nombre, email, sexo, area_id, boletin, descripcion, estado)
                         VALUES ('" . $empleado->nombre . "','" . $empleado->email . "','" . $empleado->sexo . "','" . $empleado->areaId . "'
                                 ,'" . $empleado->boletin . "','" . $empleado->descripcion . "','" . $empleado->estado . "')";
        $resclientesg = $this->db->query($sqlclientesg);
      
        if ($resclientesg) 
		{
        
            $sqlempl = "SELECT idempleado FROM empleados WHERE email = '" . $empleado->email . "'";
            $resempl = $this->db->query($sqlempl);
    
           
            if ($itemclientesg = $this->db->fetch_row($resempl)) 
			{
                $empleado->id = $itemclientesg['idempleado'];
            }
    
   
            if (!empty($empleado->rol)) 
			{

                $rolEmpleado = explode(',',$empleado->rol);
                for($i=0;$i<count($rolEmpleado);$i++)
				{
                    $sqlemrg = "INSERT INTO empleado_rol (empleado_id, rol_id)
                            VALUES (" . $empleado->id . "," . $rolEmpleado[$i] . ")";
                    $resrolg = $this->db->query($sqlemrg);
                }
                
                if ($resrolg) 
				{
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
        $sqlempg = "UPDATE empleados
                    SET nombre = '".$empleado->nombre."',
                        email = '".$empleado->email."',
                        sexo = '".$empleado->sexo."',
                        area_id = ".$empleado->areaId.",
                        boletin = ".$empleado->boletin.",
                        descripcion = '".$empleado->descripcion."',
                        estado = '".$empleado->estado."'
                    WHERE idempleado = ".$empleado->id."";
                    
        $resclientesg = $this->db->query($sqlempg);
        $this->actualizarRol($empleado->id,$empleado->rol);
      
        if ($resclientesg) {
            echo "Cliente actualizado de manera correcta.";
            $dato = true; 
        } else {
            echo "Cliente no actualizado de manera correcta.";
            return false; 
        }
		
        return $dato; 
    }


 public function actualizarRol($empleadoID,$rol){

    $i_solicitud = array();
    $sqlg ="DELETE FROM empleado_rol WHERE empleado_id = ".$empleadoID."";
    $resg = $this->db->query($sqlg);

    $rolEmpleado = explode(',',$rol);
    for($i=0;$i<count($rolEmpleado);$i++)
	{
       $sqlemrg = "INSERT INTO empleado_rol (empleado_id, rol_id)
                VALUES (" . $empleadoID . "," . $rolEmpleado[$i] . ")";
       $resrolg = $this->db->query($sqlemrg);
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


   if($resclientesg)
   {

       echo "Cliente eliminado de manera correcta";
   }else{
       echo "Cliente no eliminado de manera correcta";
   } 

 }
}


?>