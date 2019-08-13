<?php

include_once '../persistencia/Conexion.php';
include_once '../entidades/Usuario.php';

class UsuarioDao
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

    /**
     * Metodo que sirve para obtener o buscar un usuario por su $user
     *
     * @param      object         $usuario
     * @return     object
     */
    public static function setUser($user)
    {
        $query = "SELECT * FROM usuarios WHERE email = :user";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":user", $user);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId($filas["id_usuario"]);
        $usuario->setCedula($filas["cedula"]);
        $usuario->setNombre($filas["nombre"]);
        $usuario->setApellidos($filas["apellidos"]);
        $usuario->setEmail($filas["email"]);
        $usuario->setGenero($filas["genero"]);
        $usuario->setTelefono($filas["telefono"]);
        $usuario->setPassword($filas["password"]);
        $usuario->setPrivilegio($filas["privilegio"]);
        $usuario->setFecha_nacimiento($filas["fecha_nacimiento"]);
        $usuario->setFecha_registro($filas["fecha_registro"]);

        return $usuario;
    }

    /**
     * Metodo que sirve para eliminar un usuario
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function eliminarUsuario($id)
    {
        $query = "DELETE FROM usuarios WHERE id_usuario = :id";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id", $id);

        $resultado->execute();

        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }

     
    }

    /**
     * Metodo que sirve obtener o listar todos los usuarios menos el administrador
     *
     * @return     object
     */
    public static function getUsuarios()
    {
        $query = "SELECT * FROM usuarios WHERE privilegio!=1";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

    /**
     * Metodo que sirve para crear y editar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function crearUsuario($usuario)
    {

      $query = "INSERT INTO usuarios (cedula,nombre,apellidos,fecha_nacimiento,genero,telefono,email,password,privilegio) VALUES (:cedula,:nombre,:apellidos,:fecha_nacimiento,:genero,:telefono,:email,:password,:privilegio)";
      

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



 //para ver si esta en la base de datos si el usuario existe por email
    public static function userExists($email, $pass){
        $md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM usuarios WHERE email = :email AND password = :pass';

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":email", $email);
        $resultado->bindParam(":pass", $pass);

        $resultado->execute();

        //si hay filas regresa true si no false
        if($resultado->rowCount()){
            return true;
        }else{
            return false;
        }
    }
     


    //metodo que nos sirve para actualizar
    public static function actualizarUsuario($usuario)
    {
      $query = "UPDATE usuarios SET nombre=:nombre, apellidos=:apellidos 
       WHERE id_usuario=:idusu;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id=$usuario->getId();
        $cedula    =$usuario->getCedula();
        $nombre     = $usuario->getNombre();
        $apellidos  =$usuario->getApellidos();
        $fecha_nacimiento =$usuario->getFecha_nacimiento();
        $telefono= $usuario->getTelefono();
        $email      = $usuario->getEmail();
        $password   = $usuario->getPassword();



        $resultado->bindParam(":idusu", $id);
        $resultado->bindParam(":nombre", $nombre);        
        $resultado->bindParam(":apellidos", $apellidos);
      /*  $resultado->bindParam(":email", $email);
        $resultado->bindParam(":cedula", $cedula);
        $resultado->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $resultado->bindParam(":telefono", $telefono);
        $resultado->bindParam(":password", $password);
        */
        if ($resultado->execute()) {
            return 1;
        }else{
            return 0;
        }
     
    }
    
    public function buscarEmail($email){

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

    

}
