<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $pregunta1=$_POST['pregunta1'];
 $respuesta1=$_POST['respuesta1'];
 $pregunta2=$_POST['pregunta2'];
 $respuesta2=$_POST['respuesta2'];
 $pregunta3=$_POST['pregunta3'];
 $respuesta3=$_POST['respuesta3'];
 $usuario = $_SESSION["usuario"];
 $sql="INSERT INTO preguntas VALUES('id','$pregunta1','$respuesta1','$pregunta2','$respuesta2','$pregunta3','$respuesta3', '$usuario')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Sus preguntas no han sido registradas correctamente.";
 	}else{
  		echo "<script>alert('Sus preguntas han sido enviadas correctamente.'); window.location= 'preguntasver.php';</script>";
 	}	

?>