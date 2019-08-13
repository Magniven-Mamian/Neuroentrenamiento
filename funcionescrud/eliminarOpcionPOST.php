<?php 


include_once '../controlador/PreguntaControlador.php';

$result='';

$txt_idopcion=$_POST['id'];
if(PreguntaControlador::eliminarOpcion($txt_idopcion)){
	$result=1;

}else{
	$result=0;
}



echo $result;

 ?>