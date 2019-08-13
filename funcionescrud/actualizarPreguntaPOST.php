<?php 

include_once '../controlador/PreguntaControlador.php';



       
       
      
       
        $txtidPregunta    =$_POST["txtidpregunta"];
        $txtNombrepregunta     =$_POST["txtNombrePreguntaact"]; 
        $txtTipoPregunta=$_POST["txtTipoPreguntaact"];      
       
         
       
           $result='';
//($nombre_pregunta, $tipo,$id_pregunta)

       if(PreguntaControlador::actualizarPregunta($txtNombrepregunta, $txtTipoPregunta, $txtidPregunta)){

        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;


 ?>