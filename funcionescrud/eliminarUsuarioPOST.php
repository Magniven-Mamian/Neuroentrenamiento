<?php

include_once '../controlador/UsuarioControlador.php';
 $id=$_POST['id'];

$result=UsuarioControlador::eliminarUsuario($id);
echo $result;

