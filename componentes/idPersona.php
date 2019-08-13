<?php

include '../controlador/EstudianteControlador.php';
include '../controlador/user_session.php';


//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new EstudianteControlador();

$filas=null;

$cedula='';
$privilegio=null;
$nombre=null;
$apellidos=null;
$id=null;


  
$a=$userSession->getCurrentUser();

$filas= $user->setUserEstudiante($userSession->getCurrentUser());
foreach ($filas as $f) {
  # code...
  $privilegio= $f['privilegio'];
  $id=$f['id_estudiante'];
  $cedula=$f['cedula'];
  $nombre=$f['nombre'];
  $apellidos=$f['apellidos'];

}


?>

<div id="adminactualizar">
	<h1> <label><?php echo $nombre.'  '.$apellidos ?></label></h1>
 <input type="text" name="idpersonas" id="idpersonas" value="<?php echo $id; ?>" hidden>

   </h1></a>
</div>