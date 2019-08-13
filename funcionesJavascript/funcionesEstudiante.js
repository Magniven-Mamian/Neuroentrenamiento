
function validarEstudiante(id_usuario,id_estudiante,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){eliminardatos(id_usuario,id_estudiante)}
 , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id_usuario,id_estudiante){

   datas ='id_usu='+id_usuario+'&id_est='+id_estudiante;
   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarEstudiantePOST.php',
    data:datas,
    success:function(res){
      if(res==1){
    $('#tablaEst').load('../componentes/tablaEstudiantes.php');
     $('#buscarcedula').load('../componentes/buscarEstudianteCedula.php');
         alertify.success("Usuario eliminado");
      } else{
          alertfy.error(" fallo al servidor");
      }      
    }
  });
}
  


 function actualizardatosestudiante(){

        cedula=$('#txtCedula').val();
        nombre= $('#txtNombre').val();
        apellidos= $('#txtApellidos').val();
        fecha_nacimiento=$('#txtFecha_nacimiento').val();
         genero=$('#txtGenero').val();
        telefono= $('#txtTelefono').val();
        email=$('#txtEmail').val();  
        password=$('#txtPassword').val();      
         semestre= $('#txtSemestre').val();
         id_usuario=$('#txt_idusuario').val();
         id_estudiante=$('#txt_idestudiante').val();

        
         


//$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre

   var datos='txt_idusuario='+id_usuario+'&txt_idestudiante='+id_estudiante+'&txtCedula='+cedula+'&txtNombre='+nombre+'&txtApellidos='
   +apellidos+'&txtFecha_nacimiento='+fecha_nacimiento+'&txtGenero='+genero+'&txtTelefono='+telefono+'&txtEmail='+email+'&txtPassword='
   +password+'&txtSemestre='+semestre;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarEstudiantePOST.php',
    data:datos,
    success:function(res){
      if(res==1){
          $('#tablaEst').load('../componentes/tablaEstudiantes.php');
           $('#buscarcedula').load('../componentes/buscarEstudianteCedula.php');
         //  estudianteactualizar
          $('#estudianteactualizar').load('../componentes/ActualizarEstudiante.php');

         alertify.success("Datos actualizadosss"); 
         
          
        

      }else{
         alertify.confirm("Datos no actualizados "+res);  
         

      } 

         
    } 
  });
   }



     function obteneridestudiante (datos) {
        
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
         $('#txtSemestre').val(d[10]);
         $('#txt_idestudiante').val(d[11]);
         $('#txt_idestudiantes').val(d[11]);
         $('#txt_idusuario').val(d[12]);
         $('#txtEstado').val(d[13]);
   }
  
  
 function actualizarEstado(){

        id_estudiante=$('#txt_idestudiantes').val();
        estado= $('#txtEstado').val();
    

//$cedula,$nombre,$apellidos,$fecha_nacimiento,$genero,$telefono,$email,$password,$semestre

   var datos='txt_idestudiantes='+id_estudiante+'&txtEstado='+estado;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarEstadoEstudiantePOST.php',
    data:datos,
    success:function(res){
      if(res==1){
          $('#tablaEst').load('../componentes/tablaEstudiantes.php');
         alertify.success("Datos actualizados"); 
         
      }else{
         alertify.error("Datos no actualizados ");  
       

      }
 
         
    } 
  });
   }

   function validarEstudianteGrupo(id){

      alertify.confirm('Eliminar grupo', '¿ Esta Seguro Que Desea eliminar?',
       function(){ eliminardatosGrupoEstu(id) }
      , function(){ alertify.error('Cancelado')});


   }



function eliminardatosGrupoEstu(id){

   datas ='id_asignacion='+id;
   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarGrupoEstudiantePOST.php',
    data:datas,
    success:function(res){
      if(res==1){
         $('#tablaGrupoEstu').load('../componentes/tablaGrupoEstu.php');
         alertify.success("grupo eliminado de estudiante");

      var datos=$('#txtidestudiante').val();
            
           

           
            $.ajax({

            type:"POST",
            data:'id='+ datos,
             url:'../componentes/tablaGrupoEstu.php',
             success:function(respuesta){
                 
               $('#listagrupoestudiante').html(respuesta);
           
             
             }


           });
        

         
      } else{
          alertfy.error(" fallo al servidor");
      }      
    }
  });
}
  





