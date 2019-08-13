<?php

include_once '../persistencia/Conexion.php';
include_once '../entidades/Estudiante.php';
include_once '../entidades/Usuario.php'; 
//include '../entidades/Grupo.php'; 

class EstudianteDao 
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






     public function crearEstudianteCompleto($estudiante){
    $query="  INSERT INTO estudiante (id_usuario, semestre) VALUES (:id_usuario,:semestre);";

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
        $semestre=$estudiante->getSemestre();
        $id_usuario=$max;

        $resultado->bindParam(":id_usuario", $id_usuario);
        $resultado->bindParam(":semestre", $semestre);


        
        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }
    
    }

    //metodo para crear estudiante
    public static function crearEstudiante($usuario)
    {

      $query = "INSERT INTO usuarios (cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password, privilegio) VALUES (:cedula, :nombre, :apellidos, :fecha_nacimiento, :genero, :telefono, :email, :password, :privilegio);";
      

      


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
        //para estudiante
        
        

       
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

            return 1;

        }else{
            return 0;
        }
      
    }
   public  function getEstudiantes(){
    $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, semestre,  id_estudiante, id_usuario, estado FROM usuarios NATURAL JOIN estudiante ";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }

    public  function getEstudiantesId($cedula){
    $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, semestre, id_estudiante, id_usuario, estado FROM usuarios NATURAL JOIN estudiante WHERE cedula='$cedula' ";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }
   



    //metodo que nos sirve para actualizar
    public static function actualizarEstudiante($usuario,$estudiante)
    {
      $query = "UPDATE usuarios SET  cedula=:cedula, nombre=:nombre, apellidos=:apellidos,
       fecha_nacimiento=:fecha_nacimiento, genero=:genero, telefono=:telefono, 
       email=:email, password=:password      
       WHERE  id_usuario=:id_usuario;
       UPDATE estudiante SET semestre=:semestre WHERE id_estudiante=:id_estudiante;";
      

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
        $id_estudiante=$estudiante->getId_estudiante();
        $semestre    = $estudiante->getSemestre();

       
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
        $resultado->bindParam(":id_estudiante", $id_estudiante);  
        $resultado->bindParam(":semestre", $semestre);        
      
      
       
     
        if ($resultado->execute()) {
            return true;
        }else{
            return false; 
        }
     
    }


    public function buscarEmailCedula($email){

        $query = "SELECT * FROM usuarios WHERE email = :email";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":email", $email);
 
        $resultado->execute();

        if ($resultado->rowCount()) {
            return true;
        }else{
            return false;
        }
       
    }
    public static function eliminarestudiante($id_usuario,$id_estudiante)
    {
        $query = "DELETE from estudiante WHERE id_estudiante=:id_estudiante;
        DELETE FROM usuarios WHERE id_usuario = :id_usuario;";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_usuario", $id_usuario);
        $resultado->bindParam(":id_estudiante", $id_estudiante);

        $resultado->execute();

        if ($resultado->execute()) {
            return 1;
        }else{
            return 0;
        }

     
    }

 public static function setUserEstudiante($user)
    {
          $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, semestre, id_estudiante, id_usuario, estado FROM usuarios NATURAL JOIN estudiante WHERE email='$user' ";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;


 }
   

   public static function setEstudianteId($id)
    {
          $query = "SELECT cedula, nombre, apellidos, fecha_nacimiento, genero, telefono, email, password,privilegio, fecha_registro, semestre, id_estudiante, id_usuario, estado FROM usuarios NATURAL JOIN estudiante WHERE id_usuario='$id'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;


  }




     //metodo que nos sirve para actualizar
    public static function actualizarEstadoEst($estudiante)
    {
      $query = "UPDATE estudiante SET estado=:estado  WHERE id_estudiante=:id_estudiante;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);



      $estado=$estudiante->getEstado();
       $id_estudiante=$estudiante->getId_estudiante();
        
        $resultado->bindParam(":id_estudiante", $id_estudiante);  
        $resultado->bindParam(":estado", $estado);        
           
        if ($resultado->execute()) {
            return true;
        }else{
            return false; 
        }
     
    }



     //metodo para crear estudiante
    public static function crearAsignacionGrupo($id_grupo, $id_estudiante)
    {

      $query = "INSERT INTO asig_grupo_estudiante(id_grupo, id_estudiante) VALUES ('$id_grupo', '$id_estudiante');";
      self::getConexion();

     $resultado = self::$cnx->prepare($query);

        
       if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
      
    }


     public function buscaridgrupo($id_grupo,$id_estudiante){

        $query = "SELECT * FROM asig_grupo_estudiante WHERE asig_grupo_estudiante.id_grupo=:id_grupo and asig_grupo_estudiante.id_estudiante=:id_estudiante";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_grupo", $id_grupo);
        $resultado->bindParam(":id_estudiante", $id_estudiante);
 
        $resultado->execute();

        if ($resultado->rowCount()) {
            return true;
        }else{
            return false;
        }
       
    }

    //para imprimir los grupos con su estudiante
       public  function getEstudiantesGrupo($id_estudiante){
    $query = "SELECT * FROM estudiante inner join asig_grupo_estudiante ON (estudiante.id_estudiante=asig_grupo_estudiante.id_estudiante) inner JOIN grupo on(asig_grupo_estudiante.id_grupo=grupo.id_grupo) where estudiante.id_estudiante='$id_estudiante'; ";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }



    
    //para eliminar los grupos con su estudiante

     public static function eliminarGrupoestudiante($id_asignacionGrupoEst)
    {
        $query = "DELETE from asig_grupo_estudiante WHERE id_asignacionGrupoEst=:id_asignacionGrupoEst;";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id_asignacionGrupoEst", $id_asignacionGrupoEst);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }

     
    }
   

}





?>