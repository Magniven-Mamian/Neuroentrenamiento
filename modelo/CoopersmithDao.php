<?php

include_once '../persistencia/Conexion.php';
include_once '../entidades/coopersmith.php';
include_once '../entidades/coopersmithprimerbloque.php';
include_once '../entidades/coopersmithsegundobloque.php';
include_once '../entidades/coopersmithtercerbloque.php';
include_once '../entidades/coopersmithcuartobloque.php';
include_once '../entidades/coopersmithquintobloque.php';
include_once '../entidades/coopersmithsextobloque.php';
include_once '../entidades/Estudiante.php';



/**
 * 
 */
class CoopersmithDao 
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


    //metodo para crear estudiante
    public static function crearCooperSmith($coopersmith)
    {

      $query = "INSERT INTO coopersmith (id_estudiante) VALUES (:id_estudiante);";
      

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $id_estudiante   =$coopersmith->getId_estudiante();
          
       
        $resultado->bindParam(":id_estudiante", $id_estudiante);
       

        
        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }
      
    }



    public  function crearprimerbloque($bloque1){
       $query = "INSERT INTO coopersmithprimerbloque(p1, p2,p3,p4,p5,p6, p7, p8,p9,p10, id_coopersmith)
        VALUES (:p1, :p2, :p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


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
       $p1   =$bloque1->getP1();
       $p2   =$bloque1->getP2();
       $p3   =$bloque1->getP3();
       $p4   =$bloque1->getP4();
       $p5   =$bloque1->getP5();
       $p6   =$bloque1->getP6();
       $p7   =$bloque1->getP7();
       $p8   =$bloque1->getP8();
       $p9   =$bloque1->getP9();
       $p10   =$bloque1->getP10();
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p1", $p1);
        $resultado->bindParam(":p2", $p2);
        $resultado->bindParam(":p3", $p3);
        $resultado->bindParam(":p4", $p4);
        $resultado->bindParam(":p5", $p5);
        $resultado->bindParam(":p6", $p6);
        $resultado->bindParam(":p7", $p7);
        $resultado->bindParam(":p8", $p8);
        $resultado->bindParam(":p9", $p9);
        $resultado->bindParam(":p10", $p10);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }

 public  function crearsegundobloque($bloque2){
       $query = "INSERT INTO coopersmithsegundobloque(p11,p12, p13,p14,p15,p16,p17,p18, p19, p20, id_coopersmith)
        VALUES (:p11,:p12,:p13,:p14,:p15,:p16,:p17,:p18, :p19,:p20, :id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


      self::getConexion();

// par ainsertar el  maximo de la encuesta
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
       $p11   =$bloque2->getP11();
       $p12   =$bloque2->getP12();
       $p13   =$bloque2->getP13();
       $p14   =$bloque2->getP14();
       $p15   =$bloque2->getP15();
       $p16   =$bloque2->getP16();
       $p17   =$bloque2->getP17();
       $p18   =$bloque2->getP18();
       $p19   =$bloque2->getP19();
       $p20   =$bloque2->getP20();
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p11", $p11);
        $resultado->bindParam(":p12", $p12);
        $resultado->bindParam(":p13", $p13);
        $resultado->bindParam(":p14", $p14);
        $resultado->bindParam(":p15", $p15);
        $resultado->bindParam(":p16", $p16);
        $resultado->bindParam(":p17", $p17);
        $resultado->bindParam(":p18", $p18);
        $resultado->bindParam(":p19", $p19);
        $resultado->bindParam(":p20", $p20);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }

    }

//`id_bloque3`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `id_coopersmith`
        public  function creartercerbloque($bloque3){
       $query = "INSERT INTO coopersmithtercerbloque(p21, p22,p23,p24,p25,p26, p27, p28,p29,p30, id_coopersmith)
        VALUES (:p21, :p22, :p23,:p24,:p25,:p26,:p27,:p28,:p29,:p30,:id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


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
       $p21   =$bloque3->getP21();
       $p22   =$bloque3->getP22();
       $p23   =$bloque3->getP23();
       $p24   =$bloque3->getP24();
       $p25   =$bloque3->getP25();
       $p26   =$bloque3->getP26();
       $p27   =$bloque3->getP27();
       $p28   =$bloque3->getP28();
       $p29   =$bloque3->getP29();
       $p30   =$bloque3->getP30();
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p21", $p21);
        $resultado->bindParam(":p22", $p22);
        $resultado->bindParam(":p23", $p23);
        $resultado->bindParam(":p24", $p24);
        $resultado->bindParam(":p25", $p25);
        $resultado->bindParam(":p26", $p26);
        $resultado->bindParam(":p27", $p27);
        $resultado->bindParam(":p28", $p28);
        $resultado->bindParam(":p29", $p29);
        $resultado->bindParam(":p30", $p30);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }




        public  function crearcuartobloque($bloque4){
       $query = "INSERT INTO coopersmithcuartobloque(p31, p32,p33,p34,p35,p36, p37, p38,p39,p40, id_coopersmith)
        VALUES (:p31, :p32, :p33,:p34,:p35,:p36,:p37,:p38,:p39,:p40,:id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


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
       $p31   =$bloque4->getP31();
       $p32   =$bloque4->getP32();
       $p33   =$bloque4->getP33();
       $p34   =$bloque4->getP34();
       $p35   =$bloque4->getP35();
       $p36   =$bloque4->getP36();
       $p37   =$bloque4->getP37();
       $p38   =$bloque4->getP38();
       $p39   =$bloque4->getP39();
       $p40   =$bloque4->getP40();
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p31", $p31);
        $resultado->bindParam(":p32", $p32);
        $resultado->bindParam(":p33", $p33);
        $resultado->bindParam(":p34", $p34);
        $resultado->bindParam(":p35", $p35);
        $resultado->bindParam(":p36", $p36);
        $resultado->bindParam(":p37", $p37);
        $resultado->bindParam(":p38", $p38);
        $resultado->bindParam(":p39", $p39);
        $resultado->bindParam(":p40", $p40);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }


       public  function crearquintobloque($bloque5){
       $query = "INSERT INTO coopersmithquintobloque(p41, p42,p43,p44,p45,p46, p47, p48,p49,p50, id_coopersmith)
        VALUES (:p41, :p42, :p43,:p44,:p45,:p46,:p47,:p48,:p49,:p50,:id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


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
       $p41   =$bloque5->getP41();
       $p42   =$bloque5->getP42();
       $p43   =$bloque5->getP43();
       $p44   =$bloque5->getP44();
       $p45   =$bloque5->getP45();
       $p46   =$bloque5->getP46();
       $p47   =$bloque5->getP47();
       $p48   =$bloque5->getP48();
       $p49   =$bloque5->getP49();
       $p50   =$bloque5->getP50();
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p41", $p41);
        $resultado->bindParam(":p42", $p42);
        $resultado->bindParam(":p43", $p43);
        $resultado->bindParam(":p44", $p44);
        $resultado->bindParam(":p45", $p45);
        $resultado->bindParam(":p46", $p46);
        $resultado->bindParam(":p47", $p47);
        $resultado->bindParam(":p48", $p48);
        $resultado->bindParam(":p49", $p49);
        $resultado->bindParam(":p50", $p50);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }


        public  function crearsextobloque($bloque6){
       $query = "INSERT INTO coopersmithsextobloque(p51, p52,p53,p54,p55,p56, p57, p58, id_coopersmith)
        VALUES (:p51, :p52, :p53,:p54,:p55,:p56,:p57,:p58,:id_coopersmith);";

        $querymax = "SELECT max(id_coopersmith) maximo from coopersmith";


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
       $p51   =$bloque6->getP51();
       $p52   =$bloque6->getP52();
       $p53   =$bloque6->getP53();
       $p54   =$bloque6->getP54();
       $p55   =$bloque6->getP55();
       $p56   =$bloque6->getP56();
       $p57   =$bloque6->getP57();
       $p58   =$bloque6->getP58();
      
       $id_coopersmith=$max;


      


        $resultado->bindParam(":p51", $p51);
        $resultado->bindParam(":p52", $p52);
        $resultado->bindParam(":p53", $p53);
        $resultado->bindParam(":p54", $p54);
        $resultado->bindParam(":p55", $p55);
        $resultado->bindParam(":p56", $p56);
        $resultado->bindParam(":p57", $p57);
        $resultado->bindParam(":p58", $p58);
        $resultado->bindParam(":id_coopersmith", $id_coopersmith);
        

        if ($resultado->execute()) {

            return 1;

        }else{
            return 0;
        }



    }


    ///para buscar el ususario si ya acabo con la encuesta

      public static function userExistsCoopersmith($id){
        //$md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM coopersmith WHERE id_estudiante = :id';

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




