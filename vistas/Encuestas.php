<?php
include '../controlador/UsuarioControlador.php';
include '../controlador/user_session.php';
include '../helps/helps.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();
$filas2=null;

if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());
$filas2= $user->setUser($userSession->getCurrentUser());

   if ($filas2->getPrivilegio()==2) {
    header('Location: vistaEstudiante.php');
   }else if ($filas2->getPrivilegio()==3) {
           # code...
      header('Location: vistaProfesor.php');
   }
}else{
header('Location: login.php');
}

?>

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Neuroentrenamiento</title>
         
        <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
 



    </head>
   <body>

<header>
  <div class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="vistaAdmin.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
       <a class="navbar-brand" href="listaUsuarios.php">Lista de usuarios</a>
       <a class="navbar-brand" href="Encuestas.php">Encuestas</a>
    </ul>


    
    <form class="form-inline my-2 my-lg-0">
       <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">configuracion</a>
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

<h1>Estudiantes que realizaron las encuestas</h1>

<div class="container" style="max-width:600px; max-height: 400px;" >
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
   
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000" >
      
      <a class="navbar-brand" rel="home" href="resultcoopersmith.php">
     <img style="max-width:600px; max-height: 640px;" src="estilos/imagenes/imagenesencuestas/coopersmit.jpg">

       <div class="carousel-caption">
        <h3>Coopersmith</h3>
        <p>Encuesta de autoestima</p>
      </div>
    </a>
    </div>
    <div class="carousel-item" data-interval="2000">
      
     <a class="navbar-brand" rel="home" href="resultmotivacioneducativa.php">
     <img style="max-width:600px; max-height: 400px;" src="estilos/imagenes/imagenesencuestas/motivacion.jpg">

       <div class="carousel-caption">
        <h2 style="color: black">Motivación educativa</h2>
       
      </div>
    </a>
    </div>

     <div class="carousel-item" data-interval="2000">
      
     <a class="navbar-brand" rel="home" href="resultactividadfisica.php">
     <img style="max-width:600px; max-height: 400px;" src="estilos/imagenes/imagenesprofesores/profesor.jpg">

       <div class="carousel-caption">
        <h2 style="color: black">Actividad física</h2>
       
      </div>
     </a>
    </div>
  

   <div class="carousel-item" data-interval="2000">
      
     <a class="navbar-brand" rel="home" href="resultFantastico.php">
     <img style="max-width:600px; max-height: 400px;" src="estilos/imagenes/imagenesencuestas/coopersmith.jpg">

       <div class="carousel-caption">
        <h2 style="color: black">Fantástico</h2>
       
      </div>
     </a>
    </div>

    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div> 



<a href="crear_encuesta_form.php">Crear encuesta</a>






      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>

 </body>

</html>



