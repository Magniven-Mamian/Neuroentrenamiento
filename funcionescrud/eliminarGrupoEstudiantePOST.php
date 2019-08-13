<?php 
include_once '../controlador/EstudianteControlador.php';

 $id_asignacionGrupoEst=$_POST['id_asignacion'];
 $result='';

if(EstudianteControlador::eliminarGrupoestudiante($id_asignacionGrupoEst)){

	$result=1;

}else{
	$result=0;
}
echo $result;



