<?php



 class Encuesta
{

    private $id_encuesta;
    private $nombreencuesta;
    private $fecha_creacion;
    
   //para los get y set de id
    public function getId_encuesta()
    {
        return $this->id_encuesta;
    }

    public function setId_encuesta($id_encuesta)
    {
        $this->id_encuesta = $id_encuesta;
    }
    //para los get y set de nombre grupo
    public function getNombreEncuesta()
    {
        return $this->nombreencuesta;
    }

    public function setNombreEncuesta($nombreencuesta)
    {
        $this->nombreencuesta = $nombreencuesta;
    }
   //para los get y set de fecha_creacion
    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }
}







