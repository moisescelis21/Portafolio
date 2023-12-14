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
    height: 480px;
    margin: 2% auto;

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
		$id = $_GET['id'];
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM estudiantes WHERE id='$id'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$cedula = $mostrar['cedula'];
			$año = $mostrar['anio'];

			
		 ?>
		 
<form action="modificarnota2.php" method="POST">
	<center><h2>Modificacion de Notas</h2></center>
	<div class="head">
<?php 
		$materia2 = 0;
		$nota2 = 0;
		$contador = 0;
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql2="SELECT * FROM materias WHERE año='$año'";
		$result2=mysqli_query($conexion,$sql2);

		while($mostrar2=mysqli_fetch_array($result2)){
			$id = $mostrar2['id'];
			$materia = $mostrar2['materias'];
			$materia2++;
			$nota2++;
			

			
		 ?>
<?php 
		$lapso = $_GET['lapso'];
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql3="SELECT * FROM notas WHERE cedula='$cedula' AND año='$año'";
		$result3=mysqli_query($conexion,$sql3);
		$nota =  array();
		$contador++;
		while($mostrar3=mysqli_fetch_array($result3)){
			$id = $mostrar3['id'];
			if ($lapso == 1) {
				$nota3 = $mostrar3['nota1'];
				$nota4 =  array_push($nota, $nota3);
			}elseif ($lapso == 2) {
				$nota3 = $mostrar3['nota2'];
				$nota4 =  array_push($nota, $nota3);
		}elseif ($lapso == 3) {
				$nota3 = $mostrar3['nota3'];
				$nota4 =  array_push($nota, $nota3);
			}
			
			
}
			
		 ?>


<input type="text" placeholder="<?php echo $materia; ?>" name="nota<?php echo $nota2 ?>" value='<?php echo $nota[$contador-1]; ?>' id="nota<?php echo $nota2 ?>" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
<input type="hidden" value="<?php echo $materia; ?>" name="materia<?php echo $materia2 ?>" id="materia<?php echo $materia2 ?>">
<?php }  ?>
<input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula; ?>">
<input type="hidden" name="año" id="año" value="<?php echo $año; ?>">
<input type="hidden" name="lapso" id="lapso" value="<?php echo $lapso; ?>">
</br>
</br>
<?php }?>
<button type="submit" class="boton" id="registro">Modificar</button>
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