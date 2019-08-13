En las siguientes preguntas, dejaremos de lado las actividades físicas en el trabajo, de las que ya hemos tratado.
Ahora me gustaría saber cómo se desplaza de un sitio a otro. Por ejemplo, cómo va al trabajo, de compras, al mercado, al lugar de culto [insertar otros ejemplos si es necesario]
<h3>PARA DESPLAZARSE.</h3>

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

 	<td>55</td>
  	<td>¿Camina usted o usa usted una bicicleta al menos 10 minutos consecutivos</td>
  	<td>
  		<input type="radio" name="RadioButton3" id="RadioButton3" value="si"required>Si
        <input type="radio" name="RadioButton3" id="RadioButton3" value="no"required>No		
  	</td>
    <td>
    	P7
    </td>
  </tr>


<td>56</td>
  	<td>En una semana típica, ¿cuántos días camina o va en bicicleta
al menos 10 minutos consecutivos en sus desplazamientos?</td>
    <td>
  	Número de días:
  <select name="diascamina" id="diascamina">
 <?php for ($i=0; $i <=7 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
	 </select>	
    <td>
    	P8
    </td>
  </tr>

<td>57</td>
  	<td>En un día típico, ¿cuánto tiempo pasa caminando o yendo en
bicicleta para desplazarse?</td>
<td>
 Horas:Minutos
 <br>
 <select name="horacaminado" id="horacaminado">
 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
	 </select>	
     <select name="mincaminando" id="mincaminando">
 <?php for ($i=0; $i <=59 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>

    </select>	
    <td>
    	P9
    	<br>
    	(a-b)
    </td>
  </tr>
</table>