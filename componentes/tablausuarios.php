
<?php 
include '../controlador/UsuarioControlador.php';
include '../controlador/user_session.php';
include '../helps/helps.php';

$usuario = UsuarioControlador::getUsuarios();
  ?> 


<div class="row" >
	<div class="col-sm-12" id="tablaU"> 
   		<h2> tabla de usuarios </h2>
		<table  class="table table-hover">
   <thead>
                <tr>
                  <th>cedula</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Genero</th>
                  <th>Email</th>
                  <th>Privilegio</th>
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>

  	<?php

 
    foreach ($usuario as $filas){ 
       $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2]."||".
              $filas[3]."||".
              $filas[4]."||".
              $filas[5]."||".
              $filas[6]."||".
              $filas[7]."||".
              $filas[8]."||".
              $filas[9]."||".
              $filas[10];

?>      

<tr>
                  <td hidden=""><?php echo $filas["id_usuario"] ?></td>
                  <td><?php echo $filas["cedula"] ?></td>
                  <td><?php echo $filas["nombre"] ?></td>
                  <td><?php echo $filas["apellidos"] ?></td>
                  <td><?php echo getGenero($filas["genero"]) ?></td>
                  <td><?php echo $filas["email"] ?></td>
                  <td><?php echo getPrivilegio($filas["privilegio"])?></td>
                  <td>
                    <a class="btn btn-warning glyphicon glyphicon-pencil " id="actualizaru" data-toggle="modal" data-target="#modalactualizar" onclick="obtenerid('<?php  echo $id ?>')">actualizar</a>

                      <a class="btn btn-danger glyphicon glyphicon-remove" onclick="validar('<?php echo $filas["id_usuario"] ?>','<?php echo $filas[2] ?>')">eliminar</a> 

                  </td>


     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		


	</div>
</div>

