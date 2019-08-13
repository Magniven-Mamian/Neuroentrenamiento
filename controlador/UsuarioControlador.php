<?php

include_once  '../modelo/UsuarioDao.php';

class UsuarioControlador
{

    //imprimir todos los usuarios

    public function getUsuarios()
    {
        return UsuarioDao::getUsuarios();
    }
 
    //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function crearUsuario($cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password, $privilegio)
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

      
        return UsuarioDao::crearUsuario($obj_usuario);
    }
//para imprimir por getuser
    public function setUser($user)
    {
        return UsuarioDao::setUser($user);
    }


    //para eliminar el usuario
    public function eliminarUsuario($id)
    {
        return UsuarioDao::eliminarUsuario($id);
    }

//buscar por email
     public function userExist($email, $pass){
    
     return UsuarioDao::userExists($email, $pass);

     }

  public function actualizarusuario($nombre,$apellidos, $id){
        $obj_usuario = new Usuario();

            
        $obj_usuario->setNombre($nombre);
         $obj_usuario->setApellidos($apellidos);
      
        $obj_usuario->setId($id);
      
        return UsuarioDao::actualizarUsuario($obj_usuario);

  }
  public function buscarEmail($email){
    return UsuarioDao::buscarEmail($email);
}







}
