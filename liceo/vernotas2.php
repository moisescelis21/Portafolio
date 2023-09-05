<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style type="text/css">
	img{
	width: 100px;
	height: 80px;
	margin-top: -30px;
	float: left;
}



table{
	background: rgba(255, 255, 255, 0.6);
	text-align: left;
	border-collapse: collapse;
	width: 90%;
	transition: all .5s ease;
	margin: 6% auto;
}


td, tr{
	padding: 10px;
}

thead{
	background-color: #333;
	color: white;
}

.relleno:hover{
	background-color: #369681;
	color: white;
}


</style>
</head>
<img src="img/logonuevo.png">
<div style="font-size:10px; text-align: center;">
<p style="position: relative; border-right: 12%;">REPUBLICA BOLIVARIANA DE VENEZUELA</p>
<p style="position: relative; border-right: 10%;">MINISTERIO DEL PODER POPULAR PARA LA EDUCACION</p>
<p>ZONA EDUCATIVA DEL ESTADO BOLIVAR</p>
<p>UNIDAD EDUCATIVA NACIONAL "PEDRO RAFAEL BUCARITO"</p>
<p>CIUDAD BOLIVAR - ESTADO BOLIVAR</p>
</div>
<?php $año = $_GET['año'];
$cedula = $_GET['cedula'];
$lapso2 = $_GET['lapso']; ?>
<?php if ($lapso2 == "1") {
?>
<div><h1 style="text-align: center;">BOLETIN DE NOTAS DEL PRIMER LAPSO</h1></div>
<?php
}elseif ($lapso2 == "2") {
?>
<div><h1 style="text-align: center;">BOLETIN DE NOTAS DEL SEGUNDO LAPSO</h1></div>
<?php
}elseif ($lapso2 == "3") {
?>
<div><h1 style="text-align: center;">BOLETIN DE NOTAS DEL TERCER LAPSO</h1></div>
<?php
} ?>

<body>
<?php 
$conexion=mysqli_connect('localhost','root','','liceo');
		$sql2="SELECT * FROM estudiantes WHERE cedula='$cedula'";
		$result2=mysqli_query($conexion,$sql2);
		while($mostrar2=mysqli_fetch_array($result2)){

			$id = $mostrar2['id'];
			$nombres = $mostrar2['nombres'];
			$apellidos = $mostrar2['apellidos'];
			$anio = $mostrar2['anio'];
			$seccion = $mostrar2['seccion'];
			$aniocurso = $mostrar2['aniocurso'];
	
			if ($año == "1") {
				$año2 = "Primer Año";
			}
			if ($año == "2") {
				$año2 = "Segundo Año";
			}
			if ($año == "3") {
				$año2 = "Tercer Año";
			}
			if ($año == "4") {
				$año2 = "Cuarto Año";
			}
			if ($año == "5") {
				$año2 = "Quinto Año";
			}
			if ($año == "6") {
				$año2 = "Sexto Año";
			}
		 ?>
<p>Nombre:<?php echo $nombres ?></p>
<p>Apellido:<?php echo $apellidos ?></p>
<p>Año del Estudiante:<?php echo $año2 ?></p>
<p>Seccion:<?php echo $seccion ?></p>
<p>Año del Curso:<?php echo $aniocurso ?></p>





<?php
}
?>
<table >
	<thead>
	<tr>
		<td>Materia</td>

		<td>Notas</td>
		<td>Año</td>
</tr>
</thead>
<tbody>

<?php 
		
		if ($lapso2 == '1') {
			$lapso2 = "Primer Lapso";
		}
		if ($lapso2 == '2') {
			$lapso2 = "Segundo Lapso";
		}
		if ($lapso2 == '3') {
			$lapso2 = "Tercer Lapso";
		}
		$promedio1 = 0;
		$promedio2 = 0;
		$promedio3 = 0;
		$contador = 0;
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM notas WHERE cedula='$cedula' AND año='$año'";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			
			$id = $mostrar['id'];
			$materia = $mostrar['materia'];
			$notas1 = $mostrar['nota1'];
			$promedio1 = $promedio1 + $notas1;
			$notas2 = $mostrar['nota2'];
			$promedio2 = $promedio2 + $notas1;
			$notas3 = $mostrar['nota3'];
			$promedio3 = $promedio3 + $notas1;
			$contador++;

			
		 ?>
	<tr>
	<?php

	if ($lapso2 == 'Primer Lapso') {
	?>
	<td><?php echo $materia ?></td>
	<td><?php echo $notas1?></td>
	<td><?php echo $año?></td>
	<?php }elseif ($lapso2 == 'Segundo Lapso') {
	?>
	<td><?php echo $materia ?></td>
	<td><?php echo $notas2 ?></td>
	<td><?php echo $año ?></td>
	<?php }elseif ($lapso2 == 'Tercer Lapso') {
	?>
	<td><?php echo $materia ?></td>
	<td><?php echo $notas1 ?></td>
	<td><?php echo $año ?></td>
	<?php } ?>

<?php
}
?>
</tr>
<?php if ($lapso2 == 'Primer Lapso') {
?>
<?php if ($año == '1' OR $año == '2' OR $año == '3' OR $año == '4') {
?>
<tr>
	<td>Promedio Total: <?php echo round($promedio1/9,2); ?></td>
</tr>
<?php }else{
	?>
	<tr>
	<td>Promedio Total: <?php echo round($promedio1/10,2); ?></td>
	</tr>
<?php } ?>


<?php }elseif ($lapso2 == 'Segundo Lapso') {
	?>
	<?php if ($año == '1' OR $año == '2' OR $año == '3' OR $año == '4') {
?>
	<td>Promedio Total: <?php echo round($promedio2/9,2); ?></td>
<?php }else{
	?>
	<td>Promedio Total: <?php echo round($promedio2/10,2); ?></td>
<?php } ?>
<?php }elseif ($lapso2 == 'Tercer Lapso') {
	?>
	<?php if ($año == '1' OR $año == '2' OR $año == '3' OR $año == '4') {
?>
	<td>Promedio Total: <?php echo round($promedio3/9,2); ?></td>
	<?php }else{
	?>
	<td>Promedio Total: <?php echo round($promedio3/10,2); ?></td>
	<?php } ?>
<?php } ?>


</tbody>

</table>
	
</body>
</html>