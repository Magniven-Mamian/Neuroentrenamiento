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
        
        </div>
      </li>
    </ul>
    </form>
    <div></div>
  </div>
</div>

</header>
<div>
    <!-- modal  actualizar  -->
<!-- Modal -->


<div class="modal fade" id="modalactualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar Datos del perfil </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">

             <input type="hidden" name="txtid_usuario" class="form-control" id="txtid_usuario"  value="<?php if(isset($txtid_usuario)) echo $txtid_usuario; ?>">

              <div class="form-group">
                <label for="txtCedula">Cedula</label>
                <input type="text" name="txtCedula" class="form-control" id="txtCedula" autofocus required placeholder="Ingresa tu Cedula" value="<?php if(isset($txtCedula)) echo $txtCedula; ?>">
              </div>

              <div class="form-group">
                <label for="nombre">Nombres</label>
                <input type="txtNombre" name="txtNombre" class="form-control" id="txtNombre" autofocus required placeholder="Ingresa tu nombre" value="<?php if(isset($txtNombre)) echo $txtNombre; ?>">
              </div>

              <div class="form-group">
                <label for="txtApellidos">Apellidos</label>
                <input type="text" name="txtApellidos" class="form-control" id="txtApellidos" autofocus required placeholder="Ingresa tus apellidos" value="<?php if(isset($txtApellidos)) echo $txtApellidos; ?>">
              </div>
              <div class="form-group">
                <label for="txtFecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" name="txtFecha_nacimiento" class="form-control" id="txtFecha_nacimiento" value="">
              </div>

              <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="text" name="txtTelefono" class="form-control" id="txtTelefono" autofocus required placeholder="Ingresa su Telefono" value="<?php if(isset($txtTelefono)) echo $txtTelefono; ?>">
              </div>

              <div class="form-group">
                <label for="txtEmail">E-mail</label>
                <input type="email" name="txtEmail" class="form-control" id="txtEmail"  required placeholder="Ingresa tu dirección de e-mail" value="<?php if(isset($txtEmail)) echo $txtEmail; ?>">
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="txtPassword" class="form-control" required id="txtPassword" placeholder="****" value="<?php if(isset($txtPassword)) echo $txtPassword; ?>">
              </div>
                   

</div>

    
        <div class="modal-footer">     
        <input type="submit" id="actualizar" class="btn btn-primary" data-dismiss="modal" value="actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
</div>






<div  id="bienvenido"></div>
  <!---la etiqueta estilos para delos emnsajes-->
   <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
   <script src="../funcionesJavascript/funciones.js" ></script>
 </body>

</html>


 <script type="text/javascript">
  $(document).ready(function(){
   $('#bienvenido').load('../componentes/ActualizarAdmin.php');
  });

</script>

<script type="text/javascript">
    $(document).ready(function(){
     
      $('#actualizar').click(function(){
         actualizardatos();
      });

    });
</script>

