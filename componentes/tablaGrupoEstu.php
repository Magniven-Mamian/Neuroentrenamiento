<?php 
include '../controlador/EstudianteControlador.php';

include '../helps/helps.php';

   session_start();    
 ?>



<div id="tablaGrupoEstu">


	<div class="col-sm-12">

		<h2>Lista de grupos</h2> 
      
  
		<table  class="table table-hover">
   <thead>
                <tr>                  
                  <th>Nombre grupo</th>
                  <th>Fecha asignacion</th>                  
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>

  	<?php
  
   $usuario="";
   $id2=null;



 if(isset($_POST["id"])){
   $id2=$_POST['id'];
 }


   $usuario = EstudianteControlador::getEstudiantesGrupo($id2);


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
                  <td><?php echo $filas[9] ?></td>
                  <td><?php echo $filas[10] ?></td>


                  <td>
                                   

                      <a  class="btn btn-danger" onclick="validarEstudianteGrupo('<?php echo $filas[4]; ?>')">eliminar</a> 

                    

                  </td>


     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		


	</div>
</div>