<?php 
include '../controlador/EstudianteControlador.php';

 ?>



 <div id="buscarcedula">
	
  <div class="col-sm-8"></div>

 <div class="col-sm-4">

 	<label>documento</label>

 	<select id="buscardocumento" class="form-control input-sm">
 		<option value="0"> ingrese documento</option>

 		<?php 

           $result = EstudianteControlador::getEstudiantes();

foreach ($result as $ver) {
 
         
 		 ?>

 		  <option value="<?php echo $ver[0] ?>">
 		  	<?php echo $ver[0]; ?>
 		  </option>

 		<?php  } ?>

 	</select>

 	
 </div>

</div>



<script type="text/javascript">
	$(document).ready(function (){
       $('#buscardocumento').select2();
            
        

            $('#buscardocumento').change(function(){
      var datos=$('#buscardocumento').val();
            
           $.ajax({

           	type:"post",
           	data:'valor='+ datos,
           	 url:'../funcionesseciones/sessionEstudiante.php',
           	 success:function(r){

           	  $('#tablaEst').load('../componentes/tablaEstudiantes.php');


           	 }


           });

       });
    
      
	});
</script>