<?php

include_once '../controlador/UsuarioControlador.php';



       
      //  $txtEmail      = $_POST["txtEmail"];
      //  $txtPassword   =$_POST["txtPassword"];
       
        $txtid_usuario=$_POST["txtid_usuario"];
        $txtApellidos  =$_POST["txtApellidos"];
        $txtNombre     =$_POST["txtNombre"];
       // $txtPrivilegio=$_POST["txtPrivilegio"];
    /*   
        $txtFecha_nacimiento=$_POST["txtFecha_nacimiento"];
        $txtTelefono= $_POST["txtTelefono"];
         $txtCedula     =$_POST["txtCedula"];*/
       
           $result='';
        
//actualizarusuario($cedula, $nombre,$apellidos, $fecha_nacimiento, $telefono, $email,$password, $id)
         $result= UsuarioControlador::actualizarusuario($txtNombre,$txtApellidos,$txtid_usuario);
         

  echo $result;