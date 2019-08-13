<?php 
include '../controlador/EncuestaControlador.php';
 
$preguntas=EncuestaControlador::getNombrePregunta();


$i=0;

 ?>


<style type="text/css">
  
  th {
    border: red 5px solid;
  
  }

</style>

<div id="tablaPreguntasT">


	<div class="col-sm-12">

		<h2>Lista de  preguntas</h2> 

      <table>
  
                    
         

               <?php foreach ($preguntas as $preg):  ?> 

              
                 <tr><th><?php echo $preg["nombre_pregunta"] ?></th>
                  
                 
                 
              
            
                <?php  foreach (EncuestaControlador::getRespuesta($preg["id_pregunta"]) as $res):  
                 ?>
                  
                            
             <td> <?php echo $res["valor"] ?>
                 </td>
                
                <?php endforeach; ?>
 </tr>
             
                 
              

             <?php endforeach; ?>



   </table>
