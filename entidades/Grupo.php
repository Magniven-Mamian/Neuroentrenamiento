<?php 


class Grupo
{

    private $id_grupo;
    private $nombregrupo;
    private $fecha_creacion;
    
   //para los get y set de id
    public function getId_grupo()
    {
        return $this->id_grupo;
    }

    public function setId_grupo($id_grupo)
    {
        $this->id_grupo = $id_grupo;
    }
    //para los get y set de nombre grupo
    public function getNombregrupo()
    {
        return $this->nombregrupo;
    }

    public function setNombregrupo($nombregrupo)
    {
        $this->nombregrupo = $nombregrupo;
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