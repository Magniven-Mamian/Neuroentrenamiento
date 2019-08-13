<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <?php include 'partials/head.php'; ?>
</head>
<body>
<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form  autocomplete="off" method="POST" role="form" onsubmit="return crearEstudiante();">

							<legend>Crear nuevo estudiante</legend>
							
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

                                 

                                  <label for="txtGenero">Ingrese Genero</label>  
                                   <select class="form-control" name="txtGenero"  id="txtGenero" >

                                          <option value="1">Masculino</option>
                                          <option value="2">Femenino</option>

                                     </select>
                                 
                                       
                                   

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
								<label for="txtPassword">Password</label>
								<input type="password" name="txtPassword" class="form-control" required id="txtPassword" placeholder="****" value="<?php if(isset($txtPassword)) echo $txtPassword; ?>">
							</div>
							 </div>
                          <div class="form-group">
                            <label for="txtSemestre">Semestre</label>
                               <input type="text" name="txtSemestre" class="form-control" required id="txtSemestre" placeholder="ingresa semestre" value="<?php if(isset($txtSemestre)) echo $txtSemestre; ?>">
                           </div>

							<button type="submit" class="btn btn-success" id="crear_estudiante"> Agregar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php include 'partials/footer.php';?>

  <script type="text/javascript">
     function crearEstudiante(){
  cedula=$('#txtCedula').val();
  nombre= $('#txtNombre').val();
  apellidos= $('#txtApellidos').val();
  genero=$('#txtGenero').val();
  fecha_nacimiento=$('#txtFecha_nacimiento').val();
  telefono=$('#txtTelefono').val();
  correo=$('#txtEmail').val();
  password=$('#txtPassword').val();
  semestre= $('#txtSemestre').val();

  var datos='txtCedula='+cedula+'&txtNombre='+nombre+'&txtApellidos='+apellidos+'&txtGenero='+genero+'&txtFecha_nacimiento='+fecha_nacimiento+'&txtTelefono='+telefono+'&txtEmail='+correo+'&txtPassword='+password+'&txtSemestre='+semestre;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/crear_estudiante_logic.php',
    data:datos,
    success:function(res){
      
         
        if(res==1){
   
           alertify.confirm('Registro Usuario', 'Registro exitoso', function(){ alertify.success('exitoso') }
                , function(){ alertify.error('Cerrar')});

           $('#txtCedula').val('');
           $('#txtNombre').val('');
           $('#txtApellidos').val('');
           $('#txtGenero').val('')
           $('#txtFecha_nacimiento').val('');
           $('#txtTelefono').val('');
           $('#txtEmail').val('');
           $('#txtPassword').val('');
           $('#txtSemestre').val('');

 

       }else{
        alertify.confirm('Registro Usuario', 'Usuario ya existe', function(){ alertify.success('Documento o correo ya existen') }
                , function(){ alertify.error('Cerrar')});
       }
    }


  });
     return false;

}


</script>


