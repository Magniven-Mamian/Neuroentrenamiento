
<?php
include_once '../controlador/UsuarioControlador.php';
include_once '../controlador/user_session.php';
include_once '../controlador/EstudianteControlador.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();


$filas=null;

if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());
$filas= $user->setUser($userSession->getCurrentUser());

   if ($filas->getPrivilegio()==1) {
      header('Location: vistaAdmin.php');
   }else if ($filas->getPrivilegio()==3) {
           # code...
      header('Location: vistaProfesor.php');
   }

  $getid_estudiante= EstudianteControlador::setEstudianteId($filas->getId());
  $idestudiante='';
  foreach ($getid_estudiante as $estu ) {
    # code...
    $idestudiante =$estu['id_estudiante'];
  }
   

}else{
header('Location: login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Estudiante</title>

	 <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
</head>
<body>
<header>
  <div class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="vistaEstudiante.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      
        <a class="navbar-brand" href="listaEncuestasEst.php">Encuestas</a>
      
    </ul>
  
    
    <form class="form-inline my-2 my-lg-0">
       <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuración</a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="logout.php">Cerrar sessión</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    </form>
    <div></div>
  </div>
</div>

</header>


<div class="navbar-header text-center">
   
    <a class="navbar-brand" rel="home" href="vistaformularioCoopersmith.php">
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/coopersmith.jpg">
            <h2>Encuesta coopersmith</h2></center> 
    </a>

      <a class="navbar-brand" rel="home" href="vistaformularioMotivacionEducativa.php">
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/motivacioneducativa.jpg">
            <h2>Encuesta motivación educativa</h2></center> 
    </a>

     <a class="navbar-brand" rel="home" href="vistaActividadFisica.php">
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/actividad_fisica.png">
            <h2>Encuesta actividad física</h2></center> 
     </a>

     <a class="navbar-brand" rel="home" href="vistaformularioFantastico.php">
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/fantastico.jpg">
            <h2>Fantástico</h2></center> 
     </a>




 

</div>

<h2>Más encuestas</h2>
<div id="listaEncuetasresolver"></div>


      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>


</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
 // 


   var datos=<?php echo $idestudiante; ?>;
            
           

           
            $.ajax({

            type:"POST",
            data:'id_estudiante='+ datos,
             url:'../componentes/listaencuestas_componente.php',
             success:function(respuesta){
                 
               $('#listaEncuetasresolver').html(respuesta);
           
             
             }


           });
 

  });
</script>