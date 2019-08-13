<?php 
include '../controlador/FantasticoControlador.php';

$fa1=$_POST['RadioButton1'];
$fa2=$_POST['RadioButton2'];
$fa3=$_POST['RadioButton3'];
$fa4=$_POST['RadioButton4'];

//nutricion
#3116367340
$nt1=$_POST['RadioButton5'];
$nt2=$_POST['RadioButton6'];
$nt3=$_POST['RadioButton7'];
$nt4=$_POST['RadioButton8'];
$nt5=$_POST['RadioButton9'];

//as 
$as1=$_POST['RadioButton10'];
$as2=$_POST['RadioButton11'];
$as3=$_POST['RadioButton12'];
$as4=$_POST['RadioButton13'];
$as5=$_POST['RadioButton14'];
$as6=$_POST['RadioButton15'];

//ti
$ti1=$_POST['RadioButton16'];
$ti2=$_POST['RadioButton17'];
$ti3=$_POST['RadioButton18'];
$ti4=$_POST['RadioButton19'];
$ti5=$_POST['RadioButton20'];

//co
$co1=$_POST['RadioButton21'];
$co2=$_POST['RadioButton22'];
$co3=$_POST['RadioButton23'];
$co4=$_POST['RadioButton24'];
$co5=$_POST['RadioButton25'];

//idpersona del estudiante
$id_estudiante=$_POST['idpersonas'];
$result='';



FantasticoControlador::crearFantastico($id_estudiante);
FantasticoControlador::crearFantastico_fa($fa1, $fa2,$fa3, $fa4);
FantasticoControlador::crearFantastico_nt($nt1, $nt2,$nt3, $nt4, $nt5);
FantasticoControlador::crearFantastico_as($as1, $as2,$as3, $as4, $as5, $as6);
FantasticoControlador::crearFantastico_ti($ti1, $ti2,$ti3, $ti4, $ti5);
FantasticoControlador::crearFantastico_co($co1, $co2,$co3, $co4, $co5);
header('Location: ../vistas/vistaformularioFantastico.php');



 ?> 


<div class="row well alert alert-success"><?php echo "<pre>";print_R($_POST);?></div>