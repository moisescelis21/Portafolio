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
<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
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

.contenedor1{
    background-color: rgba(1,1,1,0.6);
    padding: 120px 120px;
    box-shadow: 0 0 8px 0 rgba(1, 1, 1, 0.9);
    border-radius: 10px;
    width: 680px;
    height: 380px;
    margin: 4% auto;

	border-bottom: 5px solid;
	border-image: linear-gradient(to right, #38ef7d, #11998e) .5 stretch;
    

    }

h2{
	color: #fff;
	margin: -12% 0;



}

input{
	margin-top: 60px;
	  background-color: #3b4148;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: #fff;
	border: none;
	font-family: roboto;
	font-size: 20px;
	line-height: 1.5em;
	width: 250px;
	margin-left: 45px;
}
select{
	margin-top: 60px;
	  background-color: #3b4148;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: #fff;
	border: none;
	font-family: roboto;
	font-size: 20px;
	line-height: 1.5em;
	width: 250px;
	margin-left: 45px;
}
.boton {
    font-family: 'roboto';
    background: #4568DC;
    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);
    background: linear-gradient(to right, #38ef7d, #11998e);
    border: none;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
        }

.head{
margin-top: 15%;
}


</style>
<img src="img/logonuevo.png">
<body>
<?php require('./layout/nav.php') ?>
<?php 
		
		$id=$_GET['id'];
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM estudiantes WHERE id='$id'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];	
			$nombres = $mostrar['nombres'];
			$apellidos = $mostrar['apellidos'];
			$cedula = $mostrar['cedula'];
			$edad = $mostrar['edad'];
			$anio = $mostrar['anio'];
			$direccion = $mostrar['direccion'];
			$aniocurso = $mostrar['aniocurso'];
			$turno = $mostrar['turno'];
		 ?>

<div class="contenedor1">
<form action="gseccion.php?id=<?php echo $id ?>" method="POST">
	<center><h2>Agregar Seccion</h2></center>
	<div class="head">
<input type="text" placeholder="Nombres" name="nombres" id="nombres" value="<?php echo $nombres;?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
<input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" value="<?php echo $apellidos;?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
<input type="text" placeholder="Cedula" name="cedula" id="cedula" value="<?php echo $cedula;?>" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
<input type="text" id="edad" value="<?php echo $edad;?>" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" placeholder="Edad"  name="edad">
<select name="anio"  id="anio">
	<?php if ($anio == "1") { ?>
	<option value="1" selected="">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<option>Graduado</option>
	<?php }?>
	<?php if ($anio == "2") { ?>
	<option value="1">Primer Año</option>
	<option value="2" selected="">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<option>Graduado</option>
	<?php }?>
	<?php if ($anio == "3") { ?>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3" selected="">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<option>Graduado</option>
	<?php }?>
	<?php if ($anio == "4") { ?>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4" selected="">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<option>Graduado</option>
	<?php }?>
	<?php if ($anio == "5") { ?>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5" selected="">Quinto Año</option>
	<option>Graduado</option>
	<?php }?>
	<?php if ($anio == "Graduado") { ?>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<option selected="">Graduado</option>
	<?php }?>
	
</select>
<input type="text" placeholder="Dirección" value="<?php echo $direccion;?>" name="direccion" id="direccion">
<select name="seccion"  id="seccion">
	<option>Secciones</option>
	<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año = '1' AND turno = '$turno'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$letra_seccion = $mostrar['letra_seccion'];
			
		 ?>
	<option><?php echo $letra_seccion ?></option>
	<?php } ?>
</select>
<select name="turno" id="turno">
<?php if ($turno == "Mañana") { ?>
	<option value="Mañana" selected="">Mañana</option>
	<option value="Tarde">Tarde</option>
	<?php }?>
	<?php if ($turno == "Tarde") { ?>
	<option value="Mañana">Mañana</option>
	<option value="Tarde" selected="">Tarde</option>
	<?php }?>
</select>
</br>
</br>
<input type="hidden" value="<?php echo $aniocurso;?>" name="aniocurso" id="aniocurso">


<button type="submit" class="boton">Agregar Seccion</button>
</form>
</div>
</div>
<?php
}
?>



</body>
</html>