<?php 
session_start();
$id = $_GET['id'];
$privilegio=$_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../../index.php';</script>";
  }
if ($privilegio == 0) {
  echo "<script>alert('No tienes permiso para entrar aqui.'); window.location= '../../index.php';</script>";
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
	background: url(../../img/bgg.png);
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



.contenedor1{
    background-color: rgba(1,1,1,0.6);
    padding: 120px 120px;
    box-shadow: 0 0 8px 0 rgba(1, 1, 1, 0.9);
    border-radius: 10px;
    width: 650px;
    height: 180px;
    margin: 10% auto;


    

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

.head{
margin-top: 15%;
}
.boton {
    font-family: 'roboto';
    background-color: #CCB89F;
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

    .boton:hover{
        background-color: #C0AA8E;
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
			<li><a href="../../menu/menuV.php">Empanadas</a></li>
			<li><a href="../../bebidas/bebidasV.php">Bebidas</a></li>
		</ul>
		</li>
		<li><a href="../../ingredientes/ingredientesV.php">Ingredientes</a></li>
		<li><a href="../../compras/admin/comprasV.php">Compras</a></li>
		<li><a href="">Configuracion</a>
		<ul>
					<li><a href="../../direcciones/ubicacionesV.php">Direccion de Delivery</a></li>
					<li><a href="../../usuarios/usuariosV.php">Nuevo Usuario</a></li>
		</ul>
		</li>
		<li><a href="../../desloguear.php">Cerrar Sesion</a></li>
	</ul>
</nav>
<?php }else{?>
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
		<li><a href="">Menu</a>
		<ul>
			<li><a href="../../menu/menuV.php">Empanadas</a></li>
			<li><a href="../../bebidas/bebidasV.php">Bebidas</a></li>
		</ul>
		</li>
		<li><a href="../../compras/usuario/comprasV.php">Compras</a></li>
		<li><a href="">Configuracion</a>
		<ul>
					<li><a href="../../direcciones/ubicacionesV.php">Direccion de Delivery</a></li>
		</ul>
		</li>
		<li><a href="../../desloguear.php">Cerrar Sesion</a></li>
	</ul>
</nav>
<?php }?>
<div class="contenedor1">
<form>
	<center><h2>Visualizacion de Compras</h2></center>
	<div class="head">
		<?php 
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM compras WHERE id='$id'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
	<input type="text" id="empanada" name="empanada" readonly="" value="<?php echo $mostrar['empanada'];?>">
	<input type="text" id="cantidadE" name="cantidadE" readonly="" value="<?php echo $mostrar['cantidadE'];?>">
	</br>
	<input type="text" id="bebida" name="bebida" readonly="" value="<?php echo $mostrar['bebida'];?>">
	<input type="text" id="cantidadB" name="cantidadB" readonly="" value="<?php echo $mostrar['cantidadB'];?>">
	</br>
	<input id="ubicacion" name="ubicacion" readonly="" value="<?php echo $mostrar['ubicacion'];?>">
	<input id="precioT" name="precioT" readonly="" value="<?php echo $mostrar['precioT'];?>$">
	<?php
	 }
	 ?>
<button class="boton"><a href="comprasV.php">Volver</a></button>
</div>
</div>
</form>



</body>
</html>

