<?php 

include_once '../controlador/PreguntaControlador.php';

$txtNombreOpcionactu=$_POST["txtNombreOpcionactu"];
$txtid_preguntaact=$_POST["txtid_preguntaact"];

$result='';

if(PreguntaControlador::actualizarOpcion($txtid_preguntaact, $txtNombreOpcionactu)){
$result=1;
}else{
$result=0;
}

echo $result;



 ?>