<?php

include_once '../controlador/EstudianteControlador.php';
include_once '../controlador/user_session.php';
include_once  '../controlador/MotivacionEducativaControlador.php';
include_once '../controlador/UsuarioControlador.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$estudiante = new EstudianteControlador();
$user=new UsuarioControlador();

$motivacion=new MotivacionEducativaControlador();
$filas=null;

$cedula='';
$privilegio=null;
$nombre=null;
$apellidos=null;
$id=null;




if(isset($_SESSION['user'])){
  
  
$a=$userSession->getCurrentUser();

$filas= $estudiante->setUserEstudiante($userSession->getCurrentUser());
foreach ($filas as $f) {
  # code...
  $privilegio= $f['privilegio'];
  $id=$f['id_estudiante'];
  $cedula=$f['cedula'];
  $nombre=$f['nombre'];
  $apellidos=$f['apellidos'];

}
  
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

<?php 


if ($motivacion->userExistsMotivacioneducativa($id)) {
 ?>

   <div class="container">
  <div class="jumbotron mt-3">
    <h1>Usted ha realizado la encuesta de motivación educativa</h1>


      <div class="navbar-header text-center">
   
  <img style="max-width:100px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/autoestima.jpg"> 
    
 
 

</div>




    <a class="btn btn-lg btn-primary" href="vistaEstudiante.php" role="button">Realizar más encuestas &raquo;</a>
  </div>
</div>

<!----si no ha realizado la encuesta---->
<?php 
}else{

 ?>




<div class="col-sm-12">
<h2>ENCUESTA ESCALA MOTIVACIÓN EDUCATIVA.</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="alert alert-success hide"></div>
<form id="register_form" name="register_form" novalidate action="../funcionescrud/crear_motivacioneducativa_logic.php" method="post">
<fieldset>
<h2>BLOQUE 1:</h2>
<div class="form-group" id="bloqueEME1">
</div>

<input type="button" class="next1 btn btn-info" value="Next"/>
</fieldset>
<fieldset>
<h2> BLOQUE 2:</h2>
<div class="form-group" id="bloqueEME2">
</div>
<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" name="next" class="next2 btn btn-info" value="Next" />
</fieldset>
<fieldset>

<h2>BLOQUE 3:</h2>
<div class="form-group" id="bloqueEME3">
</div>

<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" name="next" class="next3 btn btn-info" value="Next" />

</fieldset>

<fieldset>
<h2>BLOQUE 4:</h2>
<div class="form-group" id="bloqueEME4">
</div>

<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="button" name="next" class="next4 btn btn-info" value="Next" />

</fieldset>
<fieldset>
<h2>Desea guardar la información</h2>
<div class="form-group">

  <div id="bienvenido"></div>
<label>Si está seguro de guardar los datos seleccione aceptar</label>
<label><input type="checkbox" name="validar_checkbox"  id="validar_checkbox">Acepto condiciones y restricciones</label> 
 <br>
</div>

<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
<input type="submit" name="submit" class="submit btn btn-success" value="Aceptar" />

</fieldset>

</form>
</div>

      <!---los js-->
 <script src="estilos/js/jquery.min.js" ></script>
 <script src="estilos/js/bootstrap.min.js"></script>
  <script src="estilos/js/alertify.js" ></script>
  
 </body>
</html>





<script type="text/javascript">
   $(document).ready(function(){
   

   $('#bienvenido').load('../componentes/idPersona.php');
   $('#bloqueEME1').load('../componentes/componentesescalaeducativa/bloqueEME1.php');
   $('#bloqueEME2').load('../componentes/componentesescalaeducativa/bloqueEME2.php');
   $('#bloqueEME3').load('../componentes/componentesescalaeducativa/bloqueEME3.php');
   $('#bloqueEME4').load('../componentes/componentesescalaeducativa/bloqueEME4.php');

  });

</script>


<script type="text/javascript">
  $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;

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


    $(".next1").click(function(){
   var input_radio1=document.register_form.RadioButton1;
   var input_radio2=document.register_form.RadioButton2;
   var input_radio3=document.register_form.RadioButton3;
   var input_radio4=document.register_form.RadioButton4;
   var input_radio5=document.register_form.RadioButton5;
   var input_radio6=document.register_form.RadioButton6;
   var input_radio7=document.register_form.RadioButton7;


  var r1=0,r2=0,r3=0, r4=0, r5=0, r6=0, r7=0;
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
//para el tercer radioinput
for(x=0;x<input_radio3.length;x++){
  if(input_radio3[x].checked==true){
  r3=1;
   }
}
//para el cuarto radio input
for(x=0;x<input_radio4.length;x++){
  if(input_radio4[x].checked==true){
  r4=1;
   }
}
//para el 5 radio input
for(x=0;x<input_radio5.length;x++){
  if(input_radio5[x].checked==true){
  r5=1;
   }
}
//para el 6 radio input
for(x=0;x<input_radio6.length;x++){
  if(input_radio6[x].checked==true){
  r6=1;
   }
}
//para el 7 radio input
for(x=0;x<input_radio7.length;x++){
  if(input_radio7[x].checked==true){
  r7=1;
   }
}

 if(r1==0 || r2==0|| r3==0 || r4==0 || r5==0 || r6==0 || r7==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
 current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);

}
 });

//para el boton dos del segundo bloque
 $(".next2").click(function(){


      var input_radio8=document.register_form.RadioButton8;
      var input_radio9=document.register_form.RadioButton9;
      var input_radio10=document.register_form.RadioButton10;
      var input_radio11=document.register_form.RadioButton11;
      var input_radio12=document.register_form.RadioButton12;
      var input_radio13=document.register_form.RadioButton13;
      var input_radio14=document.register_form.RadioButton14;



    var r8=0, r9=0, r10=0, r11=0, r12=0, r13=0, r14=0;

      //para el 8 radio input
for(x=0;x<input_radio8.length;x++){
  if(input_radio8[x].checked==true){
  r8=1;
   }
}
//para el 9 radio input
for(x=0;x<input_radio9.length;x++){
  if(input_radio9[x].checked==true){
  r9=1;
   }
}
//para el 10 radio input
for(x=0;x<input_radio10.length;x++){
  if(input_radio10[x].checked==true){
  r10=1;
   }
}

    //para el 11 radioinput
for(x=0;x<input_radio11.length;x++){
  if(input_radio11[x].checked==true){
  r11=1;
   }
}
//para el 12 radioinput
for(x=0;x<input_radio12.length;x++){
  if(input_radio12[x].checked==true){
  r12=1;
   }
}
//para el 13 radioinput
for(x=0;x<input_radio13.length;x++){
  if(input_radio13[x].checked==true){
  r13=1;
   }
}
//para el 14 radio input
for(x=0;x<input_radio14.length;x++){
  if(input_radio14[x].checked==true){
  r14=1;
   }
}


if(r9==0||r8==0||r10==0||r11==0||r12==0||r13==0||r14==0){
   error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message); 
}else{
   current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
    error_message="";
$('.alert-success').removeClass('hide').html(error_message);

}
 });
//para el boton 4 del cuarto bloque
  $(".next4").click(function(){

    

  var input_radio22=document.register_form.RadioButton22;
  var input_radio23=document.register_form.RadioButton23;
  var input_radio24=document.register_form.RadioButton24;
  var input_radio25=document.register_form.RadioButton25;
  var input_radio26=document.register_form.RadioButton26;
  var input_radio27=document.register_form.RadioButton27;
  var input_radio28=document.register_form.RadioButton28;



    var r22=0,r23=0, r24=0, r25=0, r26=0, r27=0,r28=0;


//para el 22 radioinput
for(x=0;x<input_radio22.length;x++){
  if(input_radio22[x].checked==true){
  r22=1;
   }
}
//para el 23 radioinput
for(x=0;x<input_radio23.length;x++){
  if(input_radio23[x].checked==true){
  r23=1;
   }
}
//para el 24 radio input
for(x=0;x<input_radio24.length;x++){
  if(input_radio24[x].checked==true){
  r24=1;
   }
}
//para el 25 radio input
for(x=0;x<input_radio25.length;x++){
  if(input_radio25[x].checked==true){
  r25=1;
   }
}
//para el 26 radio input
for(x=0;x<input_radio26.length;x++){
  if(input_radio26[x].checked==true){
  r26=1;
   }
}
//para el 27 radio input
for(x=0;x<input_radio27.length;x++){
  if(input_radio27[x].checked==true){
  r27=1;
   }
}
//para el 28 radio input
for(x=0;x<input_radio28.length;x++){
  if(input_radio28[x].checked==true){
  r28=1;
   }
}
if( r22==0|| r23==0 || r24==0 || r25==0 || r26==0 || r27==0 || r28==0){
 
    error_message="faltan datos por seleccionar1";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
     current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
    error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}

 });



//para el boton tres del tercer bloque
  $(".next3").click(function(){


    var input_radio15=document.register_form.RadioButton15;
    var input_radio16=document.register_form.RadioButton16;
    var input_radio17=document.register_form.RadioButton17;
    var input_radio18=document.register_form.RadioButton18;
    var input_radio19=document.register_form.RadioButton19;
    var input_radio20=document.register_form.RadioButton20;
    var input_radio21=document.register_form.RadioButton21;



    var r15=0, r16=0, r17=0, r18=0, r19=0, r20=0, r21=0;
   //para el 15 radio input
for(x=0;x<input_radio15.length;x++){
  if(input_radio15[x].checked==true){
  r15=1;
   }
}
//para el 16 radio input
for(x=0;x<input_radio16.length;x++){
  if(input_radio16[x].checked==true){
  r16=1;
   }
}
//para el 17 radio input
for(x=0;x<input_radio17.length;x++){
  if(input_radio17[x].checked==true){
  r17=1;
   }
}
//para el 18 radio input
for(x=0;x<input_radio18.length;x++){
  if(input_radio18[x].checked==true){
  r18=1;
   }
}
//para el 19 radio input
for(x=0;x<input_radio19.length;x++){
  if(input_radio19[x].checked==true){
  r19=1;
   }
}
//para el 20 radio input
for(x=0;x<input_radio20.length;x++){
  if(input_radio20[x].checked==true){
  r20=1;
   }
}
//para el 21 radio input
for(x=0;x<input_radio21.length;x++){
  if(input_radio21[x].checked==true){
  r21=1;
   }
}



if(r15==0||r16==0||r17==0||r18==0||r19==0||r20==0||r21==0){
   error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message); 
}else{
   current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
    error_message="";
$('.alert-success').removeClass('hide').html(error_message);

}
 });


//para el boton next
  $(".next").click(function(){

   current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
    error_message="";
$('.alert-success').removeClass('hide').html(error_message);


 });

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
<?php } //cierra el if del formulario ?>