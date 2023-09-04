<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>


	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Roboto', sans-serif;
		text-decoration: none;
		color: #fff;
	}
	body{
		background: #fff;
		background-size: 100vw 100vh;
		background-repeat: no-repeat;
	}
	.capa{
		position: fixed;
		width: 100%;
		height: 100vh;
		
		z-index: -1;
		top: 0;left: 0;
	}
	.header{
		width: 100%;
		height: 100px;
		position: fixed;
		top: 0;left: 0;

	}
	.container{
		width: 90%;
		max-width: 1200px;
		margin: auto;
	}
	.container .btn-menu, .logo{
		float: left;
		line-height:100px;
	}
	.container .btn-menu label{
		color: #010101;
		font-size: 25px;
		cursor: pointer;
	}
	.logo h1{
		color: #010101;
		font-weight: 400;
		font-size: 22px;
		margin-left: 10px;
	}
	.container .menu{
		float: right;
		line-height: 100px;
	}
	.container .menu a{
		display: inline-block;
		padding: 15px;
		line-height: normal;
		text-decoration: none;
		color: #010101;
		transition: all 0.3s ease;
		border-bottom: 2px solid transparent;
		font-size: 15px;
		margin-right: 5px;
	}
	.container .menu a:hover{
		border-bottom: 2px solid #FF5C5C;
		padding-bottom: 5px;
	}

	#btn-menu{
		display: none;
	}
	.container-menu{
		position: absolute;
		background: rgba(0,0,0,0.5);
		width: 100%;
		height: 100vh;
		top: 0;left: 0;
		transition: all 500ms ease;
		opacity: 0;
		visibility: hidden;
	}
	#btn-menu:checked ~ .container-menu{
		opacity: 1;
		visibility: visible;
	}
	.cont-menu{
		width: 100%;
		max-width: 210px;
		background: #FF5C5C;
		height: 100vh;
		position: relative;
		transition: all 500ms ease;
		transform: translateX(-100%);
		font-weight: bold;	
	}
	#btn-menu:checked ~ .container-menu .cont-menu{
		transform: translateX(0%);
	}
	.cont-menu nav{
		transform: translateY(15%);
	}
	.cont-menu nav a{
		display: block;
		text-decoration: none;
		padding: 20px;
		color: #010101;
		border-left: 5px solid transparent;
		transition: all 400ms ease;
	}
	.cont-menu nav a:hover{
		border-left: 5px solid #c7c7c7;
		background: rgba(255,255,255,0.2);
		color: #FFF;
	}
	.cont-menu label{
		position: absolute;
		right: 5px;
		top: 10px;
		color: #010101;
		cursor: pointer;
		font-size: 18px;
	}


	.logo2{
		width: 210px;
		height: 120px;
		margin-top: -25%;

	}
	


.contenedor1{

    background-color: #FF5C5C;
    padding: 150px 150px;
    box-shadow: 0 0 20px 0 rgba(255, 107, 107, 0.9);
    border-radius: 10px;
    width: 700px;
    height: 180px;
    margin: 15% auto;


    }

h2{
	color: #fff;
	margin: -12% 0;
}
input {
    background-color: #fff;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: black;
	margin-bottom: 0.5em;
	width: 49%;
	padding: 15px 12px;
	border: none;
	font-family: roboto;
	font-size: 20px;
	line-height: 1.3em;
	padding: 2px;
	-webkit-appearance: none;
	text-indent: 5px;
}


select {
    background-color: #fff;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: black;
	margin-bottom: 0.5em;
	width: 49%;
	padding: 15px 12px;
	border: none;
	font-family: roboto;
	font-size: 20px;
	line-height: 1.3em;
	padding: 2px;
	-webkit-appearance: none;
	text-indent: 7px;
}

::placeholder{
	color: #A7A6A6;
	font-size: 16px;
}

.boton{
	height: 40px;
	margin-top: 6px;
	background: #DEA93F;
	color: #FFFFFF;
    width: 150px;
    border: none;
    padding: 10px;
    font-size: 16px;
    font-family: Roboto;
    font-weight: bold;
    letter-spacing: 0.3px;
    cursor: pointer;
    transition: all .5s ease;
    border-radius: 5px;
    }

.boton:hover{
	background: rgba(223, 179, 89, 0.7);
}

.content{
	margin-top: 12%;
}

.texto{
	font-family: roboto;
	color: #fff;
	font-size: 20px;
	margin-top: -30%;

}



</style>

<body>
<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Menú</h1>
			</div>
			<nav class="menu">
				<a href="menu.php">Inicio</a>
				<a href="#">Usuario</a>
				<a href="rejefe.php">Regresar</a>
				<a href="index.php">Cerrar Sesión</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<img class="logo2" src="../patria/img/logo2.png">
			<a href="#">Control</a>
			<a href="rejefe.php">Agregar Jefe de Casa</a>
			<a href="relider.php">Agregar Líder de Calle</a>
			<a href="usuarios.php">Registro de Usuarios</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

<div class="contenedor1">


<div class="head">
<form action="rejefe3.php" method="POST">
	<div class="texto">
<center><h3>Registro de Jefes de Casa</h3></center>
</div>
	<div class="content">
		
<input type="text" placeholder="Nombre y Apellido" id="name" name="name" >
<input type="text" placeholder="Cedula" id="cedula" name="cedula" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
<input type="text" placeholder="Edad" id="edad" name="edad" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
<select id="sexo" name="sexo">
	<option>Masculino</option>
	<option>Femenino</option>
</select>
<input type="text" placeholder="Direccion de la Casa" id="direccion" name="direccion">
</div>
<button class="boton" id="entrarSistema" type="submit">Registrar</button>
</div>
</div>
</form>



</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#name').val()==""){
				alertify.alert("Ingrese su Nombre y Apellido");
				return false;

			}else if($('#cedula').val()==""){
				alertify.alert("Ingrese su Cedula");
				return false;
			}else if($('#edad').val()==""){
				alertify.alert("Ingrese su Edad");
				return false;
			}else if($('#sexo').val()==""){
				alertify.alert("Seleccione su Sexo");
				return false;
			}else if($('#direccion').val()==""){
				alertify.alert("Ingrese la Direccion de la Calle");
				return false;
			}
			

	
		});	
	});