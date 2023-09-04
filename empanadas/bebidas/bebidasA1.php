<?php 
session_start();
$privilegio=$_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../index.php';</script>";
  }
if ($privilegio == 0) {
  echo "<script>alert('No tienes permiso para entrar aqui.'); window.location= '../index.php';</script>";
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
<div class="contenedor1">
<?php 
		$id=$_GET['id'];
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM bebidas WHERE id=$id";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $id = $mostrar['id'];
            $bebida = $mostrar['bebida'];

            
?>
<form action="bebidasA2.php?id=<?php echo $id ?>" method="POST">
	<center><h2>Agregar Cantidad de Bebidas</h2></center>
	<div class="head">
<input type="text" name="bebida" id="bebida" value="<?php echo $bebida;?>" placeholder="Ingrese el tipo de bebida">
<?php
}
?>
<input type="text" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
<button type="submit" class="boton">Registrar</button>
</div>
</div>
</form>



</body>
</html>