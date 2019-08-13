<?php
include '../controlador/UsuarioControlador.php';
include '../controlador/user_session.php';

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


<div class="modal fade" id="modalactualizarEstudiante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar Datos Estudiante  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">

             
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
                <input type="date" name="txtFecha_nacimiento" class="form-control" id="txtFecha_nacimiento" value="<?php if(isset($txtFecha_nacimiento)) echo $txtFecha_nacimiento; ?>">
              </div>
               <div class="form-group">
               
                                  <label for="txtGenero">ingrese Genero</label>  
                                   <select class="form-control" name="txtGenero"  id="txtGenero" >

                                          <option value="1">Masculino</option>
                                          <option value="2">Femenino</option>

                                     </select>
              </div>
              
              <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="text" name="txtTelefono" class="form-control" id="txtTelefono" autofocus required placeholder="Ingresa su Telefono" value="<?php if(isset($txtTelefono)) echo $txtTelefono; ?>">
              </div>

              <div class="form-group">
                <label for="txtEmail">E-mail</label>
                <input type="email" name="txtEmail" class="form-control" id="txtEmail"  required placeholder="Ingresa tu dirección de e-mail" value="<?php if(isset($txtEmail)) echo $txtEmail; ?>">
              </div>
              
              <div class="form-group">
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" class="form-control" required id="txtPassword" placeholder="****" value="<?php if(isset($txtPassword)) echo $txtPassword; ?>">
              </div>
                <div class="form-group">
                <label for="txtSemestre">Semestre</label>
                <input type="text" name="txtSemestre" class="form-control" required id="txtSemestre" placeholder="ingresa semestre" value="<?php if(isset($txtSemestre)) echo $txtSemestre; ?>">
              </div>
              <input type="hidden" name="txt_idestudiante" class="form-control" required id="txt_idestudiante" value="<?php if(isset($txt_idestudiante)) echo $txt_idestudiante; ?>" placeholder="ingrese id de Estudiante">

                 <input type="hidden" name="txt_idusuario" class="form-control" required id="txt_idusuario" value="<?php if(isset($txt_idusuario)) echo $txt_idusuario; ?>" placeholder="ingrese id de usuario">

                   
              
              <!--$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre--->

</div>

    
        <div class="modal-footer">     
        <input type="submit" id="actualizarestudiante" class="btn btn-primary" data-dismiss="modal" value="actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div id="bienvenidoEstudiante"></div>
      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
  <script src="../funcionesJavascript/funcionesEstudiante.js"></script>

</body>
</html>

 <script type="text/javascript">
  $(document).ready(function(){
   $('#bienvenidoEstudiante').load('../componentes/ActualizarEstudiante.php');
   $('#actualizarestudiante').click(function(){
         actualizardatosestudiante();
      });

  });

</script>