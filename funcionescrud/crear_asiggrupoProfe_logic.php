<?php 

include_once '../controlador/ProfesorControlador.php';

$idprofesor=$_POST['txtidprofesor'];
$idgrupo=$_POST['txtbuscargrupo'];
$result='';

if(ProfesorControlador::buscaridgrupo($idgrupo,$idprofesor)){
	$result=2;
}else{
 
 if(ProfesorControlador::crearAsignacionGrupo($idgrupo,$idprofesor)){
 	$result=1;
 }else{
 	$result=2;
 }

}

echo $result;


 ?>