<?php 
include_once '../controlador/ProfesorControlador.php';

// public function crearEstudiante($cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password, $privilegio,$semestre)
$txtCedula=$_POST['txtCedula'];
$txtNombre=$_POST['txtNombre'];
$txtfecha=$_POST['txtFecha_nacimiento'];
$txtGenero=$_POST['txtGenero'];
$txtApellidos=$_POST['txtApellidos'];
$txttelefono=$_POST['txtTelefono'];
$txtEmail=$_POST['txtEmail'];
$txtpassword=$_POST['txtPassword'];
$txtprofesion=$_POST['txtProfesion'];
//$txtPrivilegio=2;
$result='';

	if(ProfesorControlador::crearProfesor($txtCedula,$txtNombre,$txtApellidos,$txtGenero,$txtfecha,$txttelefono,$txtEmail,$txtpassword,3)){


	if(ProfesorControlador::crearprofesorCompleto($txtprofesion)){
		$result=1;
	}	
		
	}else{
		$result=0;
	}
        

echo $result;

?>