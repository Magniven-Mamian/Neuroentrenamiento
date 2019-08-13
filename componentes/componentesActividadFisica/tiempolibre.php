Las preguntas que van a continuación excluyen la actividad física en el trabajo y para desplazarse, que ya hemos mencionado. Ahora me gustaría tratar
de deportes, fitness u otras actividades físicas que practica en su tiempo libre [inserte otros ejemplos si llega el caso].

<h2> EN EL TIEMPO LIBRE.</h2>

<table class="table">
	<thead>
                <tr>
                  <th class="bg-primary">N°</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
                  <th>CÓdigo</th>
                  
                </tr>
    </thead>

      <tbody>
  <tr>
  	<td>58</td>
  	<td>¿En su tiempo libre, practica usted deportes/fitness intensos
que implican una aceleración importante de la respiración o
del ritmo cardíaco como [correr, jugar al fútbol] durante al
menos 10 minutos consecutivos?
(INSERTAR EJEMPLOS Y UTILIZAR LAS CARTILLAS DE
IMÁGENES)</td>
  	<td>
  		<input type="radio" name="RadioButton4" id="RadioButton4" value="si"required>Si
        <input type="radio" name="RadioButton4" id="RadioButton4" value="no"required>No		
  	</td>
    <td>
    	P10
    </td>
  </tr>

   <tr>
    <td>59</td>
  	<td>En una semana típica, ¿cuántos días practica usted 
  	deportes/fitness intensos en su tiempo libre?</td>
  	<td>

  	  Número de días:
  <select name="diasdeporte" id="diasdeporte">
 <?php for ($i=0; $i <=7 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>		
  	</td>
    <td>
    	P11
    </td>
  </tr>

<tr>
    <td>60</td>
  	<td>En uno de esos días en los que realiza actividades físicas
intensas, ¿cuánto tiempo suele dedicar a esas actividades?</td>
  	<td>
 
 Horas:Minutos
 <br>
 <select name="horadeporte" id="horadeporte">
 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>	
     <select name="mindeporte" id="mindeporte">
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