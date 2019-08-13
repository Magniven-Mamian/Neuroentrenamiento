<?php 

include_once '../controlador/ProfesorControlador.php';

 $id_asignacionGrupoProf=$_POST['id_asignacion'];
 $result='';

if(ProfesorControlador::eliminarGrupoProfesor($id_asignacionGrupoProf)){

	$result=1;

}else{
	$result=0;
}
echo $result;