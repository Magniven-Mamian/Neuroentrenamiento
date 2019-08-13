<?php 
include_once  '../modelo/PreguntaDao.php';

/**
 * 
 */
class PreguntaControlador
{



    public function crearPregunta($nombre_pregunta, $tipo, $id_encuesta)
    {
       
        return PreguntaDao::crearPregunta($nombre_pregunta, $tipo, $id_encuesta);
    }

    public function getPregunta($id_encuesta){
    	return PreguntaDao::getPregunta($id_encuesta);
    }


  //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function actualizarPregunta($nombre_pregunta, $tipo,$id_pregunta)
    {
        $obj_pregunta = new Pregunta();

        $obj_pregunta->setId_pregunta($id_pregunta);
        $obj_pregunta->setNombre_pregunta($nombre_pregunta);
        $obj_pregunta->setTipo($tipo);
        
       
     
        return PreguntaDao::actualizarPregunta($obj_pregunta);
    }

    public function crearopcion($nombre_opcion,  $id_pregunta){
       return PreguntaDao::crearopcion($nombre_opcion,  $id_pregunta);

     }

      public function getopcionesPregunta($id_pregunta){
        return PreguntaDao::getopcionesPregunta($id_pregunta);
    }
      public function eliminarOpcion($id_opcion){
        return PreguntaDao::eliminarOpcion($id_opcion);
    }

    public function actualizarOpcion($id_opcion, $nombre_opcion){

        $obj_opcion=new Opcion();
        $obj_opcion->setId_opcion($id_opcion);
        $obj_opcion->setNombre_opcion($nombre_opcion);

        return PreguntaDao::actualizarOpcion($obj_opcion);
    }




}



//PreguntaControlador::actualizarOpcion(4,'Argentina');
//PreguntaControlador::actualizarPregunta('te gusta nadar','1','6');



