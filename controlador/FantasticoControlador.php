<?php 

include '../modelo/FantasticoDao.php';

/**
 * 
 */
class FantasticoControlador
{


      public function crearFantastico($id_estudiante){
     return  FantasticoDao::crearFantastico($id_estudiante);
     }

     //el metodo para el primer bloque
   public function crearFantastico_fa($fa1, $fa2,$fa3, $fa4)
    {
    	return FantasticoDao::crearFantastico_fa($fa1, $fa2,$fa3, $fa4);


    }
     //este es para el segundo bloque
    public function crearFantastico_nt($nt1, $nt2,$nt3, $nt4, $nt5){
     return  FantasticoDao::crearFantastico_nt($nt1, $nt2,$nt3, $nt4, $nt5);
       
    }

    public function  crearFantastico_as($as1, $as2,$as3, $as4, $as5, $as6){
    	 return FantasticoDao::crearFantastico_as($as1, $as2,$as3, $as4, $as5, $as6);
    }

    public function crearFantastico_ti($ti1, $ti2,$ti3, $ti4, $ti5)
    {
    return	FantasticoDao::crearFantastico_ti($ti1, $ti2,$ti3, $ti4, $ti5);
    }
   public  function crearFantastico_co($co1, $co2,$co3, $co4, $co5){
   return	FantasticoDao::crearFantastico_co($co1, $co2,$co3, $co4, $co5);
   }
    
    //metodo para que el estudiante no repita la prueba
    public static function userExistsFantastico($id){
   return FantasticoDao::userExistsFantastico($id);
   }


    

}




