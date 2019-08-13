La siguiente pregunta se refiere al tiempo que suele pasar sentado o recostado en el trabajo, en casa, en los desplazamientos o con sus amigos. Se incluye el tiempo
pasado [ante una mesa de trabajo, sentado con los amigos, viajando en autobús o en tren, jugando a las cartas o viendo la televisión], pero no se incluye el tiempo pasado durmiendo.

[INSERTAR EJEMPLOS] (UTILIZAR LAS CARTILLAS DE IMÁGENES).

<h1>Comportamiento</h1>
<table class="table">
  <thead>
                <tr>
                  <th class="bg-primary">N°</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
                  <th>Código</th>
                  
                </tr>
    </thead>

<tr>
    <td>63</td>
  	<td>¿Cuándo tiempo suele pasar sentado o recostado en un día típico?</td>
  	<td>
 
 Horas:Minutos
 <br>
 <select name="horasentado" id="horasentado">
 <?php for ($i=0; $i <=24 ; $i++) { 
 	?>
 <option value="<?php echo $i ?>"><?php echo $i ?></option>
 <?php  }  ?>
    </select>	
     <select name="minsentado" id="minsentado">
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
</table>