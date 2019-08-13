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
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">configuración</a>
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
<br>
<br>


<div class="navbar-header text-center">
   
    <a class="navbar-brand" rel="home" href="listaUsuariosEstudiantes.php">
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesestudiantes/estu1.jpg">
            <h2>Estudiantes</h2></center> 
    </a>
    <a class="navbar-brand" rel="home" href="listaUsuariosProfesor.php" >
      <center> <img style="max-width:300px; margin-top: -7px;"
             src="estilos/imagenes/imagenesprofesores/profesor.jpg">
            <h2>Profesores</h2></center> 
    </a>

</div>

<a href="grupo_form.php">Crear grupo</a>




      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
 <script src="../funcionesJavascript/funcionesProfesor.js" ></script> 

 </body>

</html>



   <script type="text/javascript">
  $(document).ready(function(){
  $('#tablaEstudiantes').load('../componentes/tablaEstudiantes.php');

   
  });

</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#actualizarestudiante').click(function(){
         actualizardatosprofesor();
      });

    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#pasarpagina').click(function(){
        window.location.href = 'vistaAdmin.php';
      });

    });
</script>


