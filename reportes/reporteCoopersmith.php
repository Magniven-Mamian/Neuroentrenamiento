<?php 
include '../helps/helps.php';

$host="localhost";
$usuario="root";
$contrasena="";
$base="bd_login";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base);


$reporteCooper=$conexion->query("SELECT tes.cedula, tes.nombre, tes.apellidos, tes.fecha_nacimiento, tes.genero, tes.telefono, tes.email, tes.semestre, coopersmith.fecha_realizacion, p1, p2, p3, p4, p5, p6, p7,p8,p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53, p54, p55, p56, p57, p58 from (SELECT * FROM usuarios NATURAL JOIN estudiante)tes inner join coopersmith on (coopersmith.id_estudiante=tes.id_estudiante) NATURAL JOIN coopersmithprimerbloque NATURAL JOIN coopersmithsegundobloque NATURAL JOIN coopersmithtercerbloque NATURAL JOIN coopersmithcuartobloque NATURAL JOIN coopersmithquintobloque NATURAL JOIN coopersmithsextobloque");
 
 // NOMBRE DEL ARCHIVO Y CHARSET
    header('Content-Type:application/vnd.ms-excel; charset=latin1');
    header('Content-Disposition: attachment; filename="Reto5.xls');


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
 		<th>p1</th>
 		<th>p2</th>
 		<th>p3</th>
 		<th>p4</th>
 		<th>p5</th>
 		<th>p6</th>
 		<th>p7</th>
 		<th>p8</th>
 		<th>p9</th>
 		<th>p10</th>
 		<th>p11</th>
 		<th>p12</th>
 		<th>p13</th>
 		<th>p14</th>
 		<th>p15</th>
 		<th>p16</th>
 		<th>p17</th>
 		<th>p18</th>
 		<th>p19</th>
 		<th>p20</th>
 		<th>p21</th>
 		<th>p22</th>
 		<th>p23</th>
 		<th>p24</th>
 		<th>p25</th>
 		<th>p26</th>
 		<th>p27</th>
 		<th>p28</th>
 		<th>p29</th>
 		<th>p30</th>
 		<th>p31</th>
 		<th>p32</th>
 		<th>p33</th>
 		<th>p34</th>
 		<th>p35</th>
 		<th>p36</th>
 		<th>p37</th>
 		<th>p38</th>
 		<th>p39</th>
 		<th>40</th>
 		<th>p41</th>
 		<th>p42</th>
 		<th>p43</th>
 		<th>p44</th>
 		<th>p45</th>
 		<th>p46</th>
 		<th>p47</th>
 		<th>p48</th>
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
 			<td><?php echo $filaR['p1']; ?></td>
 			<td><?php echo $filaR['p2']; ?></td>
 			<td><?php echo $filaR['p3']; ?></td>
 			<td><?php echo $filaR['p4']; ?></td>
 			<td><?php echo $filaR['p5']; ?></td>
 			<td><?php echo $filaR['p6']; ?></td>
 			<td><?php echo $filaR['p7']; ?></td>
 			<td><?php echo $filaR['p8']; ?></td>
 			<td><?php echo $filaR['p9']; ?></td>
 			<td><?php echo $filaR['p10']; ?></td>
 			<td><?php echo $filaR['p11']; ?></td>
 			<td><?php echo $filaR['p12']; ?></td>
 			<td><?php echo $filaR['p13']; ?></td>
 			<td><?php echo $filaR['p14']; ?></td>
 			<td><?php echo $filaR['p15']; ?></td>
 			<td><?php echo $filaR['p16']; ?></td>
 			<td><?php echo $filaR['p17']; ?></td>
 			<td><?php echo $filaR['p18']; ?></td>
 			<td><?php echo $filaR['p19']; ?></td>
 			<td><?php echo $filaR['p20']; ?></td>
 			<td><?php echo $filaR['p21']; ?></td>
 			<td><?php echo $filaR['p22']; ?></td>
 			<td><?php echo $filaR['p23']; ?></td>
 			<td><?php echo $filaR['p24']; ?></td>
 			<td><?php echo $filaR['p25']; ?></td>
 			<td><?php echo $filaR['p26']; ?></td>
 			<td><?php echo $filaR['p27']; ?></td>
 			<td><?php echo $filaR['p28']; ?></td>
 			<td><?php echo $filaR['p29']; ?></td>
 			<td><?php echo $filaR['p30']; ?></td>
 			<td><?php echo $filaR['p31']; ?></td>
 			<td><?php echo $filaR['p32']; ?></td>
 			<td><?php echo $filaR['p33']; ?></td>
 			<td><?php echo $filaR['p34']; ?></td>
 			<td><?php echo $filaR['p35']; ?></td>
 			<td><?php echo $filaR['p36']; ?></td>
 			<td><?php echo $filaR['p37']; ?></td>
 			<td><?php echo $filaR['p38']; ?></td>
 			<td><?php echo $filaR['p39']; ?></td>
 			<td><?php echo $filaR['p40']; ?></td>
 			<td><?php echo $filaR['p41']; ?></td>
 			<td><?php echo $filaR['p42']; ?></td>
 			<td><?php echo $filaR['p43']; ?></td>
 			<td><?php echo $filaR['p44']; ?></td>
 			<td><?php echo $filaR['p45']; ?></td>
 			<td><?php echo $filaR['p46']; ?></td>
 			<td><?php echo $filaR['p47']; ?></td>
 			<td><?php echo $filaR['p48']; ?></td>
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


 			
 			

 		</tr>
 	
 <?php  } ?> </table>