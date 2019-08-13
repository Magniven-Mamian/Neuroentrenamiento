<?php

include_once '../controlador/ProfesorControlador.php';

    $txtCedula     =$_POST["txtCedula"];
        $txtNombre     =$_POST["txtNombre"]; 
        $txtApellidos  =$_POST["txtApellidos"];         
        $txtFecha_nacimiento=$_POST["txtFecha_nacimiento"];
        $txtGenero=$_POST["txtGenero"];
        $txtTelefono= $_POST["txtTelefono"];
        $txtEmail      = $_POST["txtEmail"];
        $txtPassword   =$_POST["txtPassword"];
        $txtProfesion  =$_POST["txtProfesion"];
        $txt_idprofesor=$_POST["txt_idprofesor"];
        $txt_idusuario=$_POST["txt_idusuario"];


                   $result='';
//EstudianteControlador::actualizarEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtSemestre

       if(ProfesorControlador::actualizarProfesor($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtTelefono,$txtEmail,$txtPassword,$txtProfesion,$txt_idprofesor,$txt_idusuario)){
        $result=1;
       }else{
        $result=0;
       }
      
     echo $result;