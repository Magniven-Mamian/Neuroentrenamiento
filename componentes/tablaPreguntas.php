<?php 
include '../controlador/PreguntaControlador.php';
include '../helps/helps.php';
session_start();    
$id2='';

if(isset($_POST["id_encuesta"])){
  $id2=$_POST["id_encuesta"];
//  echo $id2;
}


 ?>




<div id="tablaPreguntasT">


	<div class="col-sm-12">

		<h2>Lista de  preguntas</h2> 
      
  
		<table  class="table table-hover">
   <thead>
                <tr>                  
                  <th>Nombre pregunta</th>
                  <th>Tipo de pregunta</th>                  
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>

  	<?php
  
   $pregunta="";

   echo $id2;
 
   $pregunta = PreguntaControlador::getPregunta($id2);




    foreach ($pregunta as $filas){ 
       $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5]."||".
              $filas[6]."||".
              $filas[7]."||".
              $filas[8];

?>      

<tr>
                  <td>

                      <!--para la opcion de pregunta cerrada--->
                    <?php if($filas["tipo"]==0): ?>
        
                   <a href="asignacion_opcion_pregunta_form.php?idpregunta=<?php echo $filas["id_pregunta"] ?>&idencuesta=<?php echo $filas["id_encuesta"] ?>&nombrepregunta=<?php echo $filas["nombre_pregunta"] ?>"><?php echo $filas["nombre_pregunta"] ?></a>
                   <?php endif; ?>

                     <!--para la opcion de pregunta abierta--->
                    <?php if($filas["tipo"]==1): ?>

                   <label><?php echo $filas["nombre_pregunta"] ?></label>
                   <?php endif; ?>
                    

                  </td>
                  <td><?php echo getTipopregunta($filas["tipo"]) ?></td>


                  <td>
                        <a class="btn btn-warning glyphicon glyphicon-pencil " id="actualizarPregunta" data-toggle="modal" data-target="#modalactualizarpregunta" onclick="obteneridpregunta('<?php echo $id; ?>',)">actualizar</a>   
                        <a class="btn btn-danger" href="#">eliminar</a>
                        
                     
                  </td>




     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		


	</div>
</div>




