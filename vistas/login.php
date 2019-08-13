 <?php


include '../controlador/user_session.php';
include '../controlador/UsuarioControlador.php';

$userSession = new UserSession();
$user = new UsuarioControlador();
if(isset($_SESSION['user'])){
    //echo "hay sesion";
   $user->setUser($userSession->getCurrentUser());
   $filas=$user->setUser($userSession->getCurrentUser());

    if($filas->getPrivilegio()==1){
        header('Location: vistaAdmin.php');
         }else if ($filas->getPrivilegio()==2) {
          header('Location: vistaEstudiante.php');
         }else if ($filas->getPrivilegio()==3) {
           # code...
          header('Location: vistaProfesor.php');
    }
        
  
}else if(isset($_POST['username']) && isset($_POST['password'])){
    

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new UsuarioControlador();
    if($user->userExist($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        //para hacer el llamado delas demas ventanas de los usuarios
        $user->setUser($userForm);
       $filas=$user->setUser($userForm);
         if($filas->getPrivilegio()==1){
           header('Location: vistaAdmin.php');
         }else if ($filas->getPrivilegio()==2) {
          header('Location: vistaEstudiante.php');
         }else if ($filas->getPrivilegio()==3) {
           # code...
          header('Location: vistaProfesor.php');
         }
       
      //$errorLogin='el usuario bien';

    }else{ 
        //echos "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        
    }
}
?>



 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
         
       <?php include 'partials/head.php'; ?>
       <script src="estilos/js/jquery.min.js"></script>
    </head>
   <body>
 <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="estilos/imagenes/imageneslogin/lock.png"/>
                    </div>
                    <form class="col-12"  method="POST" action="login.php">
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                        </div>
                        <div class="form-group" id="contrasena-group">
                            <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                    </form>
                    <div class="col-12 forgot">
                     
                      <?php

                if(isset($errorLogin)){
                    
                       echo '<div class="alert alert-danger" role="alert">'.$errorLogin.'</div>'; 
                   
                   }
                     ?>
                    
                  </div>
                  <div class="col-12 forgot">
                     <a href="crear_usuario_form.php">Crear cuenta</a>
                      
                  </div>
            </div>
 </div>
  </div>


 <?php include 'partials/footer.php';?>

 