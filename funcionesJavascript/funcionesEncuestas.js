
function validarEncuesta(id,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){eliminardatos(id)}
 , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id){

   datas ="id="+id;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarEncuestaPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
        $('#tablaEncuesta').load('../componentes/tablaEncuestas.php');
        alertify.success("elimina la encuesta ");  
      } else if(res ==2){
          alertfy.error(" fallo al servidor" + res);
      }      
    }
  });
}
 function obteneridencuesta (datos) {
        
          d=datos.split('||');   
           $('#txt_idencuesta').val(d[0]);         
          $('#txtNombre').val(d[1]);

}
function obteneridencuesvistaprevia(id){
  $('#txt_idencuestavista').val(id);
   $('#txt_idencuestavistas').val(id);
  }








 function actualizardatos(){

  id=$('#txt_idencuesta').val();
  nombre=$('#txtNombre').val();
   var datos='txt_idencuesta='+id+'&txtNombre='+nombre;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarEncuestaPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
        $('#tablaEncuesta').load('../componentes/tablaEncuestas.php');

        alertify.success("Datos actualizados");  
      }else{
         alertify.error("Datos no actualizados ");  
      }
         
    } 
  });
   }
