<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $usuario = $_SESSION["usuario"];
 $producto=$_POST['producto'];
 $precio=$_POST['precio'];
 $ubicacion=$_POST['ubicacion'];
 $cantidad=$_POST['cantidad'];
 $sql="INSERT INTO carrito VALUES('id','$usuario','$producto','$precio','$ubicacion','$cantidad')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su producto no ha sido agregado correctamente.";
 	}else{
  		echo "<script>alert('Su producto ha sido agregado correctamente.'); window.location= 'shopping-cart.php';</script>";
 	}	

?>