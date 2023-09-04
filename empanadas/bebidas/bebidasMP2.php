<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $precio=$_POST['precio'];

 	$modificacion = ("UPDATE bebidas SET precio = '$precio' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('El precio ha sido modificado exitosamente'); window.location= 'bebidasV.php';</script>";
 			}
  			