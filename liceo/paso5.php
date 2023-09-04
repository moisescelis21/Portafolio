<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $usuario= $_SESSION["usuario"];
 $password= sha1($_POST['password']);

 	$modificacion = ("UPDATE usuarios SET password = '$password' WHERE usuario = '$usuario' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su nueva contraseña ha sido modificada exitosamente'); window.location= 'index.php';</script>";
 			}
  			