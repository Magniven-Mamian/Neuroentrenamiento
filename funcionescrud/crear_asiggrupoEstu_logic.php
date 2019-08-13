<?php 

include_once '../controlador/EstudianteControlador.php';

$idestudiante=$_POST['txtidestudiante'];
$idgrupo=$_POST['txtbuscargrupo'];
$result='';




if(EstudianteControlador::buscaridgrupo($idgrupo, $idestudiante)){
	$result=2;
}else{
if(EstudianteControlador::crearAsignacionGrupo($idgrupo, $idestudiante)){

$result=1;
}else
{
	$result=2;
}


}
echo $result;
 ?>

