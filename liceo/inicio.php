<?php
session_start();
$admin=$_SESSION["admin"];
$cedula=$_SESSION["cedula"];
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

.contenedor2{
	margin-top: 10%;
    background-color: rgba(1,1,1,0.6);
    width: 40%;
    height: 30%;
    margin: 5% 23%;
    padding: 120px 120px;
    box-shadow: 0 0 8px 0 rgba(1, 1, 1, 0.9);
    border-radius: 10px;
      display: flex;
  justify-content: center;
  align-items: center;


	border-bottom: 5px solid;
	border-image: linear-gradient(to right, #38ef7d, #11998e) .5 stretch;
}

h1{
	color: #fff;
	font-family: roboto;

}

.img1{
	width: 200px;
	height: 300px;
	margin-top: -10%;
	



}



	</style>
<body>

<img src="img/logonuevo.png">
<?php require('./layout/nav.php') ?>

<?php if ($_SESSION["admin"] == 1) { 
?>
<div class="contenedor2">

<img class="img1" src="img/logonuevo.png">
</div>
<?php
}else
?>

<div class="contenedor1">
<?php if ($_SESSION["admin"] == 0) {
?>
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
		<td>Notas</td>
		<td>Notas</td>
		<td>Notas</td>
		<td>Notas</td>
	</thead>
</tr>
	<?php 
		
		
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM estudiantes WHERE cedula='$cedula'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$anio = $mostrar['anio'];
			
		 ?>
<div class="relleno">
<tr>
	<td><?php echo utf8_encode($mostrar['nombres']);?></td>
	<td><?php echo utf8_encode($mostrar['apellidos']);?></td>
	<td><?php echo $mostrar['cedula'];?></td>
	<td><?php echo $mostrar['edad'];?></td>
	<td><?php echo $mostrar['anio'];?></td>
	<td><?php echo utf8_encode($mostrar['seccion']);?></td>
	<td><?php echo utf8_encode($mostrar['direccion']);?></td>
	<td><?php echo $mostrar['aniocurso'];?></td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio ?>&lapso=1'>Ver Primer Lapso</a></td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio ?>&lapso=2'>Ver Segundo Lapso</a></td>
	<td><a href='vernotas.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio ?>&lapso=3'>Ver Tercer Lapso</a></td>
	<td><a href='vernotas3.php?cedula=<?php echo $cedula ?>&año=<?php echo $anio ?>'>Ver Definitivas</a></td>


	
</tr>
<?php
}
?>
</div>	
</table>













<?php
}
?>




</body>
</html>