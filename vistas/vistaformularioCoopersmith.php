
<?php

include_once '../controlador/EstudianteControlador.php';
include_once '../controlador/user_session.php';
include_once  '../controlador/CoopersmithControlador.php';
include_once '../controlador/UsuarioControlador.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$estudiante = new EstudianteControlador();
$user=new UsuarioControlador();

$coopersmith=new CoopersmithControlador();
$filas=null;

$cedula='';
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



<!----si  ya ha realizado la encuesta---->
<?php  if($coopersmith->userExistsCoopersmith($id)){
 ?>

   <div class="container">
   <div class="jumbotron mt-3">
    <h1>Usted ha realizado la encuesta</h1>


      <div class="navbar-header text-center">
   
   <img style="max-width:100px; margin-top: -7px;"
             src="estilos/imagenes/imagenesencuestas/autoestima.jpg"> Coopersmith
    
 
 

   </div>




    <a class="btn btn-lg btn-primary" href="vistaEstudiante.php" role="button">Realizar más encuestas &raquo;</a>
  </div>
</div>

<!----si no ha realizado la encuesta---->
<?php 
}else{

 ?>



<style type="text/css">

#register_form fieldset:not(:first-of-type) {
display: none;
}

</style>






<div class="container">
<h2>ENCUESTA COOPERSMITH</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="alert alert-success hide"></div>
<form id="register_form" name="register_form" novalidate action="../funcionescrud/crear_coopersmith_logic.php" method="post">
<fieldset>
<h2>BLOQUE 1:</h2>
<div class="form-group" id="bloque1">
</div>

<input type="button" class="next-form1 btn btn-info" value="Next"/>
</fieldset>
<fieldset>
<h2> BLOQUE 2:</h2>
<div class="form-group" id="bloque2">


</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
<input type="button" name="next" class="next-form2 btn btn-info" value="Next" />
</fieldset>
<fieldset>
<h2>BLOQUE 3:</h2>
<div class="form-group" id="bloque3">


</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
<input type="button" name="next" class="next-form3 btn btn-info" value="Next" />

</fieldset>
<fieldset>
<h2>BLOQUE 4:</h2>
<div class="form-group" id="bloque4">



</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
<input type="button" name="next" class="next-form4 btn btn-info" value="Next" />
</fieldset>

<fieldset>
<h2>BLOQUE 5:</h2>
<div class="form-group" id="bloque5">

</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
<input type="button" name="next" class="next-form5 btn btn-info" value="Next" />
</fieldset>
<fieldset>
<h2>BLOQUE 6:</h2>
<div class="form-group" id="bloque6">


</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
<input type="button" name="next" class="next-form6 btn btn-info" value="Next" />
</fieldset>


<fieldset>
<h2>Desea guardar la información</h2>
<div class="form-group">

  <div id="bienvenido"></div>

 <label><input type="checkbox" name="validar_checkbox"  id="validar_checkbox">Acepto condiciones y restricciones</label> 
 <br>
<label>Si está seguro de guardar los datos selecione aceptar</label>

</div>

<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
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
var form_count = 1, previous_form, next_form, total_forms;
total_forms = $("fieldset").length;
//para el primer siguiente
$(".next-form1").click(function(){
  var error_message = '';
  //var cb=$("input[type = 'checkbox']:checked")

  var input_radio1=document.register_form.RadioButton1;
  var input_radio2=document.register_form.RadioButton2;
  var input_radio3=document.register_form.RadioButton3;
  var input_radio4=document.register_form.RadioButton4;
  var input_radio5=document.register_form.RadioButton5;
  var input_radio6=document.register_form.RadioButton6; 
  var input_radio7=document.register_form.RadioButton7;
  var input_radio8=document.register_form.RadioButton8;
  var input_radio9=document.register_form.RadioButton9;
  var input_radio10=document.register_form.RadioButton10;

  var r1=0,r2=0,r3=0, r4=0, r5=0, r6=0, r7=0,r8=0, r9=0, r10=0;
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


  if(r1==0 || r2==0|| r3==0 || r4==0 || r5==0 || r6==0 || r7==0 || r8==0 || r9==0 || r10==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);

 }

});//termina el bloque1

$(".next-form2").click(function(){

 var input_radio11=document.register_form.RadioButton11;
 var input_radio12=document.register_form.RadioButton12;
 var input_radio13=document.register_form.RadioButton13;
 var input_radio14=document.register_form.RadioButton14;
 var input_radio15=document.register_form.RadioButton15;
 var input_radio16=document.register_form.RadioButton16;
 var input_radio17=document.register_form.RadioButton17;
 var input_radio18=document.register_form.RadioButton18;
 var input_radio19=document.register_form.RadioButton19;
 var input_radio20=document.register_form.RadioButton20;



  var r11=0,r12=0,r13=0, r14=0, r15=0, r16=0, r17=0,r18=0, r19=0, r20=0;



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


   if(r11==0 || r12==0|| r13==0 || r14==0 || r15==0 || r16==0 || r17==0 || r18==0 || r19==0 || r20==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{

previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}

});
//termina el bloque2


$(".next-form3").click(function(){
  var error_message = '';
  //var cb=$("input[type = 'checkbox']:checked")

  var input_radio21=document.register_form.RadioButton21;
  var input_radio22=document.register_form.RadioButton22;
  var input_radio23=document.register_form.RadioButton23;
  var input_radio24=document.register_form.RadioButton24;
  var input_radio25=document.register_form.RadioButton25;
  var input_radio26=document.register_form.RadioButton26;
  var input_radio27=document.register_form.RadioButton27;
  var input_radio28=document.register_form.RadioButton28;
  var input_radio29=document.register_form.RadioButton29;
  var input_radio30=document.register_form.RadioButton30;
 

  var r21=0,r22=0,r23=0, r24=0, r25=0, r26=0, r27=0,r28=0, r29=0, r30=0;
  //para el 21 input
for(x=0;x<input_radio21.length;x++){
  if(input_radio21[x].checked==true){
  r21=1;
   }
}
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
//para el 29 radio input
for(x=0;x<input_radio29.length;x++){
  if(input_radio29[x].checked==true){
  r29=1;
   }
}
//para el 30 radio input
for(x=0;x<input_radio30.length;x++){
  if(input_radio30[x].checked==true){
  r30=1;
   }
}


if(r21==0 || r22==0|| r23==0 || r24==0 || r25==0 || r26==0 || r27==0 || r28==0 || r29==0 || r30==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}
});//termina el bloque3


///para el formulario 4
$(".next-form4").click(function(){
  var error_message = '';
  //var cb=$("input[type = 'checkbox']:checked")

  var input_radio31=document.register_form.RadioButton31;
  var input_radio32=document.register_form.RadioButton32;
  var input_radio33=document.register_form.RadioButton33;
  var input_radio34=document.register_form.RadioButton34;
  var input_radio35=document.register_form.RadioButton35;
  var input_radio36=document.register_form.RadioButton36;
  var input_radio37=document.register_form.RadioButton37;
  var input_radio38=document.register_form.RadioButton38;
  var input_radio39=document.register_form.RadioButton39;
  var input_radio40=document.register_form.RadioButton40;
 

  var r31=0,r32=0,r33=0, r34=0, r35=0, r36=0, r37=0,r38=0, r39=0, r40=0;
  //para el 31 input
for(x=0;x<input_radio31.length;x++){
  if(input_radio31[x].checked==true){
  r31=1;
   }
}
//para el 32 radioinput
for(x=0;x<input_radio32.length;x++){
  if(input_radio32[x].checked==true){
  r32=1;
   }
}
//para el 33 radioinput
for(x=0;x<input_radio33.length;x++){
  if(input_radio33[x].checked==true){
  r33=1;
   }
}
//para el 34 radio input
for(x=0;x<input_radio34.length;x++){
  if(input_radio34[x].checked==true){
  r34=1;
   }
}
//para el 35 radio input
for(x=0;x<input_radio35.length;x++){
  if(input_radio35[x].checked==true){
  r35=1;
   }
}
//para el 36 radio input
for(x=0;x<input_radio36.length;x++){
  if(input_radio36[x].checked==true){
  r36=1;
   }
}
//para el 37 radio input
for(x=0;x<input_radio37.length;x++){
  if(input_radio37[x].checked==true){
  r37=1;
   }
}
//para el 38 radio input
for(x=0;x<input_radio38.length;x++){
  if(input_radio38[x].checked==true){
  r38=1;
   }
}
//para el 39 radio input
for(x=0;x<input_radio39.length;x++){
  if(input_radio39[x].checked==true){
  r39=1;
   }
}
//para el 40 radio input
for(x=0;x<input_radio40.length;x++){
  if(input_radio40[x].checked==true){
  r40=1;
   }
}


if(r31==0 || r32==0|| r33==0 || r34==0 || r35==0 || r36==0 || r37==0 || r38==0 || r39==0 || r40==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}
});
//////----------------------termina el bloque 4

///para el formulario 5
$(".next-form5").click(function(){
  var error_message = '';
  //var cb=$("input[type = 'checkbox']:checked")

  var input_radio41=document.register_form.RadioButton41;
  var input_radio42=document.register_form.RadioButton42;
  var input_radio43=document.register_form.RadioButton43;
  var input_radio44=document.register_form.RadioButton44;
  var input_radio45=document.register_form.RadioButton45;
  var input_radio46=document.register_form.RadioButton46;
  var input_radio47=document.register_form.RadioButton47;
  var input_radio48=document.register_form.RadioButton48;
  var input_radio49=document.register_form.RadioButton49;
  var input_radio50=document.register_form.RadioButton50;
 

  var r41=0,r42=0,r43=0, r44=0, r45=0, r46=0, r47=0,r48=0, r49=0, r50=0;
  //para el 41 input
for(x=0;x<input_radio41.length;x++){
  if(input_radio41[x].checked==true){
  r41=1;
   }
}
//para el 42 radioinput
for(x=0;x<input_radio42.length;x++){
  if(input_radio42[x].checked==true){
  r42=1;
   }
}
//para el 43 radioinput
for(x=0;x<input_radio43.length;x++){
  if(input_radio43[x].checked==true){
  r43=1;
   }
}
//para el 44 radio input
for(x=0;x<input_radio44.length;x++){
  if(input_radio44[x].checked==true){
  r44=1;
   }
}
//para el 45 radio input
for(x=0;x<input_radio45.length;x++){
  if(input_radio45[x].checked==true){
  r45=1;
   }
}
//para el 46 radio input
for(x=0;x<input_radio46.length;x++){
  if(input_radio46[x].checked==true){
  r46=1;
   }
}
//para el 47 radio input
for(x=0;x<input_radio47.length;x++){
  if(input_radio47[x].checked==true){
  r47=1;
   }
}
//para el 48 radio input
for(x=0;x<input_radio48.length;x++){
  if(input_radio48[x].checked==true){
  r48=1;
   }
}
//para el 49 radio input
for(x=0;x<input_radio49.length;x++){
  if(input_radio49[x].checked==true){
  r49=1;
   }
}
//para el 50 radio input
for(x=0;x<input_radio50.length;x++){
  if(input_radio50[x].checked==true){
  r50=1;
   }
}


if(r41==0 || r42==0|| r43==0 || r44==0 || r45==0 || r46==0 || r47==0 || r48==0 || r49==0 || r50==0){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}
});
//////----------------------termina el bloque 5

///para el formulario 6
$(".next-form6").click(function(){
  var error_message = '';
  //var cb=$("input[type = 'checkbox']:checked")

  var input_radio51=document.register_form.RadioButton51;
  var input_radio52=document.register_form.RadioButton52;
  var input_radio53=document.register_form.RadioButton53;
  var input_radio54=document.register_form.RadioButton54;
  var input_radio55=document.register_form.RadioButton55;
  var input_radio56=document.register_form.RadioButton56;
  var input_radio57=document.register_form.RadioButton57;
  var input_radio58=document.register_form.RadioButton58;


  var r51=0,r52=0,r53=0, r54=0, r55=0, r56=0, r57=0,r58=0;
  //para el 51 input
for(x=0;x<input_radio51.length;x++){
  if(input_radio51[x].checked==true){
  r51=1;
   }
}
//para el 52 radioinput
for(x=0;x<input_radio52.length;x++){
  if(input_radio52[x].checked==true){
  r52=1;
   }
}
//para el 53 radioinput
for(x=0;x<input_radio53.length;x++){
  if(input_radio53[x].checked==true){
  r53=1;
   }
}
//para el 54 radio input
for(x=0;x<input_radio54.length;x++){
  if(input_radio54[x].checked==true){
  r54=1;
   }
}
//para el 55 radio input
for(x=0;x<input_radio55.length;x++){
  if(input_radio55[x].checked==true){
  r55=1;
   }
}
//para el 56 radio input
for(x=0;x<input_radio56.length;x++){
  if(input_radio56[x].checked==true){
  r56=1;
   }
}
//para el 57 radio input
for(x=0;x<input_radio57.length;x++){
  if(input_radio57[x].checked==true){
  r57=1;
   }
}
//para el 48 radio input
for(x=0;x<input_radio58.length;x++){
  if(input_radio58[x].checked==true){
  r58=1;
   }
}


if(r51==0 || r52==0|| r53==0 || r54==0 || r55==0 || r56==0 || r57==0 || r58==0 ){
    error_message="faltan datos por seleccionar";
    $('.alert-success').removeClass('hide').html(error_message);
     
}else{
previous_form = $(this).parent();
next_form = $(this).parent().next();
next_form.show();
previous_form.hide();
setProgressBarValue(++form_count);
error_message="";
$('.alert-success').removeClass('hide').html(error_message);
}
});
//////----------------------termina el bloque 6



$(".previous-form").click(function(){
previous_form = $(this).parent();
next_form = $(this).parent().prev();
next_form.show();
previous_form.hide();
setProgressBarValue(--form_count);
});

setProgressBarValue(form_count);
function setProgressBarValue(value){
var percent = parseFloat(100 / total_forms) * value;
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
   $('#bienvenido').load('../componentes/idPersona.php');
   $('#bloque1').load('../componentes/componentesbloquescopersmit/bloque1.php');
   $('#bloque2').load('../componentes/componentesbloquescopersmit/bloque2.php');
  $('#bloque3').load('../componentes/componentesbloquescopersmit/bloque3.php');
   $('#bloque4').load('../componentes/componentesbloquescopersmit/bloque4.php');
    $('#bloque5').load('../componentes/componentesbloquescopersmit/bloque5.php');
    $('#bloque6').load('../componentes/componentesbloquescopersmit/bloque6.php');


  });

</script>

<?php } //cierra el if del formulario ?>