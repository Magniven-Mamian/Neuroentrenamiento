<?php 
include '../controlador/GrupoControlador.php';

 ?>



<?php //este componente es para asignar al estudiante el grupo ?>

 <div id="buscarcedula">
  
  <div class="col-sm-8"></div>

 <div class="col-sm-4">

  <label>identificador de grupo</label>

  <select id="txtbuscargrupo" class="form-control input-sm">
    

    <?php 

           $result =  GrupoControlador::getGrupos();

foreach ($result as $ver) {
 
         
     ?>

      <option value="<?php echo $ver[0] ?>">
        <?php echo $ver[0].'  '.$ver[1]; ?>
      </option>

    <?php  } ?>

  </select>

  
 </div>

</div>



<script type="text/javascript">
  $(document).ready(function (){
       $('#txtbuscargrupo').select2();
            
        

            $('#txtbuscargrupo').change(function(){
         var datos=$('#txtbuscargrupo').val();
              // alert(datos);
           });
    
      
  });
</script>