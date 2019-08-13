<?php 
include_once '../controlador/EncuestaControlador.php';

 
 $id=$_POST['id'];
 $result='';

$result='';



 if(EncuestaControlador::eliminarEncuesta($id)){
        $result=1;
       }else{
        $result=0;
       }


echo $result;




 ?>