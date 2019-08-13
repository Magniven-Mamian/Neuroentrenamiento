 <?php 
$id='';
if(isset($_GET['id'])){

  $id=$_GET['id'];
}

  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Asignación grupo profesor</title>
 	 <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
  

   <script src="estilos/js/jquery.min.js" ></script>
  <link href="estilos/select2/css/select2.min.css" rel="stylesheet" />
   <script src="estilos/select2/js/select2.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
 </head>
 <body >


 <a href="listaUsuariosProfesor.php">Lista de  profesores</a>


   <div class="container">

	<div class="starter-template">
		
		<div class="row">
			<div class="col-md-12 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearGrupoProfesor();">



							<legend>Asignación nuevo  grupo a Profesor</legend>
							
							
							<div  id="buscarGrupo">
								
							</div>

							<br>
							<br>
							<br>
							<input type="text" name="txtidprofesor" class="form-control" id="txtidprofesor" autofocus value="<?php echo $id ?>" hidden >
							<br>
  
							
							<button type="submit" class="btn btn-success" id="crear_grupoProfesor"> Agregar</button>
                            <a href=""   class="btn btn-primary"> Refrescar tabla</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>


</div>

<div id="listagrupoprofesor"></div>

 <script src="../funcionesJavascript/funcionesProfesor.js"></script>

 </body>
 </html>


 <script type="text/javascript">
  $(document).ready(function(){
 
   $('#buscarGrupo').load('../componentes/selectGrupo.php');
 
   //listagrupoestudiante


   var datos=$('#txtidprofesor').val();
            
           

           
            $.ajax({

            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoProfe.php',
             success:function(respuesta){
                 
               $('#listagrupoprofesor').html(respuesta);
           
             
             }


           });

  });

</script>




<script type="text/javascript">
	 function crearGrupoProfesor(){
	 	idprofesor=$('#txtidprofesor').val();
        idgrupo=$('#txtbuscargrupo').val();

        var datos='txtidprofesor='+idprofesor+'&txtbuscargrupo='+idgrupo;

         $.ajax({

            type:"POST",
            data:datos,
            url:'../funcionescrud/crear_asiggrupoProfe_logic.php',
             success:function(res){

             	if(res==1){
                 alertify.success("agregado exitosamente");



            var datos=$('#txtidprofesor').val();
            
           
             $.ajax({
      
            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoProfe.php',
             success:function(respuesta){
                 
               $('#listagrupoprofesor').html(respuesta);
           
             
             }


            });
            

             }else{
             	alertify.error("el profesor ya existe en le grupo");
             }
           
           }


           });
     
         
	 	return false;
	 }


</script>