<?php
session_start();

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $pregunta=$_POST['pregunta'];
 $respuesta1=$_POST['respuesta1'];
 $respuesta2=$_POST['respuesta2'];
 $respuesta3=$_POST['respuesta3'];
 $respuesta4=$_POST['respuesta4'];
 $respuestacorrecta=$_POST['respuestacorrecta'];

 $sql="INSERT INTO pregunta VALUES('id','$pregunta','$respuesta1','$respuesta2','$respuesta3','$respuesta4','$respuestacorrecta','No Contestada')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su pregunta no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su pregunta ha sido registrado correctamente.'); window.location= 'pregunta.php';</script>";
 	}	

?>