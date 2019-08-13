<?php
class Profesor
{

    private $id_profesor;
    private $profesion;
    
   //para los get y set de id profesor
    public function getId_profesor()
    {
        return $this->id_profesor;
    }

    public function setId_profesor($id_profesor)
    {
        $this->id_profesor = $id_profesor;
    }

     //para los get y set de i profesion
    public function getProfesion()
    {
        return $this->profesion;
    }

    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
    }


}
