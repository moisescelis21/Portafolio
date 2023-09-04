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
 $id = $_GET['id'];
 $respuesta1=$_POST['respuesta1'];
 $respuesta2=$_POST['respuesta2'];
 $respuesta3=$_POST['respuesta3'];
 	$modificacion = ("UPDATE preguntas SET respuesta1 = '$respuesta1', respuesta2 = '$respuesta2', respuesta3 = '$respuesta3' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../preguntasver.php';</script>";
 			}
  			