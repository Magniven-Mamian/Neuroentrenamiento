
<?php

include_once '../controlador/EstudianteControlador.php';
include_once '../controlador/user_session.php';
include_once '../controlador/UsuarioControlador.php';
include_once  '../controlador/ActividadfisicaControlador.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$estudiante = new EstudianteControlador();
$user=new UsuarioControlador();
$actividad_fisica=new ActividadfisicaControlador();
$filas=null;

$cedula='';
$privilegio=null;
$nombre=null;
$apellidos=null;
$id=null;




if(isset($_SESSION['user'])){
  
  
$estsesion=$userSession->getCurrentUser();

$filas= $estudiante->setUserEstudiante($userSession->getCurrentUser());
foreach ($filas as $f) {
  # code...
  $id=$f['id_estudiante'];
  $cedula=$f['cedula'];
  $nombre=$f['nombre'];
  $apellidos=$f['apellidos'];

}

$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());
$filas= $user->setUser($userSession->getCurrentUser());

if ($filas->getPrivilegio()==1) {
      header('Location: vistaAdmin.php');
}else if ($filas->getPrivilegio()==3) {
           # code...
      header('Location: vistaProfesor.php');
}

}else{
header('Location: login.php');
}
?>
 <?php echo $id ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Neuroentrenamiento</title>
         
        <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
    </head>
   <body>
<style type="text/css">



#register_form fieldset:not(:first-of-type) {
display: none;
}

</style>







<!----si  ya ha realizado la encuesta---->
<?php  if($actividad_fisica->userExistsActividadFisica($id)){
 ?>

   <div class="container">
   <div class="jumbotron mt-3">
    <h1>usted ya realizzo la encuesta</h1>


      <div class="navbar-header text-center">
   
   <img style="max-width:100px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/autoestima.jpg"> ACTIVIDAD FÍSICA
    
 
 

   </div>




    <a class="btn btn-lg btn-primary" href="vistaEstudiante.php" role="button">Realizar más encuestas &raquo;</a>
  </div>
</div>

<!----si no ha realizado la encuesta---->
<?php 
}else{

 ?>

<div class="container">
<h2>ACTIVIDAD FÍSICA</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="alert alert-success hide"></div>
<form id="register_form" name="register_form" novalidate action="../funcionescrud/crear_actividadfisica_logic.php" method="post">
<fieldset>
<h2>PREGUNTA:</h2>
<div class="form-group" id="pregunta">
</div>
<input type="button" class="next1 btn btn-info" value="Next"/>
</fieldset>

</fieldset>
<fieldset>
<h2></h2>
<div class="form-group" id="desplazarse">
</div>

<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" class="next2 btn btn-info" value="Next"/>
</fieldset>

<fieldset>
<h2>TIEMPO LIBRE</h2>
<div class="form-group" id="tiempolibre">
</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" class="next3 btn btn-info" value="Next"/>
</fieldset>

<fieldset>
<h2> SECCIÓN PRINCIPAL: Actividad física (en el tiempo libre) sigue.</h2>
<div class="form-group" id="seccionprincipal">
</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" class="next4 btn btn-info" value="Next"/>
</fieldset>

<fieldset>
<h2> COMPORTAMIENTO</h2>
<div class="form-group" id="comportamiento">
</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" class="next5 btn btn-info" value="Next"/>
</fieldset>

<fieldset>
<h2>Desea guardar la información</h2>
<div class="form-group">
  <div id="bienvenido"></div>
<label>Si esta seguro de guardar los datos de le aceptar</label>

 <label><input type="checkbox" name="validar_checkbox"  id="validar_checkbox">acepto condiciones y renstricicones</label> 
<label>Si está seguro de guardar los datos seleccione aceptar</label>

</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="submit" name="submit" class="submit btn btn-success" value="Aceptar" />
</fieldset>
</form>



 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>


<script type="text/javascript">
   $(document).ready(function(){
   var current = 1,current_step,next_step,steps;
   steps = $("fieldset").length;

  $(".next1").click(function(){
   var input_radio1=document.register_form.RadioButton1;
   var input_radio2=document.register_form.RadioButton2;


  var diaindexintensas= document.getElementById("diasintensas").selectedIndex;
  var diasintensasval=document.getElementById("diasintensas").options[diaindexintensas].value;
  //alert(diasintensasval);

  var diaindexmoderado= document.getElementById("diasmoderado").selectedIndex;
  var diasmoderadoval=document.getElementById("diasmoderado").options[diaindexmoderado].value;
 // alert(diasmoderadoval);


  var horasindexintensas= document.getElementById("horaintensas").selectedIndex;
  var horaintensasval=document.getElementById("horaintensas").options[horasindexintensas].value;
  //alert(horaintensasval);

  var minindexintensas= document.getElementById("minintensas").selectedIndex;
  var minintensasval=document.getElementById("minintensas").options[minindexintensas].value;
  //alert(minintensasval);

  var minindexmoderados= document.getElementById("minutosmoderados").selectedIndex;
  var minimoderadosval=document.getElementById("minutosmoderados").options[minindexmoderados].value;

  var horasindexmoderada= document.getElementById("horasmoderada").selectedIndex;
  var horasmoderadaval=document.getElementById("horasmoderada").options[horasindexmoderada].value;
  //alert(horasmoderadaval);
     
  var r1=0,r2=0,seldi=0,seldm=0, seltiempointenso=0, seltiempomoderado=0;
  //para el primer input
for(x=0;x<input_radio1.length;x++){
  if(input_radio1[x].checked==true){
  r1=1;
   }
}
//para el segundo radioinput
for(x=0;x<input_radio2.length;x++){
  if(input_radio2[x].checked==true){
  r2=1;
   }
}

if(diasintensasval!=0){
  seldi=1;
}

if(diasmoderadoval!=0){
  seldm=1;
}
if(horaintensasval==0 && minintensasval==0){
  alertify.error("debe seleccionar un tiempo valido");
}else if(horaintensasval!=0 || minintensasval!=0){
seltiempointenso=1;
}

if(horasmoderadaval==0 && minimoderadosval==0){
  alertify.error("debe seleccionar un tiempo valido");
}else if(horasmoderadaval!=0 || minimoderadosval!=0){
seltiempomoderado=1;
}
  if(r1==0 || r2==0 ||seldi==0 ||seldm==0 ||seltiempointenso==0 ||seltiempomoderado==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
  error_message="";
$('.alert-success').removeClass('hide').html(error_message);
current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
 }
  });

  $(".next2").click(function(){

  var input_radio3=document.register_form.RadioButton3;

  var diascaminaindex= document.getElementById("diascamina").selectedIndex;
  var diascaminasval=document.getElementById("diascamina").options[diascaminaindex].value;

  var horacaminadoindex= document.getElementById("horacaminado").selectedIndex;
  var horacaminadoval=document.getElementById("horacaminado").options[horacaminadoindex].value;

  var mincaminadoindex= document.getElementById("minutosmoderados").selectedIndex;
  var mincaminadoval=document.getElementById("minutosmoderados").options[mincaminadoindex].value;

    var r3=0, diascam=0, horacam=0, mincam=0, selhoracamin=0;

    for(x=0;x<input_radio3.length;x++){
  if(input_radio3[x].checked==true){
  r3=1;
   }
}

if(diascaminasval!=0){
  diascam=1;
}

if(horacaminadoval==0 && mincaminadoval==0){
  alertify.error("debe seleccionar un tiempo valido");
}else if(horacaminadoval!=0 || mincaminadoval!=0){
selhoracamin=1;
}

  if(r3==0, diascam==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
  error_message="";
$('.alert-success').removeClass('hide').html(error_message);
current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
 }
  });

 
    $(".next3").click(function(){
   
  var input_radio4=document.register_form.RadioButton4;

  var diasdeporteindex= document.getElementById("diasdeporte").selectedIndex;
  var diasdeporteval=document.getElementById("diasdeporte").options[diasdeporteindex].value;

  var horadeporteindex= document.getElementById("horadeporte").selectedIndex;
  var horadeporteval=document.getElementById("horadeporte").options[horadeporteindex].value;

  var mindeporteindex= document.getElementById("mindeporte").selectedIndex;
  var mindeporteval=document.getElementById("mindeporte").options[mindeporteindex].value;

    var r4=0, diasdeporte=0, horadeporte=0, mindeporte=0, selhoradeporte=0;

    for(x=0;x<input_radio4.length;x++){
  if(input_radio4[x].checked==true){
  r4=1;
   }
}

if(diasdeporteval!=0){
  diasdeporte=1;
}

if(horadeporteval==0 && mindeporteval==0){
  alertify.error("debe seleccionar un tiempo valido");
}else if(horadeporteval!=0 || mindeporteval!=0){
selhoradeporte=1;
}

  if(r4==0, diasdeporte==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
  error_message="";
$('.alert-success').removeClass('hide').html(error_message);
current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);

 }
  });

      $(".next4").click(function(){
    var input_radio5=document.register_form.RadioButton5;

  var diasactividadesindex= document.getElementById("diasactividades").selectedIndex;
  var diasactividadesval=document.getElementById("diasactividades").options[diasactividadesindex].value;

  var horaactidadesindex= document.getElementById("horaactidades").selectedIndex;
  var horaactidadesval=document.getElementById("horaactidades").options[horaactidadesindex].value;

  var minactidadesindex= document.getElementById("minactidades").selectedIndex;
  var minactidadesval=document.getElementById("minactidades").options[minactidadesindex].value;

    var r5=0, diasactividades=0, horaactividades=0, minactidades=0, selhoraactividades=0;

    for(x=0;x<input_radio5.length;x++){
  if(input_radio5[x].checked==true){
  r5=1;
   }
}

if(diasactividadesval!=0){
  diasactividades=1;
}

if(horaactidadesval==0 && minactidadesval==0){
  alertify.error("debe seleccionar un tiempo valido");
}else if(horaactidadesval!=0 || minactidadesval!=0){
selhoraactividades=1;
}

  if(r5==0, diasactividades==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
  error_message="";
$('.alert-success').removeClass('hide').html(error_message);
current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
 }
  });
        $(".next5").click(function(){

  var horasentadoindex= document.getElementById("horasentado").selectedIndex;
 var horasentadoval=document.getElementById("horasentado").options[horasentadoindex].value;
 console.log(horasentadoval);

  //var minsentadoindex= document.getElementById("minsentado").selectedIndex;
  //var minsentadoval=document.getElementById("minsentado").options[minsentadoindex].value;

  var horasentado=0, minsentado=0, selhorasentado=0;

  error_message="";
$('.alert-success').removeClass('hide').html(error_message);
current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
 
  });

$(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }


// Handle form submit and validation
$( "#register_form" ).submit(function(event) {
var error_messages = 'faltan datos por seleccionar';
var elemento_checkbox=document.register_form.validar_checkbox.checked;


if(elemento_checkbox==false){
  $('.alert-success').removeClass('hide').html(error_messages);
  return false;

}else{
  return true;
}


});



  
});  




</script>


<script type="text/javascript">
   $(document).ready(function(){
   $('#pregunta').load('../componentes/componentesActividadFisica/pregunta.php');
    $('#desplazarse').load('../componentes/componentesActividadFisica/desplazarse.php');
    $('#tiempolibre').load('../componentes/componentesActividadFisica/tiempolibre.php');
    $('#seccionprincipal').load('../componentes/componentesActividadFisica/seccionprincipal.php');
    $('#comportamiento').load('../componentes/componentesActividadFisica/comportamiento.php');
     $('#bienvenido').load('../componentes/idPersona.php');

  });
</script>


<!----si no ha realizado la encuesta---->
<?php 
}//cierra el if

 ?>