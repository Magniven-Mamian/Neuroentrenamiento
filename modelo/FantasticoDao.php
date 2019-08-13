<?php 


include_once '../persistencia/Conexion.php';

class FantasticoDao
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

      public static function crearFantastico($id_estudiante)
    {

      $query = "INSERT INTO fantastico(id_estudiante) VALUES ('$id_estudiante');";
      

        self::getConexion();

         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
      
    }

    //INSERT INTO `fantastico_fa`(`id_fantastico_fa`, `fa1`, `fa2`, `fa3`, `fa4`, `id_fantastico`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
       public static function crearFantastico_fa($fa1, $fa2,$fa3, $fa4)
    {




        $id_fantastico='';
         self::getConexion();
        $querymax = "SELECT max(fantastico.id_fantastico) maximo FROM fantastico";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_fantastico=$filas2['maximo'];
        }
       // echo $id_fantastico;

         $query = "INSERT INTO fantastico_fa(fa1, fa2, fa3, fa4, id_fantastico) VALUES ('$fa1','$fa2','$fa3','$fa4', '$id_fantastico');";
      


         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {
         
            return true;

        }else{
        	 
            return false;
        }
      
    }

      public static function crearFantastico_nt($nt1, $nt2,$nt3, $nt4, $nt5)
    {




        $id_fantastico='';
         self::getConexion();
        $querymax = "SELECT max(fantastico.id_fantastico) maximo FROM fantastico";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_fantastico=$filas2['maximo'];
        }
       

         $query = "INSERT INTO fantastico_nt(nt1, nt2, nt3, nt4, nt5, id_fantastico) VALUES ('$nt1', '$nt2','$nt3', '$nt4', '$nt5', '$id_fantastico');";
      


         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {
          
            return true;

        }else{
        	
            return false;
        }
      
    }


        public static function crearFantastico_as($as1, $as2,$as3, $as4, $as5, $as6)
    {




        $id_fantastico='';
         self::getConexion();
        $querymax = "SELECT max(fantastico.id_fantastico) maximo FROM fantastico";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_fantastico=$filas2['maximo'];
        }
       

         $query = "INSERT INTO fantastico_as(as1, as2, as3,	as4, as5, as6, id_fantastico) VALUES ('$as1', '$as2','$as3', '$as4', '$as5',
            '$as6', '$id_fantastico');";
      


         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {
          
            return true;

        }else{
        	
            return false;
        }
      
    }

    //ti1, ti2, ti3, ti4, ti5,


        public static function crearFantastico_ti($ti1, $ti2,$ti3, $ti4, $ti5)
    {




        $id_fantastico='';
         self::getConexion();
        $querymax = "SELECT max(fantastico.id_fantastico) maximo FROM fantastico";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_fantastico=$filas2['maximo'];
        }
       

         $query = "INSERT INTO fantastico_ti(ti1, ti2, ti3, ti4, ti5, id_fantastico) VALUES ('$ti1', '$ti2','$ti3', '$ti4', '$ti5',
           '$id_fantastico');";
      


         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {
          
            return true;

        }else{
        	
            return false;
        }
      
    }

//co1, co2, co3, co4, co5

   
        public static function crearFantastico_co($co1, $co2,$co3, $co4, $co5)
    {




        $id_fantastico='';
         self::getConexion();
        $querymax = "SELECT max(fantastico.id_fantastico) maximo FROM fantastico";   

      // para insertar el  maximo de la encuesta
        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $id_fantastico=$filas2['maximo'];
        }
       

         $query = "INSERT INTO fantastico_co(co1, co2, co3, co4, co5, id_fantastico) VALUES ('$co1', '$co2','$co3', '$co4', '$co5',
           '$id_fantastico');";
      


         $resultado = self::$cnx->prepare($query);          
               
        if ($resultado->execute()) {
          
            return true;

        }else{
        	
            return false;
        }
      
    }

     ///para buscar el ususario si ya acabo con la encuesta

      public static function userExistsFantastico($id){
        //$md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM fantastico WHERE id_estudiante = :id';

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
