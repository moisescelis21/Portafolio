<?php
session_start();
$admin=$_SESSION["admin"];
$cedula=$_SESSION["cedula"];
$usuario = $_SESSION["usuario"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="./img/favicon.png">
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
	<button style="background-color: #C12C0C; border-radius: 10px; "><a href="preguntas2.php" style=" text-decoration: none; color: black;">Crear Preguntas</a></button>
	<thead>
	</tr>
		<td>Pregunta #1</td>
		<td>Pregunta #2</td>
		<td>Pregunta #3</td>
		<td>Acciones</td>
		<td></td>
	</thead>
</tr>
	<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM preguntas WHERE usuario='$usuario' ";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			
		 ?>
<div class="relleno">
<tr>
	<td><?php echo $mostrar['pregunta1'];?></td>
	<td><?php echo $mostrar['pregunta2'];?></td>
	<td><?php echo $mostrar['pregunta3'];?></td>
	<td><a href='modificarpreguntas.php?id=<?php echo $id ?>'>Modificar</a></td>
	<td><a href='preguntaseliminar.php?id=<?php echo $id ?>'>Eliminar</a></td>

	
</tr>
<?php
}
?>
</div>	
</table>
	
</body>
</html>