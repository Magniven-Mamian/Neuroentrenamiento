<?php

include_once '../controlador/EstudianteControlador.php';

 $id_usu=$_POST['id_usu'];
 $id_est=$_POST['id_est'];
 $result='';

$result=EstudianteControlador::eliminarestudiante($id_usu,$id_est);
echo $result+1;



