<?php 
include '../controlador/EncuestaControlador.php';
 $idencuesta='';
session_start();

$id_usuario=$_SESSION['userid'];
 ?>




 <div class="col-sm-12" id="tablaEncuesta">

 <h2> tabla de encuesta </h2> 
      
   
  

		<table  class="table table-hover">
   <thead>
                <tr>
                  
                  <th>Nombre encuesta</th>
                  <th>Fecha creacion</th>
                  <th>Accion</th>
                </tr>
    </thead>
<?php 

$encuestas = EncuestaControlador::getEncuesta($id_usuario);
foreach ($encuestas as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];


 ?>

    <tr>          
                  <td><a href="asignacionpreguntaEncuesta_form.php?idencuesta=<?php echo $filas[0] ?>"><?php echo $filas["nombre_encuesta"] ?></a></td>
                  <td><?php echo $filas["fecha_creacion"] ?></td>
                  
                  <td>
                   <a href="vista_admin_encuesta_form.php?idencuesta=<?php echo $filas[0] ?>&nombre_encuesta=<?php echo $filas["nombre_encuesta"] ?>" class="btn btn-primary">vista previa</a> 

                    <button class="btn btn-warning glyphicon glyphicon-pencil" id="actualizargrupo"  data-toggle="modal" data-target="#modalactualizarencuesta"  onclick="obteneridencuesta(
                    '<?php  echo $id ?>')">actualizar</button>

                      <button class="btn btn-danger glyphicon glyphicon-remove" onclick="validarEncuesta('<?php echo $filas[0];
                       

                       ?>','<?php echo $filas[1]?>')">eliminar</button> 


                       




                  </td> 
    </tr>
     <?php } ?>
    </tbody>
   </table>

</div>

