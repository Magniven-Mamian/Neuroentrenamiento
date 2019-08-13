<?php 
include '../controlador/EncuestaControlador.php';
$id_encuesta="";



if(isset($_POST["id_encuesta"])):
   

   $id_encuesta=$_POST["id_encuesta"];


$encuesta = EncuestaControlador::getEncuestaId($id_encuesta);
$preguntas=EncuestaControlador::getPregunta($id_encuesta);
 ?>
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
 <div class="card" style="background-color: rgba(0,0,0,.03);">
 <strong><?php echo $encuesta[0]["nombre_encuesta"]; ?></strong> 
 

 <header>
    


 </header>


 <?php foreach ($preguntas as $pregunta) { ?>
  

 

                <?php if ($pregunta["tipo"] == 0) { ?>
                    <div class="row form-group card_pregunta">
                        <div class="col col-md-9"><label class=" form-control-label"><?php echo $pregunta["nombre_pregunta"] ; ?></label></div>
                        <div class="col col-md-3">
                            <div class="form-check"  id="<?php echo $pregunta["id_pregunta"]; ?>">

                                <?php foreach (EncuestaControlador::getOpcionesId($pregunta["id_pregunta"]) as $opcion) { ?>
                                    <div class="radio">

                                        <label class="form-check-label ">
                                            <input type="radio"  name="radios<?php echo $pregunta["id_pregunta"]; ?>" value="<?php echo $opcion["nombreopcion"]; ?>" class="form-check-input radio_input"  data-id="<?php echo $pregunta["id_pregunta"]; ?>" data-requerido="<?php echo $pregunta["requerido"]; ?>"  required><?php echo $opcion["nombreopcion"]; ?>
                                        </label>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>

                  <?php if ($pregunta["tipo"] == 1) { ?>

                    <div class="row form-group  card_pregunta">
                        <div class="col col-md-12"><label class=" form-control-label"><?php echo $pregunta["nombre_pregunta"]; ?></label></div>
                        <div class="col col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-commenting-o"></i></div>
                                <input  class="form-control text_input" type="text" data-id="<?php echo $pregunta["id_pregunta"]; ?>" data-requerido="<?php echo $pregunta["requerido"]; ?>" required>
                            </div>
                        </div>
                    </div>
                <?php } ?>





 <?php }?>
 </div> 

 <?php endif; ?>


