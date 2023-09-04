
<!DOCTYPE html>
<html>
<head>
	<title>Constancia </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style type="text/css">
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'roboto', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}

}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }

  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: #FFC300;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}

img{
  width: 320px;
  height: 85px;
}



table{
  background: rgba(25, 120, 204,1);
   box-shadow: 0 0 9px 0 rgba(25, 120, 204, 0.9);
  text-align: left;
  border-collapse: collapse;
  width: 50%;
  transition: all .5s ease;
  margin: auto;
  border-radius: 10px;
}


td, tr{
  padding: 10px;
}

thead{
  background-color: #333;
  color: white;
}

</style>
</head>
<body>
	<center><img src="../img/logo3.png" style="height: 60; width: 500px;"></center>
	<?php
	$date = date('d');
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$date2 = $meses[date('n')-1];
	$date3 = date('Y');
	 ?>
	<p style="text-align: right; font-size: 15px;">Ciudad Bolivar, <?php echo $date; ?> de <?php echo $date2; ?> del <?php echo $date3; ?></p>
  <center><h1>Reporte de Inventario</h1></center>
	<br><br><br><br>
<div>

<table>
  
  <thead>
  <tr>
    <td>Objeto</td>
    <td>Cantidad</td>
    <td>Cantidad Anterior</td>
    <td>Cantidad Nueva</td>
    <td>Tipo de Movimiento</td>
    <td>Fecha</td>  
  </thead>
</tr>
<?php 
$tipo=$_GET['tipo'];
if ($tipo == 'Agregar') {
        $fechaI=$_GET['fechaI'];
        $fechaF=$_GET['fechaF'];
        $conexion=mysqli_connect('localhost','root','','javier');
        $sql="SELECT * FROM movimientos WHERE fecha >= '$fechaI' AND fecha <= '$fechaF' AND tipo = 'Agregar'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $mostrar['objeto'] ?></td>
        <td><?php echo $mostrar['cantidad'] ?></td>
        <td><?php echo $mostrar['cantanterior'] ?></td>
        <td><?php echo $mostrar['cantnueva'] ?></td>
        <td><?php echo $mostrar['tipo'] ?></td>
        <td><?php echo $mostrar['fecha'] ?></td> 
        </tr>
<?php }} ?>
<?php
if ($tipo == 'Quitar') {
        $fechaI=$_GET['fechaI'];
        $fechaF=$_GET['fechaF'];
        $conexion=mysqli_connect('localhost','root','','javier');
        $sql="SELECT * FROM movimientos WHERE fecha >= '$fechaI' AND fecha <= '$fechaF' AND tipo = 'Quitar'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $mostrar['objeto'] ?></td>
        <td><?php echo $mostrar['cantidad'] ?></td>
        <td><?php echo $mostrar['cantanterior'] ?></td>
        <td><?php echo $mostrar['cantnueva'] ?></td>
        <td><?php echo $mostrar['tipo'] ?></td>
        <td><?php echo $mostrar['fecha'] ?></td> 
        </tr>
<?php }} ?>
<?php 
if ($tipo == 'Todo') {
        $fechaI=$_GET['fechaI'];
        $fechaF=$_GET['fechaF'];
        $conexion=mysqli_connect('localhost','root','','javier');
        $sql="SELECT * FROM movimientos WHERE fecha >= '$fechaI' AND fecha <= '$fechaF'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td><?php echo $mostrar['objeto'] ?></td>
        <td><?php echo $mostrar['cantidad'] ?></td>
        <td><?php echo $mostrar['cantanterior'] ?></td>
        <td><?php echo $mostrar['cantnueva'] ?></td>
        <td><?php echo $mostrar['tipo'] ?></td>
        <td><?php echo $mostrar['fecha'] ?></td> 
        </tr>
<?php }} ?>
?>       


</table>
  </div>
</body>
</html>