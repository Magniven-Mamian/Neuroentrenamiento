<?php 
include '../controlador/ProfesorControlador.php';

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


   $usuario = ProfesorControlador::getProfesorGrupo($id2);


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
              $filas[9];

?>      

<tr>
                  <td><?php echo $filas["nombre"] ?></td>
                  <td><?php echo $filas["fecha_asig_prof"] ?></td>


                  <td>
                                   

                      <a  class="btn btn-danger" onclick="validarProfesorGrupo('<?php echo $filas["id_asig_grupo_prof"] ?>');">eliminar</a> 

                    

                  </td>


     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		


	</div>
</div>

<?php //echo $filas["id_profesor"]; ?>