<?php

class areas
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
            $areasg = array();
            $sqlareasg = "SELECT *
	                      FROM areas
	                     ";
            $resareasg = $this->db->query($sqlareasg);
    
            // Iterate over the result set and create objects of class empleados
            while ($itemareasg = $this->db->fetch_row($resareasg)) {
                $area = new areas();
                $area->id = $itemareasg['idarea'];
                $area->nombre = $itemareasg['nombre'];
                $area->estado = $itemareasg['estado'];
    
                array_push($areasg, $area); // Push the object instead of the array
            }
    
            return $areasg;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function Registrar(areas $area)
    {
    
        $sqlclientesg = "INSERT INTO areas (nombre, estado)
                          VALUES ('" . $area->nombre . "','" . $area->estado . "')";
        $resclientesg = $this->db->query($sqlclientesg);
    

        if ($resclientesg) {

            echo "Area registrado de manera correcta";
        } else {
            echo "Area no registrado de manera correcta";
        }
    }

    public function Actualizar(areas $area)
	{
        $dato = false;
   
       $i_solicitud = array();

       $sqlempg = "UPDATE areas
                   SET nombre ='".$area->nombre."',
                       estado ='".$area->estado."'
                   WHERE 
                   idarea = ".$area->id."";
                    
            $resclientesg = $this->db->query($sqlempg);

            if($resclientesg){
 
                echo "Area actualizado de manera correcta";
            }else{
                echo "Area no actualizado de manera correcta";
             } 

          
    }




public function Eliminar($area)
{
  

   $i_solicitud = array();

   $sqlg ="DELETE FROM areas
   WHERE idarea = ".$area."";
   $resg = $this->db->query($sqlg);



   if($resclientesg){

       echo "Area eliminado de manera correcta";
   }else{
       echo "Area no eliminado de manera correcta";
    } 

}





}


?>