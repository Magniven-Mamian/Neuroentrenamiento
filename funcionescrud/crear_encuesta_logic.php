<?php 
include_once '../controlador/EncuestaControlador.php';

        $txtNombre     =$_POST["txtNombreEncuesta"]; 
        $txtid_usuario=$_POST["txtid_usuario"]; 
     
       $result='';


       if(EncuestaControlador::crearEncuesta($txtNombre,$txtid_usuario)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;




 ?>