<?php 

include_once '../controlador/GrupoControlador.php';

 
 $id=$_POST['id'];
 $result='';




$result='';



 if(GrupoControlador::eliminarGrupo($id)){
        $result=1;
       }else{
        $result=0;
       }


echo $result;
 ?>