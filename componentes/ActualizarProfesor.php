<?php

include '../controlador/ProfesorControlador.php';
include '../controlador/user_session.php';
include '../helps/helps.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$profesor = new ProfesorControlador();
$filas2=null;

if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$profesor->setProfesor($userSession->getCurrentUser());
$filas2= $profesor->setProfesor($userSession->getCurrentUser());
}


foreach ($filas2 as $mostrar) {
  $id=null;



     $id=   $mostrar[0]."||".
            $mostrar[1]."||".
            $mostrar[2]."||".
            $mostrar[3]."||".
            $mostrar[4]."||".
            $mostrar[5]."||".
            $mostrar[6]."||".
            $mostrar[7]."||".
            $mostrar[8]."||".
            $mostrar[9]."||".
            $mostrar[10]."||".
            $mostrar[11]."||".
            $mostrar[12];
        # code...
      	    
         
   


?>

<div id="profesoractualizar">

	<h1>Bienvenido Profesor</h1>
 <a id="actualizarp" data-toggle="modal" data-target="#modalactualizar" onclick="obteneridprofesor('<?php  echo $id ?>')"><h1>  <?php echo $mostrar[1].'   '.  $mostrar[2];?>  </h1></a>

<?php } ?>


</div>

