<?php 
include_once '../persistencia/Conexion.php';
include_once '../entidades/Pregunta.php';
include_once '../entidades/Encuesta.php';
include_once '../entidades/Opcion.php';
/**
 * 
 */


class PreguntaDao
{

	 protected static $cnx;

    private static function getConexion()
    {
        self::$cnx =conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

     /**
     * Metodo que sirve para crear usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function crearPregunta($nombre_pregunta, $tipo, $id_encuesta)
    {

      $query = "INSERT INTO pregunta (nombre_pregunta,  tipo, id_encuesta) VALUES ('$nombre_pregunta', '$tipo', '$id_encuesta')";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

              
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }

      /**
     * Metodo que sirve obtener o listar todos las encuestas
     *
     * @return     object
     */
    public static function getPregunta($id_encuesta)
    {
        $query = "SELECT * FROM encuesta inner join pregunta ON(encuesta.id_encuesta=pregunta.id_encuesta) WHERE encuesta.id_encuesta='$id_encuesta'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

   
       //metodo que nos sirve para actualizar
    public static function actualizarPregunta($pregunta)
    {
      $query = "UPDATE pregunta SET nombre_pregunta=:nombre_pregunta, tipo=:tipo 
       WHERE id_pregunta=:id_pregunta;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id=$pregunta->getId_pregunta();
        $nombre= $pregunta->getNombre_pregunta();
        $tipo= $pregunta->getTipo();

        



        $resultado->bindParam(":id_pregunta", $id);
        $resultado->bindParam(":nombre_pregunta", $nombre); 
        $resultado->bindParam(":tipo", $tipo);        
       
     
        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }
     
    }

 /**
     * Metodo que sirve para crear usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function crearopcion($nombre_opcion,  $id_pregunta)
    {

      $query = "INSERT INTO opcion (nombreopcion, id_pregunta) VALUES ('$nombre_opcion', '$id_pregunta')";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

              
        if ($resultado->execute()) {
           
            return true;

        }else{
            return false;
        }
     
    }


      /**
     * Metodo que sirve obtener o listar todos las encuestas
     *
     * @return     object
     */
    public static function getopcionesPregunta($id_pregunta)
    {
        $query = "SELECT * FROM opcion WHERE opcion.id_pregunta='$id_pregunta'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }



     /**
     * Metodo que sirve para eliminar un usuario
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function eliminarOpcion($id)
    {
        $query = "DELETE FROM opcion WHERE id_opcion = :id";

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


      //metodo que nos sirve para actualizar la opcion
    public static function actualizarOpcion($opcion)
    {
      $query = "UPDATE opcion SET nombreopcion=:nombreopcion 
       WHERE id_opcion=:id_opcion;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id=$opcion->getId_opcion();
        $nombre= $opcion->getNombre_opcion();
        $resultado->bindParam(":id_opcion", $id);
        $resultado->bindParam(":nombreopcion", $nombre);      
       
     
        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }
     
    }










}


 ?>