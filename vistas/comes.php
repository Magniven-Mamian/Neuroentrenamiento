<?php 
include  '../controlador/FantasticoControlador.php';


$id_estudiante=$_POST['idpersonas'];




//esto es para el primer bloque
$p49=$_POST['RadioButton1'];
$p50=$_POST['diasintensas'];
$p51=$_POST['horaintensas'].':'.$_POST['minintensas'];
$p52=$_POST['RadioButton2'];
$p53=$_POST['diasmoderado'];
$p54=$_POST['horasmoderada'].':'.$_POST['minutosmoderados'];


//esto es para el segundo bloque

$p55=$_POST['RadioButton2'];
$p56=$_POST['diascamina'];
$p57=$_POST['horacaminado'].':'.$_POST['mincaminando'];

//para el tercer bloque

$p58=$_POST['RadioButton3'];
$p59=$_POST['diasdeporte'];
$p60=$_POST['horadeporte'].':'.$_POST['mindeporte'];


//para el cuarto bloque

$p61=$_POST['RadioButton4'];
$p62=$_POST['diasactividades'];
$p63=$_POST['horaactidades'].':'.$_POST['minactidades'];


//bloque 5 

$p64=$_POST['horasentado'].':'.$_POST['minsentado'];




if(FantasticoControlador::userExistsFantastico(102)){
  echo "hola";
}





 ?>
 <div class="row well alert alert-success"><?php echo "<pre>";print_R($_POST);?></div>