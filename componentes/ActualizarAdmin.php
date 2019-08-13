<?php

include '../controlador/UsuarioControlador.php';
include '../controlador/user_session.php';
include '../helps/helps.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();
$filas2=null;

if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());
$filas2= $user->setUser($userSession->getCurrentUser());
}

	    
          $mostrar[0]=$filas2->getId();
          $mostrar[1]=$filas2->getCedula();
          $mostrar[2]=$filas2->getNombre();
          $mostrar[3]=$filas2->getApellidos();
          $mostrar[4]=$filas2->getFecha_nacimiento();
          $mostrar[5]=$filas2->getGenero();
          $mostrar[6]=$filas2->getTelefono();
          $mostrar[7]=$filas2->getEmail();
          $mostrar[8]=$filas2->getPassword();
          $mostrar[9]=$filas2->getPrivilegio();
          $mostrar[10]=$filas2->getFecha_registro();

        
          
$id=null;



     $id=  $mostrar[0]."||".
            $mostrar[1]."||".
            $mostrar[2]."||".
            $mostrar[3]."||".
            $mostrar[4]."||".
            $mostrar[5]."||".
            $mostrar[6]."||".
            $mostrar[7]."||".
            $mostrar[8]."||".
            $mostrar[9]."||".
            $mostrar[10];

	# code...

/*

id_usuario
cedula
nombre
apellidos
fecha_nacimiento
genero
telefono
email
password
privilegio
fecha_registro*/
?>

<div id="adminactualizar">
	<h1>Bienvenido Administrador</h1>
 <a id="actualizaru" data-toggle="modal" data-target="#modalactualizar" onclick="obtenerid('<?php  echo $id ?>')"><h1>  <?php echo $filas2->getNombre().'   '.  $mostrar[3];?>  </h1></a>
</div>
