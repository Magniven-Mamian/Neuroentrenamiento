<?php

include_once '../persistencia/Conexion.php';
include_once '../entidades/Usuario.php';
include_once '../entidades/Profesor.php'; 

class ProfesorDao
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }
     public  function getProfesor(){
    $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, profesion, id_profesor, id_usuario FROM usuarios NATURAL JOIN profesor";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }
     public  function getProfesorId($cedula){
    $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, profesion, id_profesor, id_usuario FROM usuarios NATURAL JOIN profesor where cedula='$cedula'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }
   


    //metodo para crear estudiante
    public static function crearProfesor($usuario)
    {

      $query = "INSERT INTO usuarios (cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password, privilegio) VALUES (:cedula, :nombre, :apellidos, :fecha_nacimiento, :genero, :telefono, :email, :password, :privilegio);";
      #   INSERT INTO profesor (cedula, profesion) VALUES (:cedula,:profesion)

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

      




        $cedula    =$usuario->getCedula();
        $nombre     = $usuario->getNombre();
        $apellidos  =$usuario->getApellidos();
        $fecha_nacimiento =$usuario->getFecha_nacimiento();
        $telefono= $usuario->getTelefono();
        $email      = $usuario->getEmail();
        $password   = $usuario->getPassword();
        $privilegio = $usuario->getPrivilegio();
        $genero  =$usuario->getGenero();
        //para profesor
      #  $profesion=$profesor->getProfesion();


      
        $resultado->bindParam(":privilegio", $privilegio);
        $resultado->bindParam(":nombre", $nombre);
        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":cedula", $cedula);
        $resultado->bindParam(":apellidos", $apellidos);
        $resultado->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $resultado->bindParam(":telefono", $telefono);
        $resultado->bindParam(":password", $password);
        $resultado->bindParam(":genero", $genero);

        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }


      
    }
      public function crearprofesorCompleto($profesor){
    $query="  INSERT INTO profesor (id_usuario, profesion) VALUES (:id_usuario,:profesion);";

   $querymax = "SELECT max(id_usuario) maximo from usuarios";
   
      $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
            # code...
            $max=$filas2['maximo'];
        }
    
        $resultado = self::$cnx->prepare($query);
        $profesion=$profesor->getProfesion();

        $id_usuario=$max;

        $resultado->bindParam(":id_usuario", $id_usuario);
        $resultado->bindParam(":profesion", $profesion);


        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
    
    }





     public static function  eliminarprofesor($id_usuario,$id_profesor)
    {
        $query = "DELETE from profesor WHERE id_profesor=:id_profesor;
        DELETE FROM usuarios WHERE id_usuario = :id_usuario;";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_usuario", $id_usuario);
        $resultado->bindParam(":id_profesor", $id_profesor);

        $resultado->execute();

        if ($resultado->execute()) {
            return 1;
        }else{
            return 0;
        }
    }


//en este metodo esta el error
    public static function setProfesor($user)
    {
        $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, profesion, id_profesor, id_usuario FROM usuarios NATURAL JOIN profesor WHERE email = :user";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":user", $user);

        $resultado->execute();

        $filas = $resultado->fetchAll();
        
        return $filas;
   }


    //metodo que nos sirve para actualizar
    public static function actualizarProfesor($usuario,$profesor)
    {
      $query = "UPDATE usuarios SET  cedula=:cedula, nombre=:nombre, apellidos=:apellidos,
       fecha_nacimiento=:fecha_nacimiento, genero=:genero, telefono=:telefono, email=:email, password=:password      
       WHERE  id_usuario=:id_usuario;
       UPDATE profesor SET profesion=:profesion WHERE id_profesor=:id_profesor;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

       //lo del usuario
        $cedula    =$usuario->getCedula();
        $nombre     = $usuario->getNombre();
        $apellidos  =$usuario->getApellidos();
        $fecha_nacimiento=$usuario->getFecha_nacimiento();
        $genero=$usuario->getGenero();
        $id_usuario=$usuario->getId();
        $telefono=$usuario->getTelefono();
        $email      = $usuario->getEmail();
        $password   = $usuario->getPassword();

        //lo del estudiante
       $id_profesor=$profesor->getId_profesor();
       $profesion=$profesor->getProfesion();

       
       //lo del usuario
        $resultado->bindParam(":id_usuario", $id_usuario);  
        $resultado->bindParam(":cedula", $cedula);
        $resultado->bindParam(":nombre", $nombre);  
        $resultado->bindParam(":apellidos", $apellidos); 
        $resultado->bindParam(":fecha_nacimiento", $fecha_nacimiento); 
        $resultado->bindParam(":genero", $genero);
        $resultado->bindParam(":telefono", $telefono); 
        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":password", $password);
        //lo del estudiante
        $resultado->bindParam(":id_profesor", $id_profesor);  
        $resultado->bindParam(":profesion", $profesion);        
      
      
       
     
        if ($resultado->execute()) {
            return true;
        }else{
            return false; 
        }
     
    }

      //metodo para crear la asignacion de grupo a profesoor
    public static function crearAsignacionGrupo($id_grupo, $id_profesor)
    {

      $query = "INSERT INTO asig_grupo_profesor(id_grupo, id_profesor) VALUES ('$id_grupo', '$id_profesor');";
      self::getConexion();

     $resultado = self::$cnx->prepare($query);

        
       if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
      
    }

      public function buscaridgrupo($id_grupo,$id_profesor){

        $query = "SELECT * FROM asig_grupo_profesor WHERE asig_grupo_profesor.id_grupo=:id_grupo 
        and asig_grupo_profesor.id_profesor=:id_profesor";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_grupo", $id_grupo);
        $resultado->bindParam(":id_profesor", $id_profesor);
 
        $resultado->execute();

        if ($resultado->rowCount()) {
            return true;
        }else{
            return false;
        }
       
    }
    //SELECT * FROM asig_grupo_profesor INNER join profesor ON(asig_grupo_profesor.id_profesor=profesor.id_profesor) where asig_grupo_profesor.id_profesor=1


     //para imprimir los grupos con su estudiante
       public  function getProfesorGrupo($id_profesor){
    $query = "SELECT * FROM profesor inner join asig_grupo_profesor ON (profesor.id_profesor=asig_grupo_profesor.id_profesor) inner JOIN grupo on(asig_grupo_profesor.id_grupo=grupo.id_grupo) where asig_grupo_profesor.id_profesor='$id_profesor';";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }



    //para eliminar los grupos con su estudiante

     public static function eliminarGrupoProfesor($id_asig_grupo_prof)
    {
        $query = "DELETE from asig_grupo_profesor WHERE id_asig_grupo_prof=:id_asig_grupo_prof;";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_asig_grupo_prof", $id_asig_grupo_prof);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }

     
    }

   
}
