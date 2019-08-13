<?php


class coopersmith 
{  

private $id_coopersmith;
private $fecha_realizacion;
 private $cedula;

//para los get y set de id
    public function getId_coopersmith()
    {
        return $this->id_coopersmith;
    }

    public function setId_coopersmith($id_coopersmith)
    {
        $this->id_coopersmith = $id_coopersmith;
    }

    //para los get y set de  fecha realizacion
    public function getFecha_realizacion()
    {
        return $this->fecha_realizacion;
    }

    public function setFecha_realizacion($fecha_realizacion)
    {
        $this->fecha_realizacion = $fecha_realizacion;
    }
 
}

