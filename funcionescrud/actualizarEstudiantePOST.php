<?php

include_once '../controlador/EstudianteControlador.php';



       
       
      // $cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre
       
        $txtCedula     =$_POST["txtCedula"];
        $txtNombre     =$_POST["txtNombre"]; 
        $txtApellidos  =$_POST["txtApellidos"];         
        $txtFecha_nacimiento=$_POST["txtFecha_nacimiento"];
        $txtGenero=$_POST["txtGenero"];
        $txtTelefono= $_POST["txtTelefono"];
        $txtEmail      = $_POST["txtEmail"];
     $txtPassword   =$_POST["txtPassword"];
        $txtSemestre   =$_POST["txtSemestre"];
        $txt_idestudiante=$_POST["txt_idestudiante"];
        $txt_idusuario=$_POST["txt_idusuario"];
         
       
           $result='';
//EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtSemestre

       if(EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtTelefono,$txtEmail,$txtPassword,$txtSemestre,$txt_idestudiante,$txt_idusuario)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;