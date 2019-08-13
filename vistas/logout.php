    
<?php
    include_once '../controlador/user_session.php';
    $userSession = new UserSession();
    $userSession->closeSession();
    header("location: login.php");
?>