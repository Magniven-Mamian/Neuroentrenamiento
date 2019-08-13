<?php

include_once '../controlador/EncuestaControlador.php';

 if (isset($_POST['data_encuesta']) && isset($_POST['id_usuario']) && isset($_POST['id_encuesta'])) {
    $datos = json_decode($_POST['data_encuesta']);
    foreach ($datos as $dato=>$di) {
        EncuestaControlador::insertRespuesta($di->id_pregunta,$di->value, $_POST['id_usuario']);

    }

     foreach ($datos as $valor=>$v) {
           echo  $v->value;
           echo $v->id_pregunta;

    }



  
} 
?>