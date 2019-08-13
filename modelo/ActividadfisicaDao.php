<?php 


include_once '../persistencia/Conexion.php';

class ActividadfisicaDao
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


     //metodo para crear estudiante INSERT INTO `actividad_fisica`(`id_actividad_fisica`, `fecha_realizacion`, `id_estudiante`) VALUES ([value-1],[value-2],[value-3])
    public static function crearActividadFisica($id_estudiante)
    {

      $query = "INSERT INTO actividad_fisica(id_estudiante) VALUES ('$id_estudiante');";
      

        self::getConexion();

         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
      
    }


//crear el bloque de trabajo
    public  function crearbloquetrabajo($p49,$p50,$p51,$p52,$p53,$p54){


        $id_actividad_fisica='';
         self::getConexion();
        $querymax = "SELECT max(actividad_fisica.id_actividad_fisica) maximo from actividad_fisica";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_actividad_fisica=$filas2['maximo'];
        }



        //actividad  fisica
       $query = "INSERT INTO actividad_fisica_trabajo(p49,p50, p51,p52,p53,p54,id_actividad_fisica)
        VALUES ('$p49','$p50','$p51','$p52','$p53','$p54', '$id_actividad_fisica');";

      
         $resultado = self::$cnx->prepare($query);
  
    
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }


//bloque de desplazarse
     public  function crearbloquedesplazarse($p55,$p56,$p57){


        $id_actividad_fisica='';
         self::getConexion();
        $querymax = "SELECT max(actividad_fisica.id_actividad_fisica) maximo from actividad_fisica";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_actividad_fisica=$filas2['maximo'];
        }



        //actividad  fisica
       $query = "INSERT INTO actividad_fisica_desplazarse(p55, p56,p57,id_actividad_fisica)
        VALUES ('$p55','$p56','$p57', '$id_actividad_fisica');";

      
         $resultado = self::$cnx->prepare($query);
  
    
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }


    //bloque de tiempolibre
     public  function crearbloquetiempolibre($p58,$p59,$p60){


        $id_actividad_fisica='';
         self::getConexion();
        $querymax = "SELECT max(actividad_fisica.id_actividad_fisica) maximo from actividad_fisica";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_actividad_fisica=$filas2['maximo'];
        }



        //actividad  fisica
       $query = "INSERT INTO actividad_fisica_tiempolibre(p58, p59,p60,id_actividad_fisica)
        VALUES ('$p58','$p59','$p60', '$id_actividad_fisica');";

      
         $resultado = self::$cnx->prepare($query);
  
    
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }


    //bloque de sesionlibre
     public  function crearbloquesesionlibre($p61,$p62,$p63){


        $id_actividad_fisica='';
         self::getConexion();
        $querymax = "SELECT max(actividad_fisica.id_actividad_fisica) maximo from actividad_fisica";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_actividad_fisica=$filas2['maximo'];
        }



        //actividad  fisica
       $query = "INSERT INTO actividad_fisica_sesionlibre(p61, p62,p63,id_actividad_fisica)
        VALUES ('$p61','$p62','$p63', '$id_actividad_fisica');";

      
         $resultado = self::$cnx->prepare($query);
  
    
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }


    //bloque de comportamiento
     public  function crearbloquecomportamiento($p64){


        $id_actividad_fisica='';
         self::getConexion();
        $querymax = "SELECT max(actividad_fisica.id_actividad_fisica) maximo from actividad_fisica";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_actividad_fisica=$filas2['maximo'];
        }



        //actividad  fisica
       $query = "INSERT INTO actividad_fisica_comportamiento(p64,id_actividad_fisica)
        VALUES ('$p64', '$id_actividad_fisica');";

      
         $resultado = self::$cnx->prepare($query);
  
    
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }

      ///para buscar el ususario si ya acabo con la encuesta

      public static function userExistsActividadFisica($id){
        //$md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM actividad_fisica WHERE id_estudiante = :id';

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":id", $id);
        $resultado->execute();

        //si hay filas regresa true si no false
        if($resultado->rowCount()){
            return true;
        }else{
            return false;
        }
    }




}



 ?>
