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
 $id = $_GET['id']; 
 $profesion = $_POST['profesion'];
 $porcentaje = $_POST['porcentaje'];


 	$modificacion = ("UPDATE primprofesion SET profesion = '$profesion', porcentaje = '$porcentaje' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue realizada exitosamente'); window.location= 'profesionalizacion.php';</script>";
 			}
  			