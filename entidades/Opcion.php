<?php 
/**
 * 
 */
class Opcion
{

 private $id_opcion;
 private $nombre_opcion;



 //para los get y set de id
    public function getId_opcion()
    {
        return $this->id_opcion;
    }

    public function setId_opcion($id_opcion)
    {
        $this->id_opcion = $id_opcion;
    }
    //para los get y set de nombre opcion
    public function getNombre_opcion()
    {
        return $this->nombre_opcion;
    }

    public function setNombre_opcion($nombre_opcion)
    {
        $this->nombre_opcion = $nombre_opcion;
    }



    


}


 ?>