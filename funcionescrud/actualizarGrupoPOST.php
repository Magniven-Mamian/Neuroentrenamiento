<?php

include_once '../controlador/GrupoControlador.php';



       
       
      
       
        $txtidGrupo     =$_POST["txt_idgrupo"];
        $txtNombregrupo     =$_POST["txtNombreGrupos"];       
       
         
       
           $result='';
//EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtSemestre

       if(GrupoControlador::actualizarGrupo($txtNombregrupo, $txtidGrupo)==1){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;