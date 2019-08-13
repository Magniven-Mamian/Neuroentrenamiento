<?php

include_once '../controlador/CoopersmithControlador.php';

echo $p1=$_POST['RadioButton1'];
echo $p2=$_POST['RadioButton2'];
echo $p3=$_POST['RadioButton3'];
echo $p4=$_POST['RadioButton4'];
echo $p5=$_POST['RadioButton5'];
echo $p6=$_POST['RadioButton6'];
echo $p7=$_POST['RadioButton7'];
echo $p8=$_POST['RadioButton8'];
echo $p9=$_POST['RadioButton9'];
echo $p10=$_POST['RadioButton10'];
echo "<br>";
echo "<br>";
echo $p11=$_POST['RadioButton11'];
echo $p12=$_POST['RadioButton12'];
echo $p13=$_POST['RadioButton13'];
echo $p14=$_POST['RadioButton14'];
echo $p15=$_POST['RadioButton15'];
echo $p16=$_POST['RadioButton16'];
echo $p17=$_POST['RadioButton17'];
echo $p18=$_POST['RadioButton18'];
echo $p19=$_POST['RadioButton19'];
echo $p20=$_POST['RadioButton20'];
echo "<br>";
echo "<br>";
echo $p21=$_POST['RadioButton21'];
echo $p22=$_POST['RadioButton22'];
echo $p23=$_POST['RadioButton23'];
echo $p24=$_POST['RadioButton24'];
echo $p25=$_POST['RadioButton25'];
echo $p26=$_POST['RadioButton26'];
echo $p27=$_POST['RadioButton27'];
echo $p28=$_POST['RadioButton28'];
echo $p29=$_POST['RadioButton29'];
echo $p30=$_POST['RadioButton30'];
echo "<br>";
echo "<br>";
echo $p31=$_POST['RadioButton31'];
echo $p32=$_POST['RadioButton32'];
echo $p33=$_POST['RadioButton33'];
echo $p34=$_POST['RadioButton34'];
echo $p35=$_POST['RadioButton35'];
echo $p36=$_POST['RadioButton36'];
echo $p37=$_POST['RadioButton37'];
echo $p38=$_POST['RadioButton38'];
echo $p39=$_POST['RadioButton39'];
echo $p40=$_POST['RadioButton40'];
echo "<br>";
echo "<br>";
echo $p41=$_POST['RadioButton41'];
echo $p42=$_POST['RadioButton42'];
echo $p43=$_POST['RadioButton43'];
echo $p44=$_POST['RadioButton44'];
echo $p45=$_POST['RadioButton45'];
echo $p46=$_POST['RadioButton46'];
echo $p47=$_POST['RadioButton47'];
echo $p48=$_POST['RadioButton48'];
echo $p49=$_POST['RadioButton49'];
echo $p50=$_POST['RadioButton50'];
echo "<br>";
echo "<br>";
echo $p51=$_POST['RadioButton51'];
echo $p52=$_POST['RadioButton52'];
echo $p53=$_POST['RadioButton53'];
echo $p54=$_POST['RadioButton54'];
echo $p55=$_POST['RadioButton55'];
echo $p56=$_POST['RadioButton56'];
echo $p57=$_POST['RadioButton57'];
echo $p58=$_POST['RadioButton58'];



echo "<br>";
echo "<br>";
echo $pid=$_POST['idpersonas'];
echo "<br>";





CoopersmithControlador::crearCooperSmith($pid);
CoopersmithControlador::crearprimerbloque($p1, $p2,$p3, $p4, $p5,$p6,$p7, $p8,$p9,$p10);
CoopersmithControlador::crearsegundobloque($p11, $p12,$p13, $p14, $p15,$p16,$p17, $p18,$p19,$p20);
CoopersmithControlador::creartercerbloque($p21, $p22,$p23, $p24, $p25,$p26,$p27, $p28,$p29,$p30);
CoopersmithControlador::crearcuartobloque($p31, $p32,$p33, $p34, $p35,$p36,$p37, $p38,$p39,$p40);
CoopersmithControlador::crearquintobloque($p41, $p42,$p43, $p44, $p45,$p46,$p47, $p48,$p49,$p50);

CoopersmithControlador::crearsextobloque($p51, $p52,$p53, $p54, $p55,$p56,$p57, $p58);

header('Location: ../vistas/vistaformularioCoopersmith.php');
