<?php
session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }else{
    if ($admin == 0) {
      echo "<script>alert('Usted no tiene permiso para ingresar aqui.'); window.location= 'inicio.php';</script>";
    }
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
<?php require_once "scripts.php"; ?>
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
    height: 250px;
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

<div class="contenedor1">
	<?php 
		$id=$_GET['id'];
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM materias WHERE id='$id'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$materias = $mostrar['materias'];
			$año = $mostrar['año'];
			
		 ?>
<form action="modificarmaterias2.php?id=<?php echo $id; ?>" method="POST">
	<center><h2>Registro de Materias</h2></center>
	<div class="head">
<input type="text" placeholder="Nombre de Materia" name="materias" id="materias" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value='<?php echo $materias ?>'>
<select name="año"  id="año">
	<?php
	if ($año == 1) {
	?>
	<option value="0">Año de Curso</option>
	<option value="1" selected>Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<?php } ?>
	<?php
	if ($año == 2) {
	?>
	<option value="0">Año de Curso</option>
	<option value="1">Primer Año</option>
	<option value="2" selected>Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<?php } ?>
	<?php
	if ($año == 3) {
	?>
	<option value="0">Año de Curso</option>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3" selected>Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<?php } ?>
	<?php
	if ($año == 4) {
	?>
	<option value="0">Año de Curso</option>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4" selected>Cuarto Año</option>
	<option value="5">Quinto Año</option>
	<?php } ?>
	<?php
	if ($año == 5) {
	?>
	<option value="0">Año de Curso</option>
	<option value="1">Primer Año</option>
	<option value="2">Segundo Año</option>
	<option value="3">Tercer Año</option>
	<option value="4">Cuarto Año</option>
	<option value="5" selected>Quinto Año</option>
	<?php }} ?>

</select>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<button type="submit" class="boton" id="registro">Registrar</button>
</form>
</div>
</div>




</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){
			if($('#nombres').val()==""){
				alertify.alert("Debes agregar los nombres");
				return false;
			}else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar los apellidos");
				return false;
			}else if($('#cedula').val()==""){
				alertify.alert("Debes agregar la cédula");
				return false;
			}else if($('#edad').val()==""){
				alertify.alert("Debes agregar la edad");
				return false;
			}else if($('#anio').val()=="0"){
				alertify.alert("Debes agregar el año de curso");
				return false;
			}else if($('#direccion').val()==""){
				alertify.alert("Debes agregar la dirección");
				return false;
			}


			cadena="nombres=" + $('#nombres').val() +
					"&apellidos=" + $('#apellidos').val() +
					"cedula=" + $('#cedula').val() + 
					"edad=" + $('#edad').val() + 
					"anio=" + $('#anio').val() + 
					"direccion=" + $('#direccion').val();



					});
		});	

</script>