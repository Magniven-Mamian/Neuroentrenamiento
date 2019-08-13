<?php

include_once '../controlador/ProfesorControlador.php';

 $id_usu=$_POST['id_usu'];
 $id_profe=$_POST['id_profe'];
 $result='';

$result=ProfesorControlador::eliminarprofesor($id_usu,$id_profe);
echo $result+1;