<?php 
include '../helps/helps.php';

$host="localhost";
$usuario="root";
$contrasena="";
$base="bd_login";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base);


$reporteCooper=$conexion->query("SELECT tes.cedula, tes.nombre, tes.apellidos, tes.fecha_nacimiento, tes.genero, tes.telefono, tes.email, tes.semestre, fantastico.fecha_realizacion, fa1, fa2, fa3, fa4, nt1, nt2, nt3, nt4, nt5, as1, as2, as3, as4, as5, as6, ti1, ti2, ti3, ti4, ti5, co1, co2, co3, co4, co5 from (SELECT * FROM usuarios NATURAL JOIN estudiante)tes inner join fantastico on (fantastico.id_estudiante=tes.id_estudiante) NATURAL JOIN fantastico_fa NATURAL JOIN fantastico_nt NATURAL JOIN fantastico_as NATURAL JOIN fantastico_ti NATURAL JOIN fantastico_co");
 
 // NOMBRE DEL ARCHIVO Y CHARSET
    header('Content-Type:application/vnd.ms-excel; charset=latin1');
    header('Content-Disposition: attachment; filename="fantastico.xls');


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
 		<!--- es para el fa---->
 		<th>fa1</th>
 		<th>fa2</th>
 		<th>fa3</th>
 		<th>fa4</th>
 		<!--- es para el nt---->
 		<th>nt1</th>
 		<th>nt2</th>
 		<th>nt3</th>
 		<th>nt4</th>
 		<th>nt5</th>
 		<!--- es para el as---->
 		<th>as1</th>
 		<th>as2</th>
 		<th>as3</th>
 		<th>as4</th>
 		<th>as5</th>
 		<th>as6</th>
 		<!--- es para el ti---->
 		<th>ti1</th>
 		<th>ti2</th>
 		<th>ti3</th>
 		<th>ti4</th>
 		<th>ti5</th>
 		<!--- es para el co---->
 		<th>co1</th>
 		<th>co2</th>
 		<th>co3</th>
 		<th>co4</th>
 		<th>co5</th>

 		


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
 			<!--- es para el fa---->
 			<td><?php echo $filaR['fa1']; ?></td>
 			<td><?php echo $filaR['fa2']; ?></td>
 			<td><?php echo $filaR['fa3']; ?></td>
 			<td><?php echo $filaR['fa4']; ?></td>
            <!--- es para el nt---->
 			<td><?php echo $filaR['nt1']; ?></td>
 			<td><?php echo $filaR['nt2']; ?></td>
 			<td><?php echo $filaR['nt3']; ?></td>
 			<td><?php echo $filaR['nt4']; ?></td>
 			<td><?php echo $filaR['nt5']; ?></td>
 			<!--- es para el as---->
 			<td><?php echo $filaR['as1']; ?></td>
 			<td><?php echo $filaR['as2']; ?></td>
 			<td><?php echo $filaR['as3']; ?></td>
 			<td><?php echo $filaR['as4']; ?></td>
 			<td><?php echo $filaR['as5']; ?></td>
 			<td><?php echo $filaR['as6']; ?></td>

 			<!--- es para el ti---->
 			<td><?php echo $filaR['ti1']; ?></td>
 			<td><?php echo $filaR['ti2']; ?></td>
 			<td><?php echo $filaR['ti3']; ?></td>
 			<td><?php echo $filaR['ti4']; ?></td>
 			<td><?php echo $filaR['ti5']; ?></td>
 			<!--- es para el co---->
 			<td><?php echo $filaR['co1']; ?></td>
 			<td><?php echo $filaR['co2']; ?></td>
 			<td><?php echo $filaR['co3']; ?></td>
 			<td><?php echo $filaR['co4']; ?></td>
 			<td><?php echo $filaR['co5']; ?></td>

 			


 			
 			

 		</tr>
 	
 <?php  } ?> </table>