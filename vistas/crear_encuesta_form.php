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
   }


    $_SESSION['userid'] = $filas2->getId();

}else{
header('Location: login.php');
}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>crear encuesta</title>
 		<title></title>
	 <?php include 'partials/head.php'; ?>
 </head>
 <body>

<header>
  <div class="navbar navbar-expand-md navbar-dark bg-dark">

     <?php 
        if($filas2->getPrivilegio()==3):
       ?>
         <a class="navbar-brand" href="vistaProfesor.php">Inicio</a>

       <?php  endif ?>
      <?php 
        if($filas2->getPrivilegio()==1):
       ?>
        <a class="navbar-brand" href="vistaAdmin.php">Inicio</a>

       <?php  endif; ?>
   

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <?php 
        if($filas2->getPrivilegio()==1):

       ?>
        <a class="navbar-brand" href="listaUsuarios.php">Lista de usuarios</a>

      <?php endif; ?>

      
      

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
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearEncuesta();">

							<legend id="titulo">Crear nueva encuesta</legend>
							
							
							<div class="form-group">
								<label for="txtNombreEncuesta">Nombre de la encuesta</label>
								<input type="text" name="txtNombreEncuesta" class="form-control" id="txtNombreEncuesta" autofocus required placeholder="Ingresa nombre de la encuesta" value="">
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


<div class="modal fade" id="modalactualizarencuesta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar encuesta </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">
             
              <input type="text" name="txt_idencuesta" class="form-control" required id="txt_idencuesta"  value="<?php if(isset($txt_idencuesta)) echo $txt_idencuesta; ?>" >

           
			 <div class="form-group">
				<label for="txtNombre">Nombre de la encuestas</label>
				<input type="text" name="txtNombre" class="form-control" id="txtNombre" autofocus required placeholder="Ingresa nombre grupo" value="<?php if(isset($txtNombre)) echo $txtNombre; ?>">
			</div>

          
</div>


        <div class="modal-footer">     
        <input type="submit" id="actualizarEncuesta" class="btn btn-primary" data-dismiss="modal" value="actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
</div>







<div id="dtablagrupo"></div>

 <?php include 'partials/footer.php';?>
 <script src="../funcionesJavascript/funcionesEncuestas.js"></script>


 </body>
 </html>

<script type="text/javascript">
	function crearEncuesta(){
  nombre= $('#txtNombreEncuesta').val();
 
 
  var datos='txtNombreEncuesta='+nombre+'&txtid_usuario='+'<?php echo $_SESSION['userid']; ?>';

   $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_encuesta_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
   
           alertify.confirm('Registro grupo', 'Registro exitoso', function(){ alertify.success('exitoso') }
                , function(){ alertify.error('Cerrar')});
            $('#tablaEncuesta').load('../componentes/tablaEncuestas.php');
           
           $('#txtNombreEncuesta').val('');
       


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

  	//es para aparecer en el div
  $('#dtablagrupo').load('../componentes/tablaEncuestas.php');

   $('#actualizarEncuesta').click(function(){
       actualizardatos();
      });
  


  
  });

</script>
