<?php 
include '../controlador/EstudianteControlador.php';
include '../helps/helps.php';
  session_start();
?> 


<div    class="row">
	<div id="tablaEst" class="col-sm-12">

		<h2> tabla de Estudiantes </h2> 
      
   
    <div class="col-sm-4"><a href="crear_estudiante_form.php">crear estudiante</a></div>  

		<table  class="table table-hover">
   <thead>
                <tr>
                  <th>cedula</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Genero</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>semestre</th>
                  <th>Privilegio</th>
                  <th>estado</th>
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>





  	<?php
  
   $usuario="";



  if(isset($_SESSION['consulta'])){

            if ($_SESSION['consulta'] > 0) {

             $id= $_SESSION['consulta'];

                    
             $usuario = EstudianteControlador::getEstudiantesId($id);

        }else{
           $usuario = EstudianteControlador::getEstudiantes();
        }

}else{
   $usuario = EstudianteControlador::getEstudiantes();
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
              $filas[12].'||'.
              $filas[13];

?>      

<tr>
                  <td><?php echo $filas["cedula"] ?></td>
                  <td><?php echo $filas["nombre"] ?></td>
                  <td><?php echo $filas["apellidos"] ?></td>
                  <td><?php echo getGenero($filas["genero"]) ?></td>
                  <td><?php echo $filas["email"] ?></td>
                  <td><?php echo $filas["telefono"] ?></td>
                  <td><?php echo $filas["semestre"] ?></td>
                  <td><?php echo getPrivilegio($filas["privilegio"])?></td>
                  <td><a href="" data-toggle="modal" data-target="#modalactualizarEstado"  onclick="obteneridestudiante(
                    '<?php  echo $id ?>')"><?php echo getEstado($filas["estado"]) ?></a> </td>

                  <td>
                    <a class="btn btn-warning glyphicon glyphicon-pencil " id="actualizarEst" data-toggle="modal" data-target="#modalactualizar" onclick="obteneridestudiante(
                    '<?php  echo $id ?>')">actualizar</a>


                   <!----- es para eliminar el estudiante

                      <a  class="btn btn-danger glyphicon glyphicon-remove" onclick="validarEstudiante('<?php echo $filas["id_usuario"] ?>','<?php echo $filas['id_estudiante']?>', '<?php echo $filas['nombre'].'  '.$filas['apellidos'] ?>')">eliminar</a> 

                  ------->

                  

                     <a href="asignaciongrupoest_form.php?id=<?php echo $filas["id_estudiante"] ?>" class="btn btn-primary">asignar grupo</a>


                    

                  </td>


     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		




	</div>
</div>




