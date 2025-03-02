<?php

class roles
{
    public $id;
    public $nombre;
    public $estado;

    private $db;

    public function __construct() {
        $this->db = new base_datos(); // Instancia de la base de datos
    }

    public function Listar() {
        try {
            $rolesg = array();
            $sqlrolesg = "SELECT *
	                      FROM roles
	                     ";
            $resrolesg = $this->db->query($sqlrolesg);
    
            // Iterate over the result set and create objects of class empleados
            while ($itemrolesg = $this->db->fetch_row($resrolesg)) {
                $rol = new roles();
                $rol->id = $itemrolesg['idrol'];
                $rol->nombre = $itemrolesg['nombre'];
                $rol->estado = $itemrolesg['estado'];
    
                array_push($rolesg, $rol); // Push the object instead of the array
            }
    
            return $rolesg;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function Registrar(roles $rol)
    {

    
         $sqlempl1 = "SELECT idrol FROM roles WHERE nombre = '" . $rol->nombre . "'";
         $resempl1 = $this->db->query($sqlempl1);
         $itemclientesg1 = $this->db->fetch_row($resempl1);
     
       
         if ($itemclientesg1 > 0) {
             echo "El rol ya está registrado. Por favor ingrese un rol diferente.";
             return;  
         }
    
        $sqlclientesg = "INSERT INTO roles (nombre, estado)
                          VALUES ('" . $rol->nombre . "','" . $rol->estado . "')";
        $resclientesg = $this->db->query($sqlclientesg);
    

        if ($resclientesg) {

            echo "Rol registrado de manera correcta";
        } else {
            echo "Rol no registrado de manera correcta";
        }
    }

    public function Actualizar(roles $rol)
	{
        $dato = false;
   
       $i_solicitud = array();

       $sqlempg = "UPDATE roles
                   SET nombre ='".$rol->nombre."',
                       estado ='".$rol->estado."'
                   WHERE 
                   idrol = ".$arol->id."";
                    
            $resclientesg = $this->db->query($sqlempg);

            if($resclientesg){
 
                echo "Rol actualizado de manera correcta";
            }else{
                echo "Rol no actualizado de manera correcta";
             } 

          
    }




public function Eliminar($rol)
{
  

   $i_solicitud = array();

   $sqlg ="DELETE FROM roles
   WHERE idrol = ".$rol."";
   $resg = $this->db->query($sqlg);



   if($resclientesg){

       echo "Rol eliminado de manera correcta";
   }else{
       echo "Rol no eliminado de manera correcta";
    } 

}




}


?>