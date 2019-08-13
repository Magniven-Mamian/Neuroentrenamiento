<?php 


class Pregunta
{

    private $id_pregunta;
    private $nombre_pregunta;
    private $fecha_creacion;
    private $tipo;
    
   //para los get y set de id
    public function getId_pregunta()
    {
        return $this->id_pregunta;
    }

    public function setId_pregunta($id_pregunta)
    {
        $this->id_pregunta = $id_pregunta;
    }
    //para los get y set de nombre grupo
    public function getNombre_pregunta()
    {
        return $this->nombre_pregunta;
    }

    public function setNombre_pregunta($nombre_pregunta)
    {
        $this->nombre_pregunta = $nombre_pregunta;
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

     //para los get y set de fecha_creacion
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}