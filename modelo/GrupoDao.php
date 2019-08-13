<?php 

include_once '../persistencia/Conexion.php';
include_once '../entidades/Grupo.php';
/**
 * 
 */
class GrupoDao
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
     * Metodo que sirve para crear usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function crearGrupo($grupo)
    {

      $query = "INSERT INTO grupo (nombre) VALUES (:nombre)";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $nombre     = $grupo->getNombregrupo();
            
        $resultado->bindParam(":nombre", $nombre);
        
        
        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }
     
    }

      /**
     * Metodo que sirve obtener o listar todos los  grupos
     *
     * @return     object
     */
    public static function getGrupos()
    {
        $query = "SELECT * FROM grupo";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }




     /**
     * Metodo que sirve obtener o listar todos los  grupos
     *
     * @return     object
     */
    public static function getGruposId($id)
    {
        $query = "SELECT * FROM grupo where id_grupo='$id';";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }



       //metodo que nos sirve para actualizar
    public static function actualizarGrupo($grupo)
    {
      $query = "UPDATE grupo SET nombre=:nombre 
       WHERE id_grupo=:id_grupo;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id=$grupo->getId_grupo();
        $nombre= $grupo->getNombregrupo();
        



        $resultado->bindParam(":id_grupo", $id);
        $resultado->bindParam(":nombre", $nombre);        
       
     
        if ($resultado->execute()) {
            return 1;
        }else{
            return 0;
        }
     
    }

    /**
     * Metodo que sirve para eliminar un usuario
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function eliminarGrupo($id)
    {
        $query = "DELETE FROM grupo WHERE id_grupo = :id";

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


}

 ?>