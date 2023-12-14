<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 
  session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../index.php';</script>";
  }else{
    if ($admin == 0) {
      echo "<script>alert('Usted no tiene permiso para ingresar aqui.'); window.location= '../inicio.php';</script>";
    }
  }
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id=$_GET['id'];
 $pregunta1=$_POST['pregunta1'];
 $respuesta1=$_POST['respuesta1'];
 $pregunta2=$_POST['pregunta2'];
 $respuesta2=$_POST['respuesta2'];
 $pregunta3=$_POST['pregunta3'];
 $respuesta3=$_POST['respuesta3'];

 	$modificacion = ("UPDATE preguntas SET pregunta1 = '$pregunta1',respuesta1='$respuesta1', pregunta2 = '$pregunta2', respuesta2 = '$respuesta2', pregunta3 = '$pregunta3',respuesta3 = '$respuesta3' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue realizada exitosamente'); window.location= 'preguntas.php';</script>";
 			}
  			