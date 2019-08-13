 function obteneridgrupo (datos) {
        
          d=datos.split('||');   
           $('#txt_idgrupo').val(d[0]);         
          $('#txtNombreGrupos').val(d[1]);

}

 function actualizardatos(){

  id=$('#txt_idgrupo').val();
  nombre=$('#txtNombreGrupos').val();
   var datos='txt_idgrupo='+id+'&txtNombreGrupos='+nombre;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarGrupoPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
        $('#tablaGrupo').load('../componentes/tablaGrupos.php');

        alertify.success("Datos actualizados");  
      }else{
         alertify.error("Datos no actualizados ");  
      }
         
    } 
  });
   }




   function validarGrupo(id,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){eliminardatos(id)}
 , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id){

   datas ="id="+id;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarGrupoPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
        $('#tablaGrupo').load('../componentes/tablaGrupos.php');
        alertify.success("eliminado grupo ");  
      } else if(res ==2){
          alertfy.error(" fallo al servidor" + res);
      }      
    }
  });
}
  