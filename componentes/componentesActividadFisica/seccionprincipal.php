
<table class="ta">
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
  	<td>61</td>
  	<td>¿En su tiempo libre practica usted alguna actividad de
intensidad moderada que implica una ligera aceleración
de la respiración o del ritmo cardíaco, como caminar
deprisa, [ir en bicicleta, nadar, jugar al volleyball]
durante al menos 10 minutos consecutivos?
( INSERTAR EJEMPLOS Y UTILIZAR LAS CARTILLAS
DE IMÁGENES)</td>
  	<td>
  		<input type="radio" name="RadioButton5" id="RadioButton5" value="si"required>Si
        <input type="radio" name="RadioButton5" id="RadioButton5" value="no"required>No		
  	</td>
    <td>
    	P13
    </td>
  </tr>

   <tr>
    <td>62</td>
  	<td>En una semana típica, ¿cuántos días practica usted
actividades físicas de intensidad moderada en su tiempo
libre?</td>
  	<td>

  	  Número de días:
  <select name="diasactividades" id="diasactividades">
 <?php for ($i=0; $i <=7 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>		
  	</td>
    <td>
    	P14
    </td>
  </tr>

<tr>
    <td>63</td>
  	<td>En uno de esos días en los que practica actividades
físicas de intensidad moderada, ¿cuánto tiempo suele
dedicar a esas actividades?</td>
  	<td>
 
 Horas:Minutos
 <br>
 <select name="horaactidades" id="horaactidades">
 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>	
     <select name="minactidades" id="minactidades">
 <?php for ($i=0; $i <=59 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>
  	</td>
    <td>
    	P15(a-b)	
    </td>
  </tr>