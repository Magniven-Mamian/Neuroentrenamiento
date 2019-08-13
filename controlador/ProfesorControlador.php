<?php

include_once  '../modelo/ProfesorDao.php';

class ProfesorControlador
{

public function getProfesor(){
   return ProfesorDao::getProfesor();
}

public function getProfesorId($cedula){
   return ProfesorDao::getProfesorId($cedula);
}



//para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function crearProfesor($cedula,$nombre,$apellidos,$genero,$fecha_nacimiento,$telefono,$email,$password, $privilegio)
    {
      $obj_usuario = new Usuario();
      

        $obj_usuario->setCedula($cedula);
        $obj_usuario->setApellidos($apellidos);
        $obj_usuario->setFecha_nacimiento($fecha_nacimiento);
        $obj_usuario->setTelefono($telefono);
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPassword($password);
        $obj_usuario->setGenero($genero);
        

         return ProfesorDao::crearProfesor($obj_usuario);
    }

    //crear el preofesor
  public function crearprofesorCompleto($profesion){
     $obj_profesor=new Profesor();
     $obj_profesor->setProfesion($profesion);
     return ProfesorDao::crearprofesorCompleto($obj_profesor);

  }

   public function eliminarprofesor($id_usuario,$id_profesor){
    
    return ProfesorDao::eliminarprofesor($id_usuario,$id_profesor);
   }

//para imprimir por getuserprofesor
    public function setProfesor($user)
    {
        return ProfesorDao::setProfesor($user);
    }
   public function actualizarProfesor($cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$profesion,$id_profesor,$id_usuario)
    {
      $obj_usuario = new Usuario();
      $obj_profesor=new Profesor();
        
        //lo del usuario
      $obj_usuario->setId($id_usuario);
      $obj_usuario->setCedula($cedula);
      $obj_usuario->setNombre($nombre);
      $obj_usuario->setApellidos($apellidos);
      $obj_usuario->setFecha_nacimiento($fecha_nacimiento);
      $obj_usuario->setGenero($genero);
      $obj_usuario->setTelefono($telefono);       
      $obj_usuario->setEmail($email);
      $obj_usuario->setPassword($password);


      $obj_profesor->setId_profesor($id_profesor);
      $obj_profesor->setProfesion($profesion);

         return ProfesorDao::actualizarProfesor($obj_usuario,$obj_profesor);
    }


    public function crearAsignacionGrupo($id_grupo, $id_profesor){
          return ProfesorDao::crearAsignacionGrupo($id_grupo, $id_profesor);

    }

  public  function buscaridgrupo($id_grupo,$id_profesor){

      return ProfesorDao::buscaridgrupo($id_grupo,$id_profesor);
    
}

public function getProfesorGrupo($id_profesor){
     return ProfesorDao::getProfesorGrupo($id_profesor);
}

public function eliminarGrupoProfesor($id_asig_grupo_prof){
  return ProfesorDao::eliminarGrupoProfesor($id_asig_grupo_prof);
}

}






//ProfesorControlador::crearProfesor('97071724160','andersson','ancaona piamba','1','1998-07-17','000000','ander@gmail.com','123','3');
//ProfesorControlador::crearAsignacionGrupo(1,1);










