<?php

include_once '../controlador/UsuarioControlador.php';



        $txtNombre     =$_POST["txtNombre"];
        $txtEmail      = $_POST["txtEmail"];
        $txtPassword   =$_POST["txtPassword"];
        $txtCedula     =$_POST["txtCedula"];
        $txtApellidos  =$_POST["txtApellidos"];
        $txtFecha_nacimiento=$_POST["txtFecha_nacimiento"];
        $txtTelefono= $_POST["txtTelefono"];
        $txtPrivilegio = 1;
        $txtGenero=2;
        #(:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
           $result='';
        

if (UsuarioControlador::buscarEmail($txtEmail)==true) {  
 
  $valor++;
  $result=4;
  } else {
        $registro = UsuarioControlador::crearUsuario($txtCedula,$txtNombre,$txtApellidos,$txtFecha_nacimiento,$txtGenero,$txtTelefono,$txtEmail,$txtPassword,$txtPrivilegio); 

        $result=$registro;  

     
  }
  echo $result;