<?php

include_once  '../modelo/EstudianteDao.php';

class EstudianteControlador
{

   
    //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function crearEstudiante($cedula,$nombre,$apellidos,$genero,$fecha_nacimiento,$telefono,$email,$password, $privilegio)
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
       

         return EstudianteDao::crearEstudiante($obj_usuario);
    }



    public function crearEstudianteCompleto($semestre){
         $obj_estudiante=new Estudiante();
         $obj_estudiante->setSemestre($semestre);

         return EstudianteDao::crearEstudianteCompleto($obj_estudiante);

    }
  
    public function actualizarEstudiante($cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre,$id_estudiante,$id_usuario)
    {
      $obj_usuario = new Usuario();
      $obj_estudiante=new Estudiante();
        
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
      $obj_estudiante->setId_estudiante($id_estudiante);
      $obj_estudiante->setSemestre($semestre);

         return EstudianteDao::actualizarEstudiante($obj_usuario,$obj_estudiante);
    }

    public function actualizarEstadoEst($estado,$id_estudiante)
    {
      $obj_estudiante=new Estudiante();
        
      $obj_estudiante->setId_estudiante($id_estudiante);
      $obj_estudiante->setEstado($estado);

       return EstudianteDao::actualizarEstadoEst($obj_estudiante);
    }
    


    
    //imprimir todos los usuarios

    public function getEstudiantes()
    {
        return EstudianteDao::getEstudiantes();
    }
    public function getEstudiantesId($id)
    {
        return EstudianteDao::getEstudiantesId($id);
    }

   public function eliminarestudiante($id_usuario,$id_estudiante){
    
    return EstudianteDao::eliminarestudiante($id_usuario,$id_estudiante);
   }

     public function buscarEmailCedula($email){
      
      return EstudianteDao::buscarEmailCedula($email);

      }


public function setUserEstudiante($user){

  return EstudianteDao::setUserEstudiante($user);
}



public function crearAsignacionGrupo($id_grupo, $id_estudiante){
   
   return EstudianteDao::crearAsignacionGrupo($id_grupo, $id_estudiante);

}


public function buscaridgrupo($id_grupo, $id_estudiante){
   

         return EstudianteDao::buscaridgrupo($id_grupo, $id_estudiante);

}


     //para imprimir los grupos con su estudiante
   public  function getEstudiantesGrupo($id_estudiante){

        return EstudianteDao::getEstudiantesGrupo($id_estudiante);
        
    }


    public function eliminarGrupoestudiante($id_asignacionGrupoEst){
    
    return EstudianteDao::eliminarGrupoestudiante($id_asignacionGrupoEst);
   }


   public function setEstudianteId($id){
  return EstudianteDao::setEstudianteId($id);
   }

}

//EstudianteControlador::crearEstudiante('1033','adrianas','camposss',1,'2013-12-10','4333','adrreee@gmail.com','123', 2);

//EstudianteControlador::actualizarEstadoEst(1,'100');



