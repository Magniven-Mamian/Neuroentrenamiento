<?php 

$id='';
if(isset($_GET['idencuesta'])){

  $id=$_GET['idencuesta'];
}
 

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


 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
 	<title>Encuesta</title>

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
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearPregunta();">

							<legend id="titulo">Nueva pregunta</legend>
							
							<input type="text" name="txtid_encuesta" id="txtid_encuesta" value="<?php echo $id ?>" hidden>
							<div class="form-group">
								<label for="txtNombrePregunta">Nombre de la pregunta</label>
								<input type="text" name="txtNombrePregunta" class="form-control" id="txtNombrePregunta" autofocus required placeholder="Ingresa nombre de la pregunta" value="<?php if(isset($txtNombrePregunta)) echo $txtNombrePregunta; ?>">
							</div>
						   <div class="form-group">
								<label for="txtTipoPregunta">Tipo pregunta de la pregunta</label>
								
                                   <select class="form-control" name="txtTipoPregunta"  id="txtTipoPregunta" >
                                          <option value="0">Única respuesta</option>
                                          <option value="1">Pregunta abierta</option>
                                          

                                     </select>
							</div>       
							
							<button type="submit" class="btn btn-success" id="crear_pregunta"> Agregar</button>
            <a href="" class="btn btn-primary">Listar preguntas</a>

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


<div class="modal fade" id="modalactualizarpregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-ms" role="document">
    <div class="modal-content  modal-lg">
      <div class="modal-header modal-lg">
        <h4 class="modal-title" id="myModalLabel"> Actualizar Pregunta </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">

  <form autocomplete="off">
             


             <input type="text" name="txtidpregunta" id="txtidpregunta" hidden>
              <div class="form-group">
                <label for="txtNombrePreguntaact" h>Nombre de la pregunta</label>
                <input type="text" name="txtNombrePreguntaact" class="form-control" id="txtNombrePreguntaact" autofocus required placeholder="Ingresa nombre de la pregunta">
              </div>
              <div class="form-group">
                <label for="txtTipoPreguntaact">Tipo pregunta de la pregunta</label>
                
                                   <select class="form-control" name="txtTipoPreguntaact"  id="txtTipoPreguntaact" >
                                          <option value="0">Única respuesta</option>
                                          <option value="1">Pregunta abierta</option>
                                          

                                     </select>
              </div>

              
              
              <!--$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre--->

</div>

    
        <div class="modal-footer">     
        <input type="submit" id="actualizarPregunta" class="btn btn-primary" data-dismiss="modal" value="actualizar pregunta">
        </form>
      </div>
    </div>
  </div>
</div>
</div>






 <div id="dlistapreguntas"></div>



   <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
   <script src="../funcionesJavascript/funcionesPreguntas.js" ></script> 

 
 </body>
 </html>


   <script type="text/javascript">

     function crearPregunta(){
  id_encuesta=$('#txtid_encuesta').val();
  nombrepregunta=$('#txtNombrePregunta').val();
  tipopregunta=$('#txtTipoPregunta').val();
  
  

  var datos='txtid_encuesta='+id_encuesta+'&txtNombrePregunta='+nombrepregunta+'&txtTipoPregunta='+tipopregunta;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_pregunta_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
          //  $('#tablaGrupoEstu').load('../componentes/tablaGrupoEstu.php');
            alertify.success('exitosos'+res);
             $('#txtNombrePregunta').val('');
             
               $(document).ready(function (){       
              vertablapreguntas();
              });


       }else{

        alertify.confirm('Agregar pregunta', ' el pregunta ya existe en la encuesta '+res,
         function(){alertify.error('el pregunta ya existe en la encuesta');}
         , function(){ alertify.error('el pregunta ya existe en la encuesta')});

       }
    }


  });

     return false;

}


</script>


<script type="text/javascript">
   $(document).ready(function (){
    
     $('#actualizarPregunta').click(function(){
      actualizardatosPregunta();
     
      });

    vertablapreguntas();


       
    
      
  });



</script>