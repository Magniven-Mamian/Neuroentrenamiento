<?php 
include_once '../controlador/EncuestaControlador.php';



       
       
      
       
        $txtid     =$_POST["txt_idencuesta"];
        $txtNombre   =$_POST["txtNombre"];       
       
         
       
           $result='';
//EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtSemestre

       if(EncuestaControlador::actualizarEncuesta($txtNombre, $txtid)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;


 ?>