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

 $producto=$_POST['producto'];
 $tipo_producto=$_POST['tipo_producto'];
 $precio=$_POST['precio'];
 $estado=$_POST['estado'];
 $disponibilidad=$_POST['disponibilidad'];
 $img=$_FILES["img"]["name"];
 $img2=$_FILES["img"]["tmp_name"];
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $ruta = $ubi . '/img/product/'. basename($img);
 move_uploaded_file($img2, $ruta);
 $ubicacion = "img/product/" . $img;
 $sql="INSERT INTO productos VALUES('id','$producto','$tipo_producto','$precio','$ubicacion','$estado','$disponibilidad')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su producto no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su producto ha sido registrado correctamente.'); window.location= 'productos.php';</script>";
 	}	

?>