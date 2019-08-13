<?php 

/**
 * 
 */
class MotivacioEducativa
{

	private $id_motivacion;
    private $fecha_realizacionm;
    private $cedula;

   //para el id motivacion
    public function getId_motivacion(){

    	return $this->id_motivacion;

    }
    public function setId_motivacion($id_motivacion){
    	$this->id_motivacion=$id_motivacion;

    }

    //para los get y set de  fecha realizacionm
    public function getFecha_realizacionm()
    {
        return $this->fecha_realizacionm;
    }

    public function setFecha_realizacionm($fecha_realizacionm)
    {
        $this->fecha_realizacionm = $fecha_realizacionm;
    }



}



 ?>