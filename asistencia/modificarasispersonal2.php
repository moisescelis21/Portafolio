<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="asistencia";
 
  session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../index.php';</script>";
  }else{
    if ($admin == 0) {
      echo "<script>alert('Usted no tiene permiso para ingresar aqui.'); window.location= '../inicio.php';</script>";
    }
  }
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id=$_GET['id'];
 $entrada=$_POST['entrada'];
 $salida=$_POST['salida'];

 	$modificacion = ("UPDATE asistenciapersonal SET entrada = '$entrada',salida='$salida' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue realizada exitosamente'); window.location= 'asistencia.php';</script>";
 			}
  			