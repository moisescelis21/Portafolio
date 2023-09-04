<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $producto=$_POST['producto'];
 $tipo_producto=$_POST['tipo_producto'];
 $precio=$_POST['precio'];
 $estado=$_POST['estado'];
 $disponibilidad=$_POST['disponibilidad'];
 	$modificacion = ("UPDATE productos SET producto = '$producto', tipo_producto = '$tipo_producto', precio = '$precio', estado = '$estado', disponibilidad = '$disponibilidad' WHERE id = '$id'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= 'productos.php';</script>";
 			}

 	
  			