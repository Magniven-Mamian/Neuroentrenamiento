<?php

class Estudiante
{

    private $id_estudiante;
    private $semestre;
    private $estado;
    
   //para los get y set de id
    public function getId_estudiante()
    {
        return $this->id_estudiante;
    }

    public function setId_estudiante($id_estudiante)
    {
        $this->id_estudiante = $id_estudiante;
    }

     //para los get y set de id
    public function getSemestre()
    {
        return $this->semestre;
    }

    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    }

   public function getEstado(){

    return $this->estado;
   }

   public function setEstado($estado){


    $this->estado=$estado;
   }

}