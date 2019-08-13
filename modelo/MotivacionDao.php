<?php 
include_once '../persistencia/Conexion.php';
include_once '../entidades/Usuario.php';
include_once '../entidades/Estudiante.php';
include_once '../entidades/MotivacionEducativa.php';
include_once '../entidades/motivacioneducativaprimerbloque.php';
include_once '../entidades/motivacioneducativasegundobloque.php';
include_once '../entidades/motivacioneducativatercerbloque.php';
include_once '../entidades/motivacioneducativacuartobloque.php';



/**
 * 
 */
class MotivacionDao
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

     //metodo para crear MotivacionEducativa
    public static function crearMotivacion($motivacion)
    {

      $query = "INSERT INTO motivacioneducativa (id_estudiante) VALUES (:id_estudiante);";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id   =$motivacion->getId_estudiante();
          
       
        $resultado->bindParam(":id_estudiante", $id);
       

        
        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }
      
    }



    public  function crearprimerbloque($bloque1){
       $query = "INSERT INTO motivacioneducativaprimerbloque(m1,m2,m3,m4,m5,m6,m7, id_motivacionEdu)
        VALUES (:m1,:m2,:m3,:m4,:m5,:m6,:m7,  :id_motivacionEdu);";




        $querymax = "SELECT max(id_motivacionEdu) maximo from motivacioneducativa;";


      self::getConexion();

        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
        	# code...
        	$max=$filas2['maximo'];
        }
   echo  $max;




       $resultado = self::$cnx->prepare($query);
       $m1   =$bloque1->getM1();
       $m2   =$bloque1->getM2();
       $m3   =$bloque1->getM3();
       $m4   =$bloque1->getM4();
       $m5   =$bloque1->getM5();
       $m6   =$bloque1->getM6();
       $m7   =$bloque1->getM7();
       $id_motivacionEdu=$max;
       echo $m1;


      


        $resultado->bindParam(":m1", $m1);
        $resultado->bindParam(":m2", $m2);
        $resultado->bindParam(":m3", $m3);
        $resultado->bindParam(":m4", $m4);
        $resultado->bindParam(":m5", $m5);
        $resultado->bindParam(":m6", $m6);
        $resultado->bindParam(":m7", $m7);
        $resultado->bindParam(":id_motivacionEdu", $id_motivacionEdu);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }



  public  function crearsegundobloque($bloque2){
       $query = "INSERT INTO motivacioneducativasegundobloque(m8,m9,m10,m11,m12,m13,m14, id_motivacionEdu)
        VALUES (:m8,:m9,:m10,:m11,:m12,:m13,:m14,:id_motivacionEdu);";




        $querymax = "SELECT max(id_motivacionEdu) maximo from motivacioneducativa;";


      self::getConexion();

        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
        	# code...
        	$max=$filas2['maximo'];
        }
   echo  $max;




       $resultado = self::$cnx->prepare($query);
       $m8   =$bloque2->getM8();
       $m9   =$bloque2->getM9();
       $m10   =$bloque2->getM10();
       $m11  =$bloque2->getM11();
       $m12   =$bloque2->getM12();
       $m13  =$bloque2->getM13();
       $m14   =$bloque2->getM14();
       $id_motivacionEdu=$max;
     


      


        $resultado->bindParam(":m8", $m8);
        $resultado->bindParam(":m9", $m9);
        $resultado->bindParam(":m10", $m10);
        $resultado->bindParam(":m11", $m11);
        $resultado->bindParam(":m12", $m12);
        $resultado->bindParam(":m13", $m13);
        $resultado->bindParam(":m14", $m14);
        $resultado->bindParam(":id_motivacionEdu", $id_motivacionEdu);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }




      public  function creartercerbloque($bloque3){
       $query = "INSERT INTO motivacionEducativatercerbloque(m15,m16,m17,m18,m19,m20,m21, id_motivacionEdu)
        VALUES (:m15,:m16,:m17,:m18,:m19,:m20,:m21,:id_motivacionEdu);";

 


        $querymax = "SELECT max(id_motivacionEdu) maximo from motivacioneducativa;";


      self::getConexion();

        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
        	# code...
        	$max=$filas2['maximo'];
        }
   echo  $max;




       $resultado = self::$cnx->prepare($query);
       $m15   =$bloque3->getM15();
       $m16  =$bloque3->getM16();
       $m17   =$bloque3->getM17();
       $m18  =$bloque3->getM18();
       $m19   =$bloque3->getM19();
       $m20  =$bloque3->getM20();
       $m21   =$bloque3->getM21();
       $id_motivacionEdu=$max;
     


      


        $resultado->bindParam(":m15", $m15);
        $resultado->bindParam(":m16", $m16);
        $resultado->bindParam(":m17", $m17);
        $resultado->bindParam(":m18", $m18);
        $resultado->bindParam(":m19", $m19);
        $resultado->bindParam(":m20", $m20);
        $resultado->bindParam(":m21", $m21);
        $resultado->bindParam(":id_motivacionEdu", $id_motivacionEdu);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }



    //cuarto bloque

      public  function crearcuartobloque($bloque4){
       $query = "INSERT INTO motivacionEducativacuartobloque(m22,m23,m24,m25,m26,m27,m28, id_motivacionEdu)
        VALUES (:m22,:m23,:m24,:m25,:m26,:m27,:m28,:id_motivacionEdu);";

 


        $querymax = "SELECT max(id_motivacionEdu) maximo from motivacioneducativa;";


      self::getConexion();

        $resultadomax= self::$cnx->prepare($querymax);

        $resultadomax->execute();
         $filas = $resultadomax->fetchAll();
        $max="";
        foreach ($filas as $filas2) {
          # code...
          $max=$filas2['maximo'];
        }
   echo  $max;




       $resultado = self::$cnx->prepare($query);
       $m22   =$bloque4->getM22();
       $m23  =$bloque4->getM23();
       $m24   =$bloque4->getM24();
       $m25  =$bloque4->getM25();
       $m26   =$bloque4->getM26();
       $m27  =$bloque4->getM27();
       $m28   =$bloque4->getM28();
       $id_motivacionEdu=$max;
     


      


        $resultado->bindParam(":m22", $m22);
        $resultado->bindParam(":m23", $m23);
        $resultado->bindParam(":m24", $m24);
        $resultado->bindParam(":m25", $m25);
        $resultado->bindParam(":m26", $m26);
        $resultado->bindParam(":m27", $m27);
        $resultado->bindParam(":m28", $m28);
        $resultado->bindParam(":id_motivacionEdu", $id_motivacionEdu);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }




    ///para buscar el ususario si ya acabo con la encuesta

      public static function userExistsMotivacioneducativa($id){
        //$md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM motivacioneducativa WHERE id_estudiante = :id';

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