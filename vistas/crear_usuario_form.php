

     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Crear</title>
         
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
						<form  autocomplete="off" method="POST" role="form" onsubmit=" return enviar();">

							<legend>Crear nuevo usuario</legend>
							
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

							<button type="submit" class="btn btn-success"> Agregar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

 <?php include 'partials/footer.php';?>

<script>
	
function enviar(){

 cedula=$('#txtCedula').val();
  nombre=$('#txtNombre').val();
  apellido=$('#txtApellidos').val();
  correo=$('#txtEmail').val();
   password=$('#txtPassword').val();
  fecha =$('#txtFecha_nacimiento').val();
  telefono=$('#txtTelefono').val();


     
 var datos='txtCedula='+cedula+'&txtNombre='+nombre+'&txtApellidos='+apellido+'&txtEmail='+correo+'&txtFecha_nacimiento='+fecha+'&txtTelefono='+telefono+'&txtPassword='+password;

  $.ajax({

  	type:'POST',
  	url:'crear_usuario_logic.php',
  	data:datos,
  	success:function(res){
  		
         
        if(res==1){
   
           alertify.confirm('Registro Usuario', 'Registro exitoso', function(){ alertify.success('exitoso') }
                , function(){ alertify.error('Cerrar')});

        cedula=null;


       }else{
       	alertify.confirm('Registro Usuario', 'Usuario ya existe', function(){ alertify.success('Documento o correo ya existen') }
                , function(){ alertify.error('Cerrar')});
       }
  	}


  });
  return false;

 }


</script>
