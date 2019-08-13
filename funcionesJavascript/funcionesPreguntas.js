 function obteneridpregunta (datos) {
          d=datos.split('||');  
           $('#txtidpregunta').val(d[4]);    
          $('#txtNombrePreguntaact').val(d[5]);
            $('#txtTipoPreguntaact').val(d[7]);


}

 function obteneropcion (datos) {
          d=datos.split('||');  
           $('#txtid_preguntaact').val(d[0]);    
          $('#txtNombreOpcionactu').val(d[1]);


}

 function actualizardatosOpcion(){
id=$('#txtid_preguntaact').val();
nombre=$('#txtNombreOpcionactu').val();
 var datos='txtid_preguntaact='+id+'&txtNombreOpcionactu='+nombre;
  $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarOpcionPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
      
        alertify.success("Datos actualizados"); 
        vertablaOpciones(); 
      }else{
         alertify.error("Datos no actualizados "+ res);  

         console.log(res)
      }
         
    } 
  });
 
 }



function vertablapreguntas(){
   var datos=$('#txtid_encuesta').val();
            $.ajax({

            type:"POST",
            data:'id_encuesta='+ datos,
             url:'../componentes/tablaPreguntas.php',
             success:function(respuesta){
             
            $('#dlistapreguntas').html(respuesta);
             
             }
    });

}
 function vertablaOpciones(){
        var datos=$('#txtid_pregunta').val();
            
            
            $.ajax({

            type:"POST",
            data:'id_pregunta='+ datos,
             url:'../componentes/tablaOpciones.php',
             success:function(respuesta){           
             $('#componentetablaopciones').html(respuesta);

             }
           });

 }



 function actualizardatosPregunta(){
id=$('#txtidpregunta').val();
nombre=$('#txtNombrePreguntaact').val();
tipo=$('#txtTipoPreguntaact').val();
 var datos='txtidpregunta='+id+'&txtNombrePreguntaact='+nombre+'&txtTipoPreguntaact='+tipo;
  $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarPreguntaPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
       alertify.success("Datos actualizados");  
       
      
     vertablapreguntas();



      }else{
         alertify.error("Datos no actualizados "+ res);  

         console.log(res)
      }
         
    } 
  });
 
 }



   function validarOpcion(id,nombre){

alertify.confirm('Eliminar Datos', '¿ Esta Seguro Que Desea eliminar a '+nombre+'?',
 function(){  eliminaropcion(id);  }
 , function(){ alertify.error('Cancelado')});
}


function eliminaropcion(id){


   datas ="id="+id;

   $.ajax({

    type:'POST',
    url:'../funcionescrud/eliminarOpcionPOST.php',
    data:datas,
    success:function(res){
      if(res==1){
       
        alertify.success("elimino la opcion "); 
        vertablaOpciones(); 
      } else if(res ==2){
          alertfy.error(" fallo al servidor" + res);
      }      
    }
  });
}






 


 /* id=$('#txtidpregunta').val();
  nombre=$('#txtNombrePreguntaact').val();

  tipo=$('txtTipoPreguntaact').val();
   var datos='txtidpregunta='+id+'&txtNombrePreguntaact='+nombre+'&txtTipoPreguntaact='tipo;
       $.ajax({
    type:'POST',
    url:'../funcionescrud/actualizarPreguntaPOST.php',
    data:datos,
    success:function(res){
      if(res==1){
        $('#tablaGrupo').load('../componentes/tablaGrupos.php');

        alertify.success("Datos actualizados");  
      }else{
         alertify.error("Datos no actualizados ");  
      }
         
    } 
  });*/
