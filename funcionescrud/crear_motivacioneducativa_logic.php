<?php

include_once '../controlador/MotivacionEducativaControlador.php';

echo $m1=$_POST['RadioButton1'];
echo $m2=$_POST['RadioButton2'];
echo $m3=$_POST['RadioButton3'];
echo $m4=$_POST['RadioButton4'];
echo $m5=$_POST['RadioButton5'];
echo $m6=$_POST['RadioButton6'];
echo $m7=$_POST['RadioButton7'];
echo "<br>";
echo "<br>";
echo $m8=$_POST['RadioButton8'];
echo $m9=$_POST['RadioButton9'];
echo $m10=$_POST['RadioButton10'];
echo $m11=$_POST['RadioButton11'];
echo $m12=$_POST['RadioButton12'];
echo $m13=$_POST['RadioButton13'];
echo $m14=$_POST['RadioButton14'];

echo "<br>";
echo "<br>";
echo $m15=$_POST['RadioButton15'];
echo $m16=$_POST['RadioButton16'];
echo $m17=$_POST['RadioButton17'];
echo $m18=$_POST['RadioButton18'];
echo $m19=$_POST['RadioButton19'];
echo $m20=$_POST['RadioButton20'];
echo $m21=$_POST['RadioButton21'];

echo "<br>";
echo "<br>";
echo $m22=$_POST['RadioButton22'];
echo $m23=$_POST['RadioButton23'];
echo $m24=$_POST['RadioButton24'];
echo $m25=$_POST['RadioButton25'];
echo $m26=$_POST['RadioButton26'];
echo $m27=$_POST['RadioButton27'];
echo $m28=$_POST['RadioButton28'];

echo "<br>";
echo "<br>";
echo $pid=$_POST['idpersonas'];
echo "<br>";





$motivacion=MotivacionEducativaControlador::crearMotivacion($pid);
$motivacionbloque1=MotivacionEducativaControlador::crearprimerbloque($m1, $m2,$m3, $m4, $m5,$m6,$m7);
$motivacionbloque2=MotivacionEducativaControlador::crearsegundobloque($m8, $m9, $m10, $m11,$m12,$m13,$m14);
$motivacionbloque3=MotivacionEducativaControlador::creartercerbloque($m15, $m16, $m17, $m18,$m19,$m20,$m21);
$motivacionbloque4=MotivacionEducativaControlador::crearcuartobloque($m22, $m23, $m24, $m25,$m26,$m27,$m28);


if($motivacion==1||$motivacionbloque1==1||$motivacionbloque2==1||$motivacionbloque3==1||$motivacionbloque4==1){
	header('Location: ../vistas/vistaformularioMotivacionEducativa.php');
}else{

	echo "error";
}
