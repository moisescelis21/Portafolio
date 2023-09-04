<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="javier";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $ingreso=$_POST['ingreso'];
 $cargo=$_POST['cargo'];
 $salario=$_POST['salario'];


 	$modificacion = ("UPDATE trabajadores SET nombres = '$nombres', apellidos = '$apellidos', cedula = '$cedula', ingreso = '$ingreso', cargo = '$cargo', salario = '$salario' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= 'constancias.php';</script>";
 			}
  			