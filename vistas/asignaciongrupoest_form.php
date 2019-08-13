<?php 

$id='';
if(isset($_GET['id'])){

  $id=$_GET['id'];
}
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
 	<title>Asignación grupo</title>
 	 <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
  

   <script src="estilos/js/jquery.min.js" ></script>
  <link href="estilos/select2/css/select2.min.css" rel="stylesheet" />
   <script src="estilos/select2/js/select2.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
 </head>
 <body >


 <a href="listaUsuariosEstudiantes.php">Lista de estudiantes</a>


   <div class="container">

	<div class="starter-template">
		
		<div class="row">
			<div class="col-md-12 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearasignacionGrupoEst();">



							<legend>Asignación nuevo  grupo a estudiante</legend>
							
							
							<div  id="buscarGrupo">
								
							</div>

							<br>
							<br>
							<br>
							<input type="text" name="txtidestudiante" class="form-control" id="txtidestudiante" autofocus value="<?php echo $id ?>" hidden >
							<br>
  
							
							<button type="submit" class="btn btn-success" id="crear_grupoEst"> Agregar</button>
               <a href="asignaciongrupoest_form.php?id=<?php echo $id ?>"   class="btn btn-primary"> Refrescar tabla</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>


</div>

<div id="listagrupoestudiante"></div>



 <script src="../funcionesJavascript/funcionesEstudiante.js"></script>
 </body>
 </html>


   <script type="text/javascript">
  $(document).ready(function(){
 
   $('#buscarGrupo').load('../componentes/selectGrupo.php');
   $('#listagrupoestudiante').load('../componentes/tablaGrupoEstu.php');
   //listagrupoestudiante

   
  });

</script>

  <script type="text/javascript">
     function crearasignacionGrupoEst(){
  idestudiante=$('#txtidestudiante').val();
  idgrupo=$('#txtbuscargrupo').val();
  
  

  var datos='txtidestudiante='+idestudiante+'&txtbuscargrupo='+idgrupo;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_asiggrupoEstu_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
            $('#listagrupoestudiante').load('../componentes/tablaGrupoEstu.php');
            alertify.success('exitosos'); 

             var datos=$('#txtidestudiante').val();
            
           

           
            $.ajax({

            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoEstu.php',
             success:function(respuesta){
                 
               $('#listagrupoestudiante').html(respuesta);
           
             
             }


           });

       


       }else if(res==2){

        alertify.confirm('Agregar al grupo', ' el usuario ya existe en el grupo ',
 function(){alertify.error('el usuario ya existe en el grupo');}
 , function(){ alertify.error('el usuario ya existe en el grupo')});

       }
    }


  });

     return false;

}


</script>



<script type="text/javascript">
   $(document).ready(function (){
    
     

      var datos=$('#txtidestudiante').val();
            
           

           
            $.ajax({

            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoEstu.php',
             success:function(respuesta){
                 
               $('#listagrupoestudiante').html(respuesta);
           
             
             }


           });
      
  });

</script>






