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

    background-color: #FF5346;
    padding: 120px 120px;
    box-shadow: 0 0 20px 0 rgba(255, 107, 107, 0.9);
    border-radius: 10px;
    width: 650px;
    height: 180px;
    margin: 15% auto;


    }

h2{
	color: #fff;
	margin: -12% 0;






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
				<a href="#">Inicio</a>
				<a href="#">Usuario</a>
				<a href="#">Cerrar Sesión</a>
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
			<a href="#">Agregar Carga Familiar</a>
			<a href="#">Agregar Hogar</a>
			<a href="#">Agregar Líder de Calle</a>
			<a href="#">Registro de Usuarios</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

<div class="contenedor1">

	<center><h2>patria</h2></center>
	<div class="head">

</div>
</div>




</body>
</html>