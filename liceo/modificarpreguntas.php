<?php
session_start();
$admin=$_SESSION["admin"];
$usuario=$_SESSION["usuario"];

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

<div class="contenedor1">
		<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM preguntas WHERE usuario='$usuario' ";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$pregunta1 = utf8_encode($mostrar['pregunta1']);
			$pregunta2 = utf8_encode($mostrar['pregunta2']);
			$pregunta3 = utf8_encode($mostrar['pregunta3']);
			$respuesta1 = utf8_encode($mostrar['respuesta1']);
			$respuesta2 = utf8_encode($mostrar['respuesta2']);
			$respuesta3 = utf8_encode($mostrar['respuesta3']);

			
		 ?>
<form action="modificarpreguntas2.php?id=<?php echo $id ?>" method="POST">
	<center><h2>Modificar de Preguntas de Seguridad</h2></center>
	<div class="head">
                            <select rows="4" type="text" id="pregunta1" name="pregunta1" >
                            	<?php
                            	if ($pregunta1 == "¿Cual es su color favorito?") {
                            	?>
                            	<option selected>¿Cual es su color favorito?</option>
                                <option>¿Cual es su mes favorito?</option>
                                <option>¿Cual es su idioma favorito?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta1 == "¿Cual es su mes favorito?") {
                            	?>
                            	<option>¿Cual es su color favorito?</option>
                                <option selected>¿Cual es su mes favorito?</option>
                                <option>¿Cual es su idioma favorito?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta1 == "¿Cual es su idioma favorito?") {
                            	?>
                            	<option>¿Cual es su color favorito?</option>
                                <option>¿Cual es su mes favorito?</option>
                                <option selected>¿Cual es su idioma favorito?</option>
                            	<?php } ?>
                                
                            </select>
<input type="text" id="respuesta1" name="respuesta1" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value='<?php echo $respuesta1 ?>'>
                            <select rows="4" type="text" id="pregunta2" name="pregunta2" >
                            	<?php
                            	if ($pregunta2 == "¿Cuando es su cumpleaños?") {
                            	?>
                            	<option selected>¿Cuando es su cumpleaños?</option>
                                <option>¿Cuando es su fecha de aniversario?</option>
                                <option>¿Cuando es el cumpleaños de su madre?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta2 == "¿Cuando es su fecha de aniversario?") {
                            	?>
                            	<option>¿Cuando es su cumpleaños?</option>
                                <option selected>¿Cuando es su fecha de aniversario?</option>
                                <option>¿Cuando es el cumpleaños de su madre?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta2 == "¿Cuando es el cumpleaños de su madre?") {
                            	?>
                            	<option>¿Cuando es su cumpleaños?</option>
                                <option>¿Cuando es su fecha de aniversario?</option>
                                <option selected>¿Cuando es el cumpleaños de su madre?</option>
                            	<?php } ?>
                                
                            </select>
<input type="date" id="respuesta2" name="respuesta2" placeholder="Ingrese la Respuesta #2" value="<?php echo $respuesta2 ?>">
<select rows="4" type="text" id="pregunta3" name="pregunta3"  >
								<?php
                            	if ($pregunta3 == "¿Cual es su numero favorito?") {
                            	?>
                            	<option selected>¿Cual es su numero favorito?</option>
                                <option>¿Cual es su numero de telefono?</option>
                                <option>¿Cual es su edad?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta3 == "¿Cual es su numero de telefono?") {
                            	?>
                            	<option>¿Cual es su numero favorito?</option>
                                <option selected>¿Cual es su numero de telefono?</option>
                                <option>¿Cual es su edad?</option>
                            	<?php } ?>
                            	<?php
                            	if ($pregunta3 == "¿Cual es su edad?") {
                            	?>
                            	<option>¿Cual es su numero favorito?</option>
                                <option>¿Cual es su numero de telefono?</option>
                                <option selected>¿Cual es su edad?</option>
                            	<?php } ?>
                                
                            </select>
<input type="text" id="respuesta3" name="respuesta3" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" value='<?php echo $respuesta3 ?>'>
<input type="hidden" id="usuario" name="usuario" placeholder="Ingrese la Respuesta #3" value="<?php echo $usuario ?>">
</br>
</br>
</br>
<?php } ?>
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