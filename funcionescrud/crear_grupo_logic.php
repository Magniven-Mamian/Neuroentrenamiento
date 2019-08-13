<?php

include_once '../controlador/GrupoControlador.php';

        $txtNombre     =$_POST["txtNombreGrupo"]; 
     
       $result='';
//EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtSemestre

       if(GrupoControlador::crearGrupo($txtNombre)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;