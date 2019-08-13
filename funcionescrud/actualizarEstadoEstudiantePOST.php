<?php

include_once '../controlador/EstudianteControlador.php';


$txt_idestudiante=$_POST["txt_idestudiantes"];
 $txtEstado=$_POST["txtEstado"];
 $result='';

 if(EstudianteControlador::actualizarEstadoEst($txtEstado,$txt_idestudiante)){
   $result=1;
 }else{
  $result=0;
 }

 echo $result;