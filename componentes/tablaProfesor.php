<?php 
include '../controlador/ProfesorControlador.php';
include '../helps/helps.php';
session_start();
?> 


<div  id=""  class="row">
	<div id="tablaProf" class="col-sm-12">

		<h2> tabla de Profesor </h2> 
      
   
    <div class="col-sm-4"><a href="crear_profesor_form.php">crear Profesor</a></div>  

		<table  class="table table-hover">
   <thead>
                <tr>
                  <th>cedula</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Genero</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>profesion</th>
                  <th>Privilegio</th>
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>

  	<?php

$usuario="";

 if(isset($_SESSION['consulta'])){
       if ($_SESSION['consulta'] > 0) {

             $id= $_SESSION['consulta'];

             $usuario = ProfesorControlador::getProfesorId($id);
        }else{

         $usuario=ProfesorControlador::getProfesor();
        }

 }else{
      $usuario=ProfesorControlador::getProfesor();
 }


 
    foreach ($usuario as $filas){ 
       $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5]."||".
              $filas[6]."||".
              $filas[7]."||".
              $filas[8]."||".
              $filas[9]."||".
              $filas[10]."||".
              $filas[11]."||".
              $filas[12];

?>      

<tr>
                  <td><?php echo $filas["cedula"] ?></td>
                  <td><?php echo $filas["nombre"] ?></td>
                  <td><?php echo $filas["apellidos"] ?></td>
                  <td><?php echo getGenero($filas["genero"]) ?></td>
                  <td><?php echo $filas["email"] ?></td>
                  <td><?php echo $filas["telefono"] ?></td>
                  <td><?php echo $filas["profesion"] ?></td>
                  <td><?php echo getPrivilegio($filas["privilegio"])?></td>
                  <td>
                    <a class="btn btn-warning glyphicon glyphicon-pencil " id="actualizarProf" data-toggle="modal" data-target="#modalactualizar" onclick="obteneridprofesor(
                    '<?php  echo $id ?>')">actualizar</a>

                   <!----- es para eliminar el  profesor 
                      <a class="btn btn-danger glyphicon glyphicon-remove" onclick="validarprofesor('<?php echo $filas["id_usuario"] ?>','<?php echo $filas['id_profesor']?>', '<?php echo $filas['nombre'].'  '.$filas['apellidos'] ?>')">eliminar</a>


                        ------->


                         <a href="asignaciongrupoprofe_form.php?id=<?php echo $filas["id_profesor"] ?>" class="btn btn-primary">asignar grupo</a>


                  </td>
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		




	</div>
</div>