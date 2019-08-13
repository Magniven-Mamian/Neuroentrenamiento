
 <?php 
include '../helps/helps.php';

$host="localhost";
$usuario="root";
$contrasena="";
$base="bd_login";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base);


$reporteCooper=$conexion->query("SELECT tes.cedula, tes.nombre, tes.apellidos, tes.fecha_nacimiento, tes.genero, tes.telefono, tes.email, tes.semestre, actividad_fisica.fecha_realizacion, p49, p50,p51, p52, p53, p54, p55, p56, p57, p58, p59, p60, p61, p62, p63, p64 from (SELECT * FROM usuarios NATURAL JOIN estudiante)tes inner join actividad_fisica on (actividad_fisica.id_estudiante=tes.id_estudiante) NATURAL JOIN actividad_fisica_trabajo NATURAL JOIN actividad_fisica_tiempolibre NATURAL JOIN actividad_fisica_sesionlibre NATURAL JOIN actividad_fisica_desplazarse NATURAL JOIN actividad_fisica_comportamiento");
 
 // NOMBRE DEL ARCHIVO Y CHARSET
    header('Content-Type:application/vnd.ms-excel; charset=latin1');
    header('Content-Disposition: attachment; filename="actividad_fisica.xls');


 ?>
 <h4 align="center"> lista de usuarios</h4>
 <table width="80%" border="1" align="center">
 	<tr>
 		<th>N</th>
 		<th>Cedula</th>
 		<th>Nombre</th>
 		<th>Apellidos</th>
 		<th>Fecha nacimmiento</th>
 		<th>Genero</th>
 		<th>Telefono</th>
 		<th>Email</th>
 		<th>Semestre</th>
 		<th>Fecha Realizacion de encuesta</th> 		
 		<th>p49</th>
 		<th>p50</th>
 		<th>p51</th>
 		<th>p52</th>
 		<th>p53</th>
 		<th>p54</th>
 		<th>p55</th>
 		<th>p56</th>
 		<th>p57</th>
 		<th>p58</th>
 		<th>p59</th>
 		<th>p60</th>
 		<th>p61</th>
 		<th>p62</th>
 		<th>p63</th>
 		<th>p64</th>



 	</tr>

 	<?php  $i=0;

 	 while ($filaR= $reporteCooper->fetch_assoc()) {
           $i++;
           //'cedula', 'Nombre', 'apellidos', 'fecha_nacimiento', 'genero', 'telefono', 'email','semestre','fecha de realizacion de encuesta', 'p1', 'p2','p3','p4','p5', 'p6', 'p7', 'p8','p9','p10','p11', 'p12', 'p13', 'p14','p15','p16','p17', 'p18', 'p19', 'p20','p21','p22','p23', 'p24', 'p25', 'p26','p27','p28','p29', 'p30', 'p31', 'p32','p33','p34','p35', 'p36','p37', 'p38', 'p39','p40','p41','p42', 'p43', 'p44', 'p45','p46','p47','p48', 'p49', 'p50', 'p51','p52','p53','p54', 'p55', 'p56','p57', 'p58'
 		?>
 		<tr>

 			<td><?php echo $i ?></td>
 			<td><?php echo $filaR['cedula']; ?></td>
 			<td><?php echo $filaR['nombre']; ?></td>
 			<td><?php echo $filaR['apellidos']; ?></td>
 			<td><?php echo $filaR['fecha_nacimiento']; ?></td>
 			<td><?php echo getGenero($filaR['genero']); ?></td>
 			<td><?php echo $filaR['telefono']; ?></td>
 			<td><?php echo $filaR['email']; ?></td>
 			<td><?php echo $filaR['semestre']; ?></td>
 			<td><?php echo $filaR['fecha_realizacion']; ?></td>
 			<td><?php echo $filaR['p49']; ?></td>
 			<td><?php echo $filaR['p50']; ?></td>
 			<td><?php echo $filaR['p51']; ?></td>
 			<td><?php echo $filaR['p52']; ?></td>
 			<td><?php echo $filaR['p53']; ?></td>
 			<td><?php echo $filaR['p54']; ?></td>
 			<td><?php echo $filaR['p55']; ?></td>
 			<td><?php echo $filaR['p56']; ?></td>
 			<td><?php echo $filaR['p57']; ?></td>
 			<td><?php echo $filaR['p58']; ?></td>
 			<td><?php echo $filaR['p59']; ?></td>
 			<td><?php echo $filaR['p60']; ?></td>
 			<td><?php echo $filaR['p61']; ?></td>
 			<td><?php echo $filaR['p62']; ?></td>
 			<td><?php echo $filaR['p63']; ?></td>
 			<td><?php echo $filaR['p64']; ?></td>			
 			

 		</tr>
 	
 <?php  } ?> </table>