<?php 
include_once '../controlador/PreguntaControlador.php';

        $txtNombrePregunta     =$_POST["txtNombrePregunta"]; 
        $txtid_encuesta=$_POST["txtid_encuesta"]; 
        $txtTipoPregunta=$_POST["txtTipoPregunta"]; 


    


       if(PreguntaControlador::crearPregunta($txtNombrePregunta,$txtTipoPregunta, $txtid_encuesta)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;




 ?>