A continuación voy a preguntarle por el tiempo que pasa realizando diferentes tipos de actividad física. Le ruego que intente contestar a las preguntas
aunque no se considere una persona activa.
Piense primero en el tiempo que pasa en el trabajo, que se trate de un empleo remunerado o no, de estudiar, de mantener su casa, de cosechar, de
pescar, de cazar o de buscar trabajo [inserte otros ejemplos si es necesario]. En estas preguntas, las &quot;actividades físicas intensas&quot; se refieren a aquéllas
que implican un esfuerzo físico importante y que causan una gran aceleración de la respiración o del ritmo cardíaco. Por otra parte, las &quot;actividades
físicas de intensidad moderada&quot; son aquéllas que implican un esfuerzo físico moderado y causan una ligera aceleración de la respiración o del ritmo cardíaco.
<h2> EN EL TRABAJO.</h2>

<table class="table">
	<thead>
                <tr>
                  <th class="bg-primary">N°</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
                  <th>Código</th>
                  
                </tr>
    </thead>

    <tbody>
  <tr>
  	<td>49</td>
  	<td>¿Exige su trabajo una actividad física intensa que implica una
   aceleración importante de la respiración o del ritmo cardíaco,
   como [levantar pesos, cavar o trabajos de construcción]
durante al menos 10 minutos consecutivos?
(INSERTAR EJEMPLOS Y UTILIZAR LAS CARTILLAS DE
IMÁGENES)</td>
  	<td>
  	<label>	<input type="radio" name="RadioButton1" id="RadioButton1" value="si"required style="width:20px;height:20px">Si</label>
    <label> <input type="radio" name="RadioButton1" id="RadioButton1" value="no"required style="width:20px;height:20px">No	</label> 	
  	</td>
    <td>
    	P1
    </td>
  </tr>


    <tr>
    <td>50</td>
  	<td>En una semana tipica ¿cuántos días usted realiza actividad física intensas en su trabajo?</td>
  	<td>

  	  Número de días:

  <select name="diasintensas" id="diasintensas">

 <?php for ($i=0; $i <=7 ; $i++) { 
 	?>

 <option value="<?php echo $i ?>"><?php echo $i ?></option>

 <?php  }  ?>

    </select>		
  	</td>
    <td>
    	P2
    </td>
  </tr>


 <tr>
    <td>51</td>
  	<td>En uno de esos días en los que realiza actividades físicas
intensas, ¿cuánto tiempo suele dedicar a esas actividades?</td>
  	<td>
 
 Horas:Minutos
 <br>
 <select name="horaintensas" id="horaintensas">
 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>	
     <select name="minintensas" id="minintensas">
 <?php for ($i=0; $i <=59 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>
  	</td>
    <td>
    	P3(a-b)	
    </td>
  </tr>

   <tr>
    <td>52</td>
  	<td>¿Exige su trabajo una actividad de intensidad
		moderada que implica una ligera aceleración de la respiración
		o del ritmo cardíaco, como caminar deprisa [o transportar
		pesos ligeros] durante al menos 10 minutos
		consecutivos?
		(INSERTAR EJEMPLOS Y UTILIZAR LAS CARTILLAS DE
		IMÁGENES)</td>
  	<td>
  	<label>	<input type="radio" name="RadioButton2" id="RadioButton2" value="si"required>si</label>
      <label> <input type="radio" name="RadioButton2" id="RadioButton2" value="no"required>no	</label> 	
  	</td>
    <td>
    	P4	
    </td>
  </tr>

     <tr>
    <td>53</td>
  	<td>En una semana típica, ¿cuántos días realiza usted
		actividades de intensidad moderada en su trabajo?</td>
  	<td>
  		  Número de días:

 
    <select name="diasmoderado" id="diasmoderado">

 <?php for ($i=0; $i <=7 ; $i++) { 
 	?>

 <option><?php echo $i ?></option>

 <?php  }  ?>

    </select>	




  	</td>
    <td>
    	P5	
    </td>
  </tr>

    <tr>
    <td>54</td>
  	<td>En uno de esos días en los que realiza actividades físicas de
intensidad moderada, ¿cuánto tiempo suele dedicar a esas
actividades?</td>
  	<td>
  		 
Horas:Minutos
 <br>
 
 <select name="horasmoderada" id="horasmoderada">

 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>

 <option value="<?php echo $i ?>"><?php echo $i ?></option>

 <?php  }  ?>

    </select>	


     <select name="minutosmoderados" id="minutosmoderados">

 <?php for ($i=0; $i <=59 ; $i++) { 
 	?>

 <option value="<?php echo $i ?>"><?php echo $i ?></option>

 <?php  }  ?>

    </select>
  	</td>
    <td>
    	P6
    	(a-b)
    </td>
  </tr>
</table>

