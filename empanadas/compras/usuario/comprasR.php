<?php 
session_start();
$privilegio=$_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../../index.php';</script>";
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
<form action="comprasR2.php" method="POST">
	<center><h2>Registro de Compras</h2></center>
	<div class="head">
<select id="empanada" name="empanada">
<option selected="" disabled="">Empanadas</option>
	<?php 
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM menu";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            
         ?>
    
	<option><?php echo $mostrar['empanada'];?></option>
	<?php
	 }
	 ?>
</select>
<input type="text" id="cantidadE" name="cantidadE" placeholder="Ingrese la cantidad de empanada">
</br>
<select id="bebida" name="bebida">
<option selected="" disabled="">Bebidas</option>
	<?php 
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM bebidas";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            
         ?>
    
	<option><?php echo $mostrar['bebida'];?></option>
	<?php
	 }
	 ?>
</select>
<input type="text" id="cantidadB" name="cantidadB" class="cantidadB" placeholder="Ingrese la cantidad de bebida">

</br>
<select name="ubicacion" id="ubicacion">
<option selected="" disabled="">Direcciones de Delivery</option>
<?php 
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $usuario = $_SESSION["usuario"];
        $sql="SELECT * FROM direcciones WHERE usuario='$usuario'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            
         ?>

	<option><?php echo $mostrar['ubicacion'];?></option>
	<?php
	 }
	 ?>
</select>
<button type="submit" class="boton">Registrar</button>
</div>
</div>
</form>



</body>
</html>

