<?php 

include '../controlador/user_session.php';
include '../controlador/UsuarioControlador.php';

$userSession = new UserSession();
$user = new UsuarioControlador();
$_SESSION['consultaopciones']=null;

if(isset($_SESSION['user'])){
    //echo "hay sesion";
   $user->setUser($userSession->getCurrentUser());
   $filas=$user->setUser($userSession->getCurrentUser());

    if ($filas->getPrivilegio()==2) {
          header('Location: vistaEstudiante.php');
    }
        
}else{
   header('Location: login.php');
}


$id='';
$id_encuesta='';
$nombrepregunta='';
if(isset($_GET['idpregunta'])&&isset($_GET['idencuesta'])&&isset($_GET["nombrepregunta"])){

  $id=$_GET['idpregunta'];
  $idencuesta=$_GET['idencuesta'];
  $nombrepregunta=$_GET["nombrepregunta"];

}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
  
      <link rel="stylesheet" href="estilos/css/bootstrap.min.css" >
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
      <?php 
       if($filas->getPrivilegio()==1): ?>
         <a class="navbar-brand" href="listaUsuarios.php">Lista de usuarios</a>
          <a class="navbar-brand" href="Encuestas.php">Encuestas</a>
       <?php  endif; ?>
      

       <?php 
       if($filas->getPrivilegio()==3): ?>
        <a class="navbar-brand" href="crear_encuesta_form.php">Encuestas</a>
       <?php  endif; ?>
      
       
      
    </ul>
  
    
    <form class="form-inline my-2 my-lg-0">
       <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuración</a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
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

    <h1><a href="asignacionpreguntaEncuesta_form.php?idencuesta=<?php echo $_GET['idencuesta'] ?>"><?php echo $_GET["nombrepregunta"]; ?></a></h1>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearOpcion();">

						<h1><legend id="titulo">Nueva opción</legend></h1>	
							
							<input type="text" name="txtid_pregunta" id="txtid_pregunta" value="<?php echo $id ?>" hidden>
							<div class="form-group">
								<label for="txtNombreOpcion">Nombre de la opción</label>
								<input type="text" name="txtNombreOpcion" class="form-control" id="txtNombreOpcion" autofocus required placeholder="Ingresa nombre de la opcion" value="<?php if(isset($txtNombreOpcion)) echo $txtNombreOpcion; ?>">
							</div>
						   
							<button type="submit" class="btn btn-success" id="crear_pregunta"> Agregar</button>
                            <a href="" class="btn btn-primary">Listar opciones</a>

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


<div class="modal fade" id="modalactualizaropcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar opción</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">
             


             <input type="text" name="txtid_preguntaact" id="txtid_preguntaact" >
              <div class="form-group">
                <label for="txtNombreOpcionactu">Nombre de la opción</label>
                <input type="text" name="txtNombreOpcionactu" class="form-control" id="txtNombreOpcionactu" autofocus required placeholder="Ingresa  opcion">
              </div>
            

              
              
              <!--$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre--->

</div>

    
        <div class="modal-footer">     
        <input type="submit" id="actualizaropcion" class="btn btn-primary" data-dismiss="modal" value="actualizar pregunta">
        </form>
      </div>
    </div>
  </div>
</div>
</div>


<div id="componentetablaopciones"></div>

   <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>

<script src="../funcionesJavascript/funcionesPreguntas.js"></script>

</body>
</html>



<script type="text/javascript">
  $('#actualizaropcion').click(function(){
       actualizardatosOpcion();
      });


  

   $('#componentetablaopciones').load('../componentes/tablaOpciones.php');
	function  crearOpcion() {

      idpregunta=$('#txtid_pregunta').val();
      nombreopcion=$('#txtNombreOpcion').val();


      var datos='txtid_pregunta='+idpregunta+'&txtNombreOpcion='+nombreopcion;
		
           $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_opciones_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
          
            alertify.success('exitoso'); 
             $(document).ready(function (){
              vertablaOpciones();
              });

       
      }else{
       	alertify.error('no se pudo realizar la accion'); 
       }
    }


  });
    return false;
		// body...
	}

</script>



<script type="text/javascript">
   $(document).ready(function (){
     vertablaOpciones();
  });



</script>