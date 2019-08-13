<?php 

include '../modelo/ActividadfisicaDao.php';

/**
 * 
 */
class ActividadFisicaControlador
{


      public function crearActividadFisica($id_estudiante){
      return   ActividadfisicaDao::crearActividadFisica($id_estudiante);


      }

    public function   crearbloquetrabajo($p49,$p50,$p51,$p52,$p53,$p54){
    	ActividadfisicaDao::crearbloquetrabajo($p49,$p50,$p51,$p52,$p53,$p54);
    }

    public function crearbloquedesplazarse($p55,$p56,$p57){
    	 return ActividadfisicaDao::crearbloquedesplazarse($p55,$p56,$p57);
    }

    public function crearbloquetiempolibre($p58,$p59,$p60){
    	ActividadfisicaDao::crearbloquetiempolibre($p58,$p59,$p60);
    }

    public  function crearbloquesesionlibre($p61,$p62,$p63){
    return	ActividadfisicaDao::crearbloquesesionlibre($p61,$p62,$p63);
    }
     public  function crearbloquecomportamiento($p64){
     	return ActividadfisicaDao::crearbloquecomportamiento($p64);
     }

     //metodo para ver si el estudiante existe en la encuesta
    public function  userExistsActividadFisica($id){
     return ActividadfisicaDao::userExistsActividadFisica($id);
     }


	
	
}

 //ActividadFisicaControlador::crearActividadFisica(2);
 #ActividadFisicaControlador::crearbloquetrabajo('si','no','si','no','si','si');
 #ActividadFisicaControlador::crearbloquedesplazarse('si','no','si');
 #ActividadFisicaControlador::crearbloquetiempolibre('no','no','si');
 # ActividadFisicaControlador::crearbloquesesionlibre('si','si','si');
 #ActividadfisicaDao::crearbloquecomportamiento('no');


