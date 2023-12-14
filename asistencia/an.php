<?php
session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>


	body{
	background: url(img/bg2.jpg);
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto';
    height: 650px;
	}
nav ul{
	list-style: none;
	padding: 0;
}

nav li{
	line-height: 3rem;
	position: relative;
	width: 300px;
}

nav li ul {
	position: absolute;
}

nav a{
	text-decoration: none;
	color: #fff;
	display: block;
	padding: 0 2.5em;
	transition: .4s;
}

nav a:hover{
	background: rgba(0,0,0,.5);
}




/*PRIMER NIVEL*/

nav > ul {
	background: #333 ;
	display: table;
	width: 100%;

}

nav > ul > li {
	float: left;
}

/*SEGUNDO NIVEL*/

nav li li {
	background: #222;
	width: 300px;
	max-height: 0;
	overflow: hidden;

}

nav li:hover > ul > li {
	max-height: 1000px;
	overflow: visible; 
}

nav > ul > li > ul{
	top: 100%;
}

/*TERCER NIVEL*/

nav ul ul ul {
	left: 100%;
	top: 0;
}
img{
	width: 100px;
	height: 110px;
	margin: auto;
	float: right;
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
<img src="img/logonuevo.png">
<body>
<?php require('./layout/nav.php') ?>
<table>
	<thead>
	</tr>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Cedula</td>
		<td>Edad</td>
		<td>Año</td>
		<td>Seccion</td>
		<td>Direccion</td>
		<td>Año en Curso</td>
		<td>Turno</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</thead>
</tr>
	<?php 
		
		$anio = $_GET['anio'];
		$seccion = $_GET['seccion'];
		$turno = $_GET['turno'];
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM estudiantes WHERE anio='$anio' AND seccion='$seccion' AND turno='$turno'";

		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$anio2 = $mostrar['anio'];
			$cedula = $mostrar['cedula'];
			
		 ?>
<div class="relleno">
<tr>
	<td><?php echo $mostrar['nombres'];?></td>
	<td><?php echo $mostrar['apellidos'];?></td>
	<td><?php echo $mostrar['cedula'];?></td>
	<td><?php echo $mostrar['edad'];?></td>
	<?php
	if ($anio2 == '1') {
	?>
	<td><?php echo 'Primer Año';?></td>
	<?php	} ?>
	<?php
	if ($anio2 == '2') {
	?>
	<td><?php echo 'Segundo Año';?></td>
	<?php	} ?>
	<?php
	if ($anio2 == '3') {
	?>
	<td><?php echo 'Tercer Año';?></td>
	<?php	} ?>
	<?php
	if ($anio2 == '4') {
	?>
	<td><?php echo 'Cuarto Año';?></td>
	<?php	} ?>
	<?php
	if ($anio2 == '5') {
	?>
	<td><?php echo 'Quinto Año';?></td>
	<?php	} ?>
	<?php if ($mostrar['seccion'] == "NULL") { ?>
		<td><?php echo "Sin Seccion";?></td>
	<?php }else{ ?>
		<td><?php echo $mostrar['seccion'];?></td>
	<?php } ?>
	
	<td><?php echo $mostrar['direccion'];?></td>
	<td><?php echo $mostrar['aniocurso'];?></td>
	<td><?php echo $mostrar['turno']?></td>
		<td><a href='addnotas.php?id=<?php echo $id ?>'>Agregar Notas</a></td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio2 ?>&lapso=1'>Visualizar Primer Lapso</a>
		<br>
		<a href='modificarnota.php?id=<?php echo $id ?>&año=<?php echo $anio2 ?>&lapso=1'>Modificar Primer Lapso</a>
	</td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio2 ?>&lapso=2'>Visualizar Segundo Lapso</a>
		<br>
		<a href='modificarnota.php?id=<?php echo $id ?>&año=<?php echo $anio2 ?>&lapso=2'>Modificar Segundo Lapso</a>
	</td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio2 ?>&lapso=3'>Visualizar Tercer Lapso</a>
		<br>
		<a href='modificarnota.php?id=<?php echo $id ?>&año=<?php echo $anio2 ?>&lapso=3'>Modificar Tercer Lapso</a>
	</td>
	<td><a href='vernotas3.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio2 ?>'>Visualizar Notas Totales</a></td>


	
</tr>
<?php
}
?>
</div>	
</table>
	
</body>
</html>