<?php 


   session_start();    

    $id =$_GET['valor'];

    $_SESSION['consultaopciones'] = $id;

    echo $id;



 ?>