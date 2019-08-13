
<?php 
include '../helps/helps.php';

$host="localhost";
$usuario="root";
$contrasena="";
$base="bd_login";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base);


$reporteCooper=$conexion->query("SELECT tes.cedula, tes.nombre, tes.apellidos, tes.fecha_nacimiento, tes.genero, tes.telefono, tes.email, tes.semestre, motivacioneducativa.fecha_realizacion, m1, m2, m3, m4, m5, m6, m7,m8,m9, m10, m11, m12, m13, m14, m15, m16, m17, m18, m19, m20, m21, m22, m23, m24, m25, m26, m27, m28 from (SELECT * FROM usuarios NATURAL JOIN estudiante)tes inner join motivacioneducativa on (motivacioneducativa.id_estudiante=tes.id_estudiante) NATURAL JOIN motivacioneducativaprimerbloque NATURAL JOIN motivacioneducativasegundobloque NATURAL JOIN motivacioneducativatercerbloque NATURAL JOIN motivacioneducativacuartobloque");
 
 // NOMBRE DEL ARCHIVO Y CHARSET
    header('Content-Type:application/vnd.ms-excel; charset=latin1');
    header('Content-Disposition: attachment; filename="motivacioneducativa.xls');


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
 		<th>m1</th>
 		<th>m2</th>
 		<th>m3</th>
 		<th>m4</th>
 		<th>m5</th>
 		<th>m6</th>
 		<th>m7</th>
 		<th>m8</th>
 		<th>m9</th>
 		<th>m10</th>
 		<th>m11</th>
 		<th>m12</th>
 		<th>m13</th>
 		<th>m14</th>
 		<th>m15</th>
 		<th>m16</th>
 		<th>m17</th>
 		<th>m18</th>
 		<th>m19</th>
 		<th>m20</th>
 		<th>m21</th>
 		<th>m22</th>
 		<th>m23</th>
 		<th>m24</th>
 		<th>m25</th>
 		<th>m26</th>
 		<th>m27</th>
 		<th>m28</th>
 		


 	</tr>

 	<?php  $i=0;

 	 while ($filaR= $reporteCooper->fetch_assoc()) {
           $i++;
         
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
 			<td><?php echo $filaR['m1']; ?></td>
 			<td><?php echo $filaR['m2']; ?></td>
 			<td><?php echo $filaR['m3']; ?></td>
 			<td><?php echo $filaR['m4']; ?></td>
 			<td><?php echo $filaR['m5']; ?></td>
 			<td><?php echo $filaR['m6']; ?></td>
 			<td><?php echo $filaR['m7']; ?></td>
 			<td><?php echo $filaR['m8']; ?></td>
 			<td><?php echo $filaR['m9']; ?></td>
 			<td><?php echo $filaR['m10']; ?></td>
 			<td><?php echo $filaR['m11']; ?></td>
 			<td><?php echo $filaR['m12']; ?></td>
 			<td><?php echo $filaR['m13']; ?></td>
 			<td><?php echo $filaR['m14']; ?></td>
 			<td><?php echo $filaR['m15']; ?></td>
 			<td><?php echo $filaR['m16']; ?></td>
 			<td><?php echo $filaR['m17']; ?></td>
 			<td><?php echo $filaR['m18']; ?></td>
 			<td><?php echo $filaR['m19']; ?></td>
 			<td><?php echo $filaR['m20']; ?></td>
 			<td><?php echo $filaR['m21']; ?></td>
 			<td><?php echo $filaR['m22']; ?></td>
 			<td><?php echo $filaR['m23']; ?></td>
 			<td><?php echo $filaR['m24']; ?></td>
 			<td><?php echo $filaR['m25']; ?></td>
 			<td><?php echo $filaR['m26']; ?></td>
 			<td><?php echo $filaR['m27']; ?></td>
 			<td><?php echo $filaR['m28']; ?></td>
 				
 			

 		</tr>
 	
 <?php  } ?> </table>