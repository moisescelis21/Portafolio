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
	<title>Servicio de Delivery | Registro</title>
	<?php require_once "../scripts.php"; ?>
</head>
    <link rel="shortcut icon" type="../image/png" href="img/favicon.png">
<style>

	body {
    background: url(../img/bgg.png);
    font-family: 'Roboto';
    height: 650px;
    display: flex;
    justify-content: center;
    align-items: center;
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


h1{
    text-align: center;
    font-weight: 700;
}

form{
    margin-top: 15%;
    background-color: #FFF;
    padding: 80px 150px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px ;
}

input{
    background: none;
    color: #5e5d5d;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--colorTextos);
}

input:focus{ 
    outline: none;
    color: #5e5d5d;
}


label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top: 10px;
    transition: 0.5s ease all;
    pointer-events: none;
}

input:focus~label,
input:valid~label{
    top: -14px;
    font-size: 12px;
    color: #2196f3;
}


input:focus~.barra::before{
    width: 100%;
}



select{
    background: none;
    color: #5e5d5d;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--colorTextos);
}

select:focus{ 
    outline: none;
    color: #5e5d5d;
}

select:focus~label,
select:valid~label{
    top: -14px;
    font-size: 12px;
    color: #2196f3;
}


select:focus~.barra::before{
    width: 100%;
}

	.boton {
    font-family: 'roboto';
    background: #4568DC;
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

@media screen and (max-width:500px){
    form{
        width: 80%;
    }
}

img{
    width: 120px; 
    height: 120px;
    display: block;
    margin: auto;
    margin-top: -18%;
}
</style>
<body>
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

<br><br><br>
					<form  action="usuarioM2.php?id=<?php echo $id ?>" method="POST">
                        <img src="../img/logo.png">
						<h1>Registro</h1>
										<?php 
		$id=$_GET['id'];
        $conexion=mysqli_connect('localhost','root','','empanadas');
        $sql="SELECT * FROM usuarios WHERE id=$id";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $id = $mostrar['id'];
            $nombre = $mostrar['nombre'];
            $apellido = $mostrar['apellido'];
            $email = $mostrar['email'];
            $privilegio = $mostrar['privilegio'];
            $usuario = $mostrar['usuario'];

            
?>
					<div class="grupo">
                <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra" ></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellido" id="apellido" value="<?php echo $apellido;?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Apellido</label>
            </div>
            <div class="grupo">
                <input type="text" name="usuario" value="<?php echo $usuario;?>" id="usuario"><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Usuario</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" value="<?php echo $email;?>" id="email"><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Correo Electrónico</label>
            </div>
             <div class="grupo">
                <select type="privilegio" name="privilegio"  id="privilegio">
                	<?php if ($privilegio == 1) {
                	?>
                		<option value="1">Administrador</option>
                    	<option value="0">Usuario</option>
                    <?php
                	}else{
                	?>
                		<option value="0">Usuario</option>
                    	<option value="1">Administrador</option>
                <?php
           		}
            	?>
                    
                </select><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Privilegio</label>
            </div>
					<p></p>
					<?php
					}
					?>
					<button type="submit" class="boton">Modificar</button>
					</form>
</body>
</html>




