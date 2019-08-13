<?php

include_once  '../modelo/CoopersmithDao.php';

class CoopersmithControlador
{

   
    //para crear el coopersmith
    public function crearCooperSmith($id_estudiante)
    {
    $obj_usuario= new Estudiante();
    $obj_usuario->setId_estudiante($id_estudiante);
      

       return CoopersmithDao::crearCooperSmith($obj_usuario);
    }

//para crear el primer bloque
    public function crearprimerbloque($p1, $p2, $p3, $p4,$p5,$p6,$p7,$p8, $p9,$p10){
     $obj_bloque1=new coopersmithprimerbloque();
    
     $obj_bloque1->setP1($p1); 
     $obj_bloque1->setP2($p2); 
     $obj_bloque1->setP3($p3); 
     $obj_bloque1->setP4($p4); 
     $obj_bloque1->setP5($p5); 
     $obj_bloque1->setP6($p6); 
     $obj_bloque1->setP7($p7); 
     $obj_bloque1->setP8($p8); 
     $obj_bloque1->setP9($p9);
     $obj_bloque1->setP10($p10); 
    

     

     return CoopersmithDao::crearprimerbloque($obj_bloque1);


    }
    //para crear el segundo bloque
    public function crearsegundobloque($p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20){
     $obj_bloque2=new coopersmithsegundobloque();
    
    $obj_bloque2->setP11($p11); 
     $obj_bloque2->setP12($p12); 
     $obj_bloque2->setP13($p13); 
     $obj_bloque2->setP14($p14); 
     $obj_bloque2->setP15($p15); 
     $obj_bloque2->setP16($p16); 
     $obj_bloque2->setP17($p17); 
     $obj_bloque2->setP18($p18); 
     $obj_bloque2->setP19($p19);
     $obj_bloque2->setP20($p20); 
    

     

     return CoopersmithDao::crearsegundobloque($obj_bloque2);


    }
       //para crear el tercer bloque
    public function creartercerbloque($p21,$p22,$p23,$p24,$p25,$p26,$p27,$p28,$p29,$p30){
     $obj_bloque3=new coopersmithtercerbloque();
    
    $obj_bloque3->setP21($p21); 
     $obj_bloque3->setP22($p22); 
     $obj_bloque3->setP23($p23); 
     $obj_bloque3->setP24($p24); 
     $obj_bloque3->setP25($p25); 
     $obj_bloque3->setP26($p26); 
     $obj_bloque3->setP27($p27); 
     $obj_bloque3->setP28($p28); 
     $obj_bloque3->setP29($p29);
     $obj_bloque3->setP30($p30); 
    

     

     return CoopersmithDao::creartercerbloque($obj_bloque3);


    }
    //para crear el cuarto bloque
    public function crearcuartobloque($p31,$p32,$p33,$p34,$p35,$p36,$p37,$p38,$p39,$p40){
     $obj_bloque4=new coopersmithcuartobloque();
    
    $obj_bloque4->setP31($p31); 
     $obj_bloque4->setP32($p32); 
     $obj_bloque4->setP33($p33); 
     $obj_bloque4->setP34($p34); 
     $obj_bloque4->setP35($p35); 
     $obj_bloque4->setP36($p36); 
     $obj_bloque4->setP37($p37); 
     $obj_bloque4->setP38($p38); 
     $obj_bloque4->setP39($p39);
     $obj_bloque4->setP40($p40); 
    

     

     return CoopersmithDao::crearcuartobloque($obj_bloque4);


    }
      //para crear el quinto bloque
    public function crearquintobloque($p41,$p42,$p43,$p44,$p45,$p46,$p47,$p48,$p49,$p50){
     $obj_bloque5=new coopersmithquintobloque();
    
    $obj_bloque5->setP41($p41); 
     $obj_bloque5->setP42($p42); 
     $obj_bloque5->setP43($p43); 
     $obj_bloque5->setP44($p44); 
     $obj_bloque5->setP45($p45); 
     $obj_bloque5->setP46($p46); 
     $obj_bloque5->setP47($p47); 
     $obj_bloque5->setP48($p48); 
     $obj_bloque5->setP49($p49);
     $obj_bloque5->setP50($p50); 
    

     

     return CoopersmithDao::crearquintobloque($obj_bloque5);


    }

      //para crear el sexto bloque
    public function crearsextobloque($p51,$p52,$p53,$p54,$p55,$p56,$p57,$p58){
     $obj_bloque6=new coopersmithsextobloque();
    
    $obj_bloque6->setP51($p51); 
     $obj_bloque6->setP52($p52); 
     $obj_bloque6->setP53($p53); 
     $obj_bloque6->setP54($p54); 
     $obj_bloque6->setP55($p55); 
     $obj_bloque6->setP56($p56); 
     $obj_bloque6->setP57($p57); 
     $obj_bloque6->setP58($p58); 
    
    

     

     return CoopersmithDao::crearsextobloque($obj_bloque6);


    }

     public function userExistsCoopersmith($id){
    
     return CoopersmithDao::userExistsCoopersmith($id);

     }

    
}

