<?php 
session_start();
$privilegio=$_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../index.php';</script>";
  }
?>
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

	body{
	background: url(../img/bgg.png);
    font-family: 'Roboto';
	}

	nav ul{
		list-style: none;
		padding: 0;
		border-radius: 10px;

	}

	nav li{
		line-height: 3rem;
		position: relative;
		width: 200px;

	}

	nav li ul{
		position: absolute;

	}

	nav a{
		color: #fff;
		display: block;
		padding: 0 2.5em; 
		text-decoration: none;
		transition: .5s;
	}

	nav a:hover{
		background: rgba(0,0,0,.5);
	}

	nav li ul{
		display: none;
	}

	nav li:hover > ul{
		display: block;
	}

	
	nav > ul {
		background: #474747;
		display: table;
		width: 100%;
	}

	nav > ul > li {
	float: left;
}


nav li li{
	background: #222;
	max-height: 0;
	overflow: hidden;
	transition: all .4s;
	width: 200px;
}

nav li:hover > ul > li{
	max-height: 500px;
	overflow: visible;
}

nav > ul > li > ul{
	top: 100%;
}




table{
	background: rgba(255, 255, 255, 0.4);
	text-align: left;
	border-collapse: collapse;
	width: 50%;
	transition: all .5s ease;
	margin: 6% auto;
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


</style>

<body>
<?php if ($privilegio == 1) {
?>
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
		<li><a href="">Menu</a>
		<ul>
			<li><a href="../menu/menuV.php">Empanadas</a></li>
			<li><a href="../bebidas/bebidasV.php">Bebidas</a></li>
		</ul>
		</li>
		<li><a href="../ingredientes/ingredientesV.php">Ingredientes</a></li>
		<li><a href="../compras/admin/comprasV.php">Compras</a></li>
		<li><a href="">Configuracion</a>
		<ul>
					<li><a href="../direcciones/ubicacionesV.php">Direccion de Delivery</a></li>
					<li><a href="../usuarios/usuariosV.php">Nuevo Usuario</a></li>

		</ul>
		</li>
		<li><a href="../desloguear.php">Cerrar Sesion</a></li>
	</ul>
</nav>
<?php }else{?>
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
		<li><a href="">Menu</a>
		<ul>
			<li><a href="../menu/menuV.php">Empanadas</a></li>
			<li><a href="../bebidas/bebidasV.php">Bebidas</a></li>
		</ul>
		</li>
		<li><a href="../compras/usuario/comprasV.php">Compras</a></li>
		<li><a href="">Configuracion</a>
		<ul>
					<li><a href="../direcciones/ubicacionesV.php">Direccion de Delivery</a></li>
		</ul>
		</li>
		<li><a href="../desloguear.php">Cerrar Sesion</a></li>
	</ul>
</nav>
<?php }?>
<?php if ($privilegio==1) {
?>
<a href="/empanadas/bebidas/bebidaR.php">Agregar</a>
<?php }else{}?>
<table>
	<thead>
	</tr>
		<td>Bebidas</td>
		<td>Precio</td>
		<td>Cantidad</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</thead>
</tr>
<?php 
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM bebidas";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $id = $mostrar['id'];
            
         ?>

<div class="relleno">
<tr>
	<td><?php echo $mostrar['bebida'] ?></td>
	<td><?php echo $mostrar['precio'] ?>$</td>
	<td><?php echo $mostrar['cantidad'] ?></td>
	<?php if ($privilegio == 1) {
	?>
	<td><?php echo"<a href='bebidasMP1.php?id=$id'>Modificar Precio</a>";?></td>
	<td><?php echo"<a href='bebidasA1.php?id=$id'>Agregar Cantidad</a>";?></td>
    <td><?php echo"<a href='bebidasQ1.php?id=$id'>Quitar Cantidad</a>";?></td>
    <td><?php echo"<a href='bebidasM1.php?id=$id'>Modificar</a>";?></td>
    <?php }else{} ?>
</tr>
</div>	
<?php
}
?>
</table>
	
</body>
</html>