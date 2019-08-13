<?php 
include '../controlador/GrupoControlador.php';

session_start();
 ?>

 <div class="col-sm-12" id="tablaGrupo">

 <h2> tabla de Grupo </h2> 
      
   
  

		<table  class="table table-hover">
   <thead>
                <tr>
                  
                  <th>Nombre grupo</th>
                  <th>Fecha creacion</th>
                  <th>Accion</th>
                </tr>
    </thead>
<?php 

$grupos = GrupoControlador::getGrupos();
foreach ($grupos as $filas){ 
        $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];


 ?>

    <tr>          
                  <td><?php echo $filas["nombre"] ?></td>
                  <td><?php echo $filas["fecha_creacion"] ?></td>
                  
                  <td>
                    <a class="btn btn-warning glyphicon glyphicon-pencil " id="actualizargrupo"  data-toggle="modal" data-target="#modalactualizargrupo"  onclick="obteneridgrupo(
                    '<?php  echo $id ?>')">actualizar</a>

                      <a class="btn btn-danger glyphicon glyphicon-remove" onclick="validarGrupo('<?php echo $filas[0] ?>','<?php echo $filas[1]?>')">eliminar</a> 

                  </td>
    </tr>
     <?php } ?>
   
    
   
      </tbody>
   </table>

</div>