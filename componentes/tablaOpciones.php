<?php 
include '../controlador/PreguntaControlador.php';

 session_start();  

 ?>



<div id="tablaGrupoEstu">


	<div class="col-sm-6">

		<h2>Lista de opciones</h2> 
      
  
		<table  class="table table-hover">
   <thead>
                <tr>                  
                  <th>Nombre</th>                
                  <th>Accion</th>
                </tr>
    </thead>
  <tbody>

  	<?php
  
   $usuario="";
   $id2='';
    
 if(isset($_POST['id_pregunta'])){
   $id2=$_POST['id_pregunta'];
  // echo $id2;
 }
//echo $id2;
 echo  $id2;
 


   $opciones = PreguntaControlador::getopcionesPregunta($id2);


    foreach ($opciones as $filas){ 
       $id =$filas[0]."||".
              $filas[1]."||".
              $filas[2];

?>      

<tr>
                  <td><?php echo $filas[1] ?></td>
                 
                   <td>
                                   

               <button  class="btn btn-danger" onclick="validarOpcion('<?php echo $filas[0]; ?>','<?php echo $filas[1]; ?>')">eliminar</button>
               
              <button  class="btn btn-primary" data-toggle="modal" data-target="#modalactualizaropcion"  onclick="obteneropcion('<?php echo $id ?>')">actualizar opcion</button>
                 </td>


     
    </tr>
     <?php } ?>
   
    
   
      </tbody>
</table>
		


	</div>
</div>