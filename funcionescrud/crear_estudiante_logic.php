<?php 
include_once '../controlador/EstudianteControlador.php';

// public function crearEstudiante($cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password, $privilegio,$semestre)
$txtCedula=$_POST['txtCedula'];
$txtNombre=$_POST['txtNombre'];
$txtfecha=$_POST['txtFecha_nacimiento'];
$txtGenero=$_POST['txtGenero'];
$txtApellidos=$_POST['txtApellidos'];
$txttelefono=$_POST['txtTelefono'];
$txtEmail=$_POST['txtEmail'];
$txtpassword=$_POST['txtPassword'];
$txtsemestre=$_POST['txtSemestre'];
$txtPrivilegio=2;
$result='';
if(EstudianteControlador::buscarEmailCedula($txtEmail)==true){
  $valor++;
  $result=4;

}else{
	$registro=EstudianteControlador::crearEstudiante($txtCedula,$txtNombre,$txtApellidos,$txtGenero,$txtfecha,$txttelefono,$txtEmail,$txtpassword,2);

	$registro=EstudianteControlador::crearEstudianteCompleto($txtsemestre);
       $result=$registro;  
}
echo $result;

?>