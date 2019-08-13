function validar(id,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){eliminardatos(id)}
 , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id){

   datas ="id="+id;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarUsuarioPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
       $('#tablaU').load('../componentes/tablausuarios.php');
         alertify.success("Usuario eliminado"+res);
      } else if(res ==2){
          alertfy.error(" fallo al servido");
      }      
    }
  });
}
  

 function actualizardatos(){

  id=$('#txtid_usuario').val();
  nombre=$('#txtNombre').val();
  apellidos=$('#txtApellidos').val();
   var datos='txtid_usuario='+id+'&txtNombre='+nombre+'&txtApellidos='+apellidos;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarUsuarioPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
        $('#tablaU').load('../componentes/tablausuarios.php');
        $('#adminactualizar').load('../componentes/ActualizarAdmin.php');

        alertify.success("Datos actualizados dd");  
      }else{
         alertify.error("Datos no actualizados ");  
      }
         
    } 
  });
   }



     function obtenerid (datos) {
        
          d=datos.split('||');   

         $('#txtid_usuario').val(d[0]);
          $('#txtCedula').val(d[1]);
          $('#txtNombre').val(d[2]);
           $('#txtApellidos').val(d[3]);
          $('#txtFecha_nacimiento').val(d[4]);
          $('#txtTelefono').val(d[6]);
          $('#txtEmail').val(d[7]);
         $('#txtPassword').val(d[8]);
         $('#txtPrivilegio').val(d[9]);
   }



