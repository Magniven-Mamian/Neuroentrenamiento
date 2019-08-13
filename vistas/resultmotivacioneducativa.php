<?php
$host="localhost";
$usuario="root";
$contrasena="";
$base="bd_login";
 
//

$conexion = mysqli_connect($host, $usuario, $contrasena, $base);
///// CONSULTA A LA BASE DE DATOS /////////////////
$alumnos="SELECT * FROM usuarios NATURAL JOIN estudiante inner join motivacioneducativa on (motivacioneducativa.id_estudiante=estudiante.id_estudiante)";
$resAlumnos=$conexion->query($alumnos);




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
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuración</a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="logout.php">Cerrar sessión</a>
        
        </div>
      </li>
    </ul>
    </form>
    <div></div>
  </div>
</div>



</header>
  <div class="alert alert-info">
            <h2>Descargar Reportes en Excel de la encuesta de motivacion educativa</h2>
  </div>
 <section>
            <table class="table">
                <tr class="bg-primary">
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Fecha de realización</th>
                    
                </tr>
                <?php
                while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
                {
                    echo'<tr>
                         <td>'.$registroAlumnos['cedula'].'</td>
                         <td>'.$registroAlumnos['nombre'].'</td>
                         <td>'.$registroAlumnos['apellidos'].'</td>
                         <td>'.$registroAlumnos['email'].'</td>
                         <td>'.$registroAlumnos['fecha_realizacion'].'</td>
                        
                         </tr>';
                }
                ?>
            </table>
        </section>

       
         <a href="../reportes/reportemotivacioneducativa.php">descargar</a>

      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>

 </body>

</html>
