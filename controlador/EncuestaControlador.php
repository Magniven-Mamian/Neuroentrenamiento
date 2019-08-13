

<?php 
include_once  '../modelo/EncuestaDao.php';

/**
 * 
 */
class EncuestaControlador
{


  //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function crearEncuesta($nombre, $id_usuario)
    {
        $obj_encuesta = new Encuesta();
        $obj_usuario= new Usuario();


        $obj_encuesta->setNombreEncuesta($nombre);
        $obj_usuario->setId($id_usuario);
       
     
        return EncuestaDao::crearEncuesta($obj_encuesta, $obj_usuario);
        
    }
     public function getEncuesta($id_usuario)
    {
        return EncuestaDao::getEncuesta($id_usuario);
    }

//para imprimir la lista de encuetsas 
     public function getEncuestas($id_estudiante)
    {
        return EncuestaDao::getEncuestas($id_estudiante);
    }

    public function   getEncuestasIdadministrador(){
    return EncuestaDao::getEncuestasIdadministrador();
    }

  public  function getEncuestasnombreprofesor($id_grupo){
      return EncuestaDao::getEncuestasnombreprofesor($id_grupo);
    }

public function getEncuestaslista($id_grupo, $id_profesor){
  return EncuestaDao::getEncuestaslista($id_grupo, $id_profesor);
}


         
     public function getEncuestaId($id_encuesta)
    {
        return EncuestaDao::getEncuestaId($id_encuesta);
    }




    //para eliminar el encuesta
    public function eliminarEncuesta($id)
    {
        return EncuestaDao::eliminarEncuesta($id);
    }


    //para  mprimir la pregunta
    public function getPregunta($id)
    {
        return EncuestaDao::getPregunta($id);
    }

     //para  mprimir la opciones
    public function getOpcionesId($id)
    {
        return EncuestaDao::getOpcionesId($id);
    }



  //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function actualizarEncuesta($nombre, $id_encuesta)
    {
        $obj_encuesta = new Encuesta();

        $obj_encuesta->setNombreEncuesta($nombre);
        $obj_encuesta->setId_encuesta($id_encuesta);
       
     
        return EncuestaDao::actualizarEncuesta($obj_encuesta);
    }

   public function  insertRespuesta($id_pregunta, $valor, $id_estudiante) {
           return EncuestaDao::insertRespuesta($id_pregunta, $valor, $id_estudiante) ;
        }

   public function  getNombrePregunta(){
   return EncuestaDao::getNombrePregunta();
   }
      public function  getRespuesta($id_pregunta){
          return EncuestaDao::getRespuesta($id_pregunta);
     }


}

