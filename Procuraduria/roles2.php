<?php
session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 
  

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $cedula = $_POST['cedula'];
 $roles = $_POST['roles'];


 	$modificacion = ("UPDATE usuarios SET roles = '$roles' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue realizada exitosamente'); window.location= 'usuarios.php';</script>";
 			}
  			