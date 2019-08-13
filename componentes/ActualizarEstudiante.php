<?php 

include '../controlador/EstudianteControlador.php';
include '../controlador/user_session.php';
include '../helps/helps.php';

$userSession = new UserSession();
$estudiante = new  EstudianteControlador();

$filas2=null;


if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$estudiante->setUserEstudiante($userSession->getCurrentUser());
$filas2= $estudiante->setUserEstudiante($userSession->getCurrentUser());

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
            $mostrar[12]."||".
            $mostrar[13];
        # code...
      	    
         
   


?>

<div id="estudianteactualizar">

	<h1>Bienvenido Estudiante</h1>
 <a id="actualizarp" data-toggle="modal" data-target="#modalactualizarEstudiante" onclick="obteneridestudiante(
                    '<?php  echo $id ?>')"><h1>  <?php echo $mostrar[1].'   '.  $mostrar[2];?>  </h1></a>

<?php } ?>

</div>
