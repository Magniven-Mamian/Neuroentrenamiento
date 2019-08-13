<?php 

include_once '../persistencia/Conexion.php';
include_once '../entidades/Encuesta.php';
include_once '../entidades/Usuario.php';



class EncuestaDao
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
    public static function crearEncuesta($encuesta, $usuario)
    {

      $query = "INSERT INTO  encuesta(nombre_encuesta, id_usuario) VALUES (:nombre_encuesta, :id_usuario);";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
       

        $nombre_encuesta= $encuesta->getNombreEncuesta();
        $id_usuario= $usuario->getId();

            
        $resultado->bindParam(":nombre_encuesta", $nombre_encuesta);
        $resultado->bindParam(":id_usuario", $id_usuario);

        
        
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
    public static function getEncuesta($id_usuario)
    {
        $query = "SELECT * FROM encuesta WHERE id_usuario='$id_usuario'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }
       /**
     * Metodo que sirve obtener o listar todos las encuestas de el estudiante
     *
     * @return     object
     */
    public static function getEncuestas($id_estudiante)
    {
        $query = "SELECT nombre, id_grupo FROM estudiante NATURAL JOIN asig_grupo_estudiante NATURAL JOIN grupo WHERE estudiante.id_estudiante='$id_estudiante'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

       /**
     * Metodo que sirve obtener o listar todos las encuestas de el estudiante
     *
     * @return     object
     */
    public static function getEncuestasnombreprofesor($id_grupo)
    {
        $query = "SELECT usuarios.nombre, profesor.id_profesor, grupo.id_grupo FROM usuarios NATURAL JOIN profesor INNER JOIN asig_grupo_profesor ON(profesor.id_profesor=asig_grupo_profesor.id_profesor) INNER JOIN grupo ON(asig_grupo_profesor.id_grupo=grupo.id_grupo) WHERE grupo.id_grupo='$id_grupo'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

      /**
     * Metodo que sirve obtener o listar todos las encuestas de el encuesta
     *
     * @return     object
     */
    public static function getEncuestaslista($id_grupo, $id_profesor)
    {
        $query = "SELECT usuarios.nombre, profesor.id_profesor, encuesta.nombre_encuesta  FROM encuesta NATURAL JOIN usuarios NATURAL JOIN profesor INNER JOIN asig_grupo_profesor ON(profesor.id_profesor=asig_grupo_profesor.id_profesor) INNER JOIN grupo ON(asig_grupo_profesor.id_grupo=grupo.id_grupo) WHERE grupo.id_grupo='$id_grupo' and profesor.id_profesor='$id_profesor'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }

    






       /**
     * Metodo que sirve obtener o listar todos las encuestas
     *
     * @return     object
     */
    public static function getEncuestasIdadministrador()
    {
        $query = "SELECT * FROM encuesta NATURAL JOIN usuarios where privilegio=1";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }





      /**
     * Metodo que sirve obtener o listar todos las encuestas
     *
     * @return     object
     */
    public static function getEncuestaId_usuario($id_usuario)
    {
        $query = "SELECT * FROM encuesta WHERE id_usuario=1";

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
    public static function eliminarEncuesta($id)
    {
        $query = "DELETE FROM encuesta WHERE id_encuesta = :id";

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


       //metodo que nos sirve para actualizar
    public static function actualizarEncuesta($encuesta)
    {
      $query = "UPDATE encuesta SET nombre_encuesta=:nombre_encuesta 
       WHERE id_encuesta=:id_encuesta;";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id=$encuesta->getId_encuesta();
        $nombre= $encuesta->getNombreEncuesta();
        



        $resultado->bindParam(":id_encuesta", $id);
        $resultado->bindParam(":nombre_encuesta", $nombre);        
       
     
        if ($resultado->execute()) {
            return true;
        }else{
            return false;
        }
     
    }





      /**
     * Metodo que sirve obtener o listar la encuesta con el id
     *
     * @return     object
     */
    public static function getEncuestaId($id_encuesta)
    {
        $query = "SELECT * FROM encuesta WHERE id_encuesta='$id_encuesta'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
    }



      /**
     * Metodo que sirve obtener o listar la encuesta con el id
     *
     * @return     object
     */
    public static function getOpcionesId($id_pregunta)
    {
        $query = "SELECT * from pregunta pr inner join opcion op on(pr.id_pregunta=op.id_pregunta) where pr.id_pregunta ='$id_pregunta'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
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


 

    public  function insertRespuesta($id_pregunta, $valor, $id_estudiante) {
       $query = "INSERT INTO `repuesta` (`id_respuesta`, `id_pregunta`, `valor`, `id_estudiante`) VALUES (NULL, '$id_pregunta', '$valor', '$id_estudiante');";
      
            
        self::getConexion();
         $resultado = self::$cnx->prepare($query);

                
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
    }

  public function getNombrePregunta(){
 $query="SELECT * from pregunta  WHERE pregunta.id_encuesta=2;";
     self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

  } 


   public function getRespuesta($id_pregunta){
 $query="SELECT pregunta.nombre_pregunta, repuesta.valor from pregunta INNER JOIN repuesta on(pregunta.id_pregunta=repuesta.id_pregunta) WHERE pregunta.id_pregunta='$id_pregunta';";
     self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

  }

  

} 