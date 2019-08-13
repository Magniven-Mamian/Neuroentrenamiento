<?php
include_once '../controlador/EncuestaControlador.php';

$encuestasadministrador = EncuestaControlador::getEncuestasIdadministrador();


 ?>
 <div class="row">

 <div class="col col-md-12">
 	<br>
 	<br>
 	<h6>Encuesta hecha por el administrador</h6>


<?php 
foreach ($encuestasadministrador as $filas): 
        $id =$filas[0]."||".
           $filas[1]."||".
          $filas[2];



  ?>


<ul class="list-group">
  <li  class="list-group-item "><a href="encuesta_resolver_estudiante_form.php?idencuestaresolver=<?php echo $filas["id_encuesta"] ?>"><?php echo $filas["nombre_encuesta"] ?></a></li>
 
</ul>


<?php endforeach; ?>

</div>

<style>

    .card_pregunta{
        background-color: white;
        margin-bottom:8px;
        margin-left: 2px;
        margin-right: 2px;
        border-radius: 5px;
        padding: 5px;
    }

   

</style>



 <div class="col col-md-12">
 	<br>
 	<br>
 	<h6>Encuesta hecha por los profesores</h6>

 <?php if(isset($_POST['id_estudiante'])){

    $id= $_POST['id_estudiante'];
    $encuestagrupo=EncuestaControlador::getEncuestas($id);


 } ?>


 <?php 
   foreach ($encuestagrupo as $grupo) : ?>
   <ul class="list-group">

   <h6 class=" form-control-label"><?php echo $grupo["nombre"] ; ?></h6>
    
     <?php foreach (EncuestaControlador::getEncuestasnombreprofesor($grupo["id_grupo"]) as $nombreprofe) { ?>
       <div class="card_pregunta">
          
               <?php echo $nombreprofe["nombre"]; ?>
                 

                  <?php foreach (EncuestaControlador::getEncuestaslista($grupo["id_grupo"], $nombreprofe["id_profesor"]) as $nombreencuesta) { ?>
       <li  class="list-group-item ">
          
           <a href="encuesta_resolver_estudiante_form.php?idencuestaresolver=<?php echo $filas["id_encuesta"] ?>">    <?php echo $nombreencuesta["nombre_encuesta"]; ?></a>

                
                                      
            
       </li>
        <?php } ?>

                                      
            
       </div>
        <?php } ?>

  

   </ul>


 <?php endforeach;//cierra el foreach del grupo ?>

</div>




 </div>