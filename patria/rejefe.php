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
	




table{
	background: #FF5C5C;
	text-align: center;
	border-collapse: collapse;
	width: 60%;
	transition: all .5s ease;
	margin: 16% 18%;
	border-radius: 10px;

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

.button{
	position: absolute;
	display: inline-block;
	height: 40px;
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
    margin-top: -4%;
    margin-left: 18%;
    }

.button:hover{
	background: rgba(223, 179, 89, 0.7);
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
	<div>
	
</div>
<div>
		<td><button class="button"><a href="rejefe2.php">Agregar</a></button></td>

<table>
	
	<thead>
	</tr>
		<td>Nombre y Apellido</td>
		<td>Cedula</td>
		<td>Edad</td>
		<td>Sexo</td>
		<td>Direccion de Calle</td>
		<td>Agregado Por</td>
		<td>Carga Familiar</td>
		<td></td>
		<td></td>
		<td></td>
	</thead>
</tr>

<div class="relleno">
<?php
		$conexion=mysqli_connect('localhost','root','','patria');
		$sql="SELECT * FROM jefecasa";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$cedula = $mostrar['cedula'];
			$direccion = $mostrar['direccion'];
			$carga = $mostrar['carga'];
		 ?>

		 <div id="relleno">
		<tr>
			<td><?php echo $mostrar['name'] ?></td>
			<td><?php echo $mostrar['cedula'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td><?php echo $mostrar['sexo'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['agregado'] ?></td>
			<td><?php echo $mostrar['carga'] ?></td>	
			<td><?php echo"<a href='cargafamiliar.php?cedulaje=$cedula&direccionje=$direccion&carga=$carga' style='text-decoration: none;'>Agregar Carga Familiar</a>";?></td>	
			<td><?php echo"<a href='hogares.php?cedula=$cedula' style='text-decoration: none;'>Visualizar Hogar</a>";?></td>			
			<td><?php echo"<a href='rejefe4.php?id=$id' style='text-decoration: none;'>Modificar</a>";?></td>
</tr>
</div>	
<?php 
	}
?>
</table>
	</div>
</body>
</html>