<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="patria";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $name=$_POST['name'];
 $cedula=$_POST['cedula'];
 $edad=$_POST['edad'];
 $sexo=$_POST['sexo'];
 $direccion=$_POST['direccion'];
 $carga=$_POST['carga'];

 	$modificacion = ("UPDATE jefecasa SET name = '$name', cedula = '$cedula', edad = '$edad',sexo = '$sexo',direccion = '$direccion', carga = '$carga' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue realizada exitosamente'); window.location= 'rejefe.php';</script>";
 			}
  			