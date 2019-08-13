function validarprofesor(id_usuario,id_profesor,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){eliminardatos(id_usuario,id_profesor)}
 , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id_usuario,id_profesor){

   datas ='id_usu='+id_usuario+'&id_profe='+id_profesor;
   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarProfesorPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
    $('#tablaProf').load('../componentes/tablaProfesor.php');
         alertify.success("Usuario eliminado");
      } else{
          alertfy.error(" fallo al servidor");
      }      
    }
  });
}



     function obteneridprofesor (datos) {
        
          d=datos.split('||');   

          $('#txtCedula').val(d[0]);
          $('#txtNombre').val(d[1]);
          $('#txtApellidos').val(d[2]);
          $('#txtFecha_nacimiento').val(d[3]);
          $('#txtGenero').val(d[4]);
          $('#txtTelefono').val(d[5]);
          $('#txtEmail').val(d[6]);
         $('#txtPassword').val(d[7]);
         $('#txtPrivilegio').val(d[8]);
          $('#txtFecha_registro').val(d[9]);
         $('#txtProfesion').val(d[10]);
         $('#txt_idprofesor').val(d[11]);
         $('#txt_idusuario').val(d[12]);

   }


 function actualizardatosprofesor(){

        cedula=$('#txtCedula').val();
        nombre= $('#txtNombre').val();
        apellidos= $('#txtApellidos').val();
        fecha_nacimiento=$('#txtFecha_nacimiento').val();
         genero=$('#txtGenero').val();
        telefono= $('#txtTelefono').val();
        email=$('#txtEmail').val();  
        password=$('#txtPassword').val();      
         profesion= $('#txtProfesion').val();
         id_usuario=$('#txt_idusuario').val();
         id_profesor=$('#txt_idprofesor').val();

        
         


//$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre

   var datos='txt_idusuario='+id_usuario+'&txt_idprofesor='+id_profesor+'&txtCedula='+cedula+'&txtNombre='+nombre+'&txtApellidos='
   +apellidos+'&txtFecha_nacimiento='+fecha_nacimiento+'&txtGenero='+genero+'&txtTelefono='+telefono+'&txtEmail='+email+'&txtPassword='
   +password+'&txtProfesion='+profesion;



//alertify.success("Datos"+cedula); 

 $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarProfesorPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
          $('#tablaProf').load('../componentes/tablaProfesor.php');
          $('#cedulaprofesorbuscar').load('../componentes/buscarProfesorCedula.php');
         $('#profesoractualizar').load('../componentes/ActualizarProfesor.php');
         
         
         alertify.success("Datos actualizados"); 
        
          
        

      }else{
         alertify.confirm("Datos no actualizados "+res);  
         alertify.success(telefono); 

      } 
         
    } 
  });
   }



    function validarProfesorGrupo(id){
      alertify.confirm('Eliminar grupo', '¿Esta Seguro Que Desea eliminar?',
       function(){ eliminardatosGrupoProfe(id) }
      , function(){ alertify.error('Cancelado')});



   }



   function eliminardatosGrupoProfe(id){

   datas ='id_asignacion='+id;

   console.log(datas);
   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarGrupoProfesorPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
       
         alertify.success("grupo eliminado de profesor "+id);

          var datos=$('#txtidprofesor').val();
            
           
            $.ajax({
      
            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoProfe.php',
             success:function(respuesta){
                 
               $('#listagrupoprofesor').html(respuesta);
           
             
             }


           });
        

         
      } else{
          alertfy.error(" fallo al servidor");
      }      
    }
  });
}
