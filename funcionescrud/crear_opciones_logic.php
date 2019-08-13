<?php 
include_once '../controlador/PreguntaControlador.php';

$id_pregunta=$_POST["txtid_pregunta"];
$nombreopcion=$_POST["txtNombreOpcion"];

$result='';
if(PreguntaControlador::crearopcion($nombreopcion,  $id_pregunta)){
$result=1;
}else{
	$result=0;
}

echo $result;



 ?>