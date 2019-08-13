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
<html>
<head>
	<title></title>
	 <?php include 'partials/head.php'; ?>
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



  
<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearGrupo();">

							<legend id="titulo">Crear nuevo  grupo</legend>
							
							
							<div class="form-group">
								<label for="txtNombreGrupo">Nombre del grupo</label>
								<input type="text" name="txtNombreGrupo" class="form-control" id="txtNombreGrupo" autofocus required placeholder="Ingresa nombre grupo" value="<?php if(isset($txtNombreGrupo)) echo $txtNombreGrupo; ?>">
							</div>

							
							<button type="submit" class="btn btn-success" id="crear_grupo"> Agregar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<div>
    <!-- modal  actualizar  -->
<!-- Modal -->


<div class="modal fade" id="modalactualizargrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar Grupo  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">
             
              <input type="text" name="txt_idgrupo" class="form-control" required id="txt_idgrupo" value="<?php if(isset($txt_idgrupo)) echo $txt_idgrupo; ?>" hidden>

             
              <div class="form-group">
				<label for="txtNombreGrupos">Nombre del grupo</label>
				<input type="text" name="txtNombreGrupos" class="form-control" id="txtNombreGrupos" autofocus required placeholder="Ingresa nombre grupo" value="<?php if(isset($txtNombreGrupos)) echo $txtNombreGrupos; ?>">
			</div>

             
              
              
                 

                   
              
              <!--$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre--->

</div>

    
        <div class="modal-footer">     
        <input type="submit" id="actualizarGrupo" class="btn btn-primary" data-dismiss="modal" value="actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
</div>









  <div id="tablaGrupo" name="tablaGrupo"></div>




<?php include 'partials/footer.php';?>
 <script src="../funcionesJavascript/funcionesGrupo.js"></script>

  <script type="text/javascript">
     function crearGrupo(){
  nombre= $('#txtNombreGrupo').val();
 

  var datos='txtNombreGrupo='+nombre;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_grupo_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
   
           alertify.confirm('Registro grupo', 'Registro exitoso', function(){ alertify.success('exitoso') }
                , function(){ alertify.error('Cerrar')});
            $('#tablaGrupo').load('../componentes/tablaGrupos.php');
           
           $('#txtNombreGrupo').val('');
       


       }else{
        alertify.confirm('Registro Grupo', 'Grupo ya existe', function(){ alertify.success('Grupo ya existen') }
                , function(){ alertify.error('Cerrar')});
       }
    }


  });
     return false;

}


</script>


<script type="text/javascript">
  $(document).ready(function(){
  $('#tablaGrupo').load('../componentes/tablaGrupos.php');

   $('#actualizarGrupo').click(function(){
       actualizardatos();
      });

   
  });

</script>


