<?php 

   session_start();    

    $id =$_GET['valor'];

    $_SESSION['consulta'] = $id;

    echo $id;

 ?>