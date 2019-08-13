<?php
include '../controlador/UsuarioControlador.php';
include '../controlador/user_session.php';

//$users=new UsuarioControlador();
$userSession = new UserSession();
$user = new UsuarioControlador();
$filas=null;

if(isset($_SESSION['user'])){
  
$a=$userSession->getCurrentUser();
$user->setUser($userSession->getCurrentUser());
$filas= $user->setUser($userSession->getCurrentUser());

   if ($filas->getPrivilegio()==1) {
      header('Location: vistaAdmin.php');
   }else if ($filas->getPrivilegio()==3) {
           # code...
      header('Location: vistaProfesor.php');
   }

}else{
header('Location: login.php');
}

$id_encuesta_resolver='';
if(isset($_GET["idencuestaresolver"])){
    $id_encuesta_resolver=$_GET["idencuestaresolver"];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="estilos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="estilos/css/alertify.css">
         <!---los js-->
<script src="estilos/js/jquery.min.js" ></script>
<script src="estilos/js/bootstrap.min.js"></script>
<script src="estilos/js/alertify.js" ></script>
 
<script src="../js_librerias/popper.min.js"></script>
<script type="../js_librerias/datatables.min.js"></script>
<script src="../js_librerias/Chosen.jquery.min.js"></script>
<script src="../js_librerias/toastr.min.js"></script>

<!--etiqueta para el estilo de los requrido-->
<style type="text/css">
 
.simple-form input { 
  border: 1px solid #eee;
  border-left: 3px solid;
}
.simple-form input:optional {
  border-left-color: #999;
}
.simple-form input:required {
  border-left-color: palegreen;
}
.simple-form input:invalid {
  border-left-color: salmon;
}

</style>

</head>
<body>
    <header>
  <div class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="vistaEstudiante.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      
        <a class="navbar-brand" href="listaEncuestasEst.php">Encuestas</a>
      
    </ul>
  
    
    <form class="form-inline my-2 my-lg-0">
       <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">configuracion</a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="logout.php">Cerrar sessión</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    </form>
    <div></div>
  </div>
</div>

</header>
  
 <form  autocomplete="off" method="POST" role="form" onsubmit="return crearRespuesta();" class="simple-form">
 <div id="divestudiante"></div>
 <div class="col-xs-6 col-sm-12" id="content_encuesta"></div>
 <button type="submit" id="btn_guardar_encuesta" class="btn btn-primary">Guardar</button>
 </form>
</body>
</html>


   
        <script>
   
                var datos='id_encuesta='+'<?php echo $id_encuesta_resolver; ?>';

                $.ajax({
                    url: '../componentes/encuesta_usuario_resolver.php',
                    method: "POST",
                    data: datos,
                    success: function (respuesta) {
                        $('#content_encuesta').html(respuesta)
                      
                    },
                    error: function () {
                         alerta("error", "Error en el sistema");
                    }
                });
               


               function guardarEncuesta(data) {
                console.log(datos);

                var id_estudiante= $('#idpersonas').val();

                $.ajax({
                    url: '../funcionescrud/crear_respuesta_encuesta_logic.php',
                    method: "POST",
                    data: {data_encuesta: data, id_usuario: id_estudiante, id_encuesta: datos},
                    success: function (res) {

                        console.log(res);

                        res = res.trim();//eliminamos espacion en blanco a la izaquerda y delera



                        if (res != "") {//validamos si todo salio bien

                            alert("Encuesta guardada");
                          

                        } else {
                            alert("Encuesta no guardada");
                        }
                    },
                    error: function () {
                        alerta("error", "Error en el sistema");
                    }
                });

            }


             function crearRespuesta(){
          
                var dataLista = [];

                

                   $(".radio_input:checked").each(function () {
                     console.log("radio id_pregunta " + $(this).attr('data-id'));
                     console.log("raadio value " + $(this).val());
                        var data = {'id_pregunta': $(this).attr('data-id'), 'value': $(this).val()};//las preguntas de selecion unica
                       dataLista.push(data)
                    });


                    $(".text_input").each(function () {
                        console.log("text id_pregunta " + $(this).attr('data-id'));
                        console.log("text value " + $(this).val());
                        var data = {'id_pregunta': $(this).attr('data-id'), 'value': $(this).val()}; //las preguntas que son texto
                        dataLista.push(data)
                    });

                   dataJson = JSON.stringify(dataLista);
                    guardarEncuesta(dataJson);

            

                    
                    return false;

                  
             }



 </script>
 <script type="text/javascript">
   $(document).ready(function(){
   $('#divestudiante').load('../componentes/idPersona.php');
  });

</script>

   