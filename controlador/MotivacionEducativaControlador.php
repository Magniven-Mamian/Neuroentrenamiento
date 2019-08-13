<?php 


include_once  '../modelo/MotivacionDao.php';

/**
 * 
 */
class MotivacionEducativaControlador 
{
	
	 //para crear el coopersmith
    public function crearMotivacion($id_estudiante)
    {
    $obj_estudiante= new Estudiante();
    $obj_estudiante->setId_estudiante($id_estudiante);
      

       return MotivacionDao::crearMotivacion($obj_estudiante);
    }

    //para crear el primer bloque
    public function crearprimerbloque($m1, $m2, $m3, $m4,$m5,$m6,$m7){
     $obj_bloque1=new motivacioneducativaprimerbloque();
    
     $obj_bloque1->setM1($m1); 
     $obj_bloque1->setM2($m2); 
     $obj_bloque1->setM3($m3); 
     $obj_bloque1->setM4($m4); 
     $obj_bloque1->setM5($m5); 
     $obj_bloque1->setM6($m6); 
     $obj_bloque1->setM7($m7);
    

     

     return MotivacionDao::crearprimerbloque($obj_bloque1);


    }
      //para crear el primer bloque
    public function crearsegundobloque($m8, $m9, $m10, $m11,$m12,$m13,$m14){
     $obj_bloque2=new motivacioneducativasegundobloque();
    
     $obj_bloque2->setM8($m8); 
     $obj_bloque2->setM9($m9); 
     $obj_bloque2->setM10($m10); 
     $obj_bloque2->setM11($m11); 
     $obj_bloque2->setM12($m12); 
     $obj_bloque2->setM13($m13); 
     $obj_bloque2->setM14($m14);
    

     

     return MotivacionDao::crearsegundobloque($obj_bloque2);


    }
        //para crear el primer bloque
    public function creartercerbloque($m15, $m16, $m17, $m18,$m19,$m20,$m21){
     $obj_bloque3=new motivacioneducativatercerbloque();
    
     $obj_bloque3->setM15($m15); 
     $obj_bloque3->setM16($m16); 
     $obj_bloque3->setM17($m17); 
     $obj_bloque3->setM18($m18); 
     $obj_bloque3->setM19($m19); 
     $obj_bloque3->setM20($m20); 
     $obj_bloque3->setM21($m21);
    

     

     return MotivacionDao::creartercerbloque($obj_bloque3);


    }
         //para crear el  4 bloque
    public function crearcuartobloque($m22, $m23, $m24, $m25,$m26,$m27,$m28){
     $obj_bloque4=new motivacioneducativacuartobloque();
    
     $obj_bloque4->setM22($m22); 
     $obj_bloque4->setM23($m23); 
     $obj_bloque4->setM24($m24); 
     $obj_bloque4->setM25($m25); 
     $obj_bloque4->setM26($m26); 
     $obj_bloque4->setM27($m27); 
     $obj_bloque4->setM28($m28);
    

     

     return MotivacionDao::crearcuartobloque($obj_bloque4);


    }
    public function userExistsMotivacioneducativa($cedula){
    
     return MotivacionDao::userExistsMotivacioneducativa($cedula);

     }


}
//MotivacionEducativaControlador::crearMotivacion(10233);
//MotivacionEducativaControlador::crearprimerbloque('bien','no','no','bien','bien','mal','mal');
//MotivacionEducativaControlador::crearsegundobloque('bien','ve','ni','dos','a','es','to');
//MotivacionEducativaControlador::creartercerbloque('a','b','c','d','e','f','g');
//MotivacionEducativaControlador::crearcuartobloque('1','2','3','4','5','6','7');

 ?>


