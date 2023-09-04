<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $usuario=$_POST['usuario'];
 $email=$_POST['email'];
 $privilegio=$_POST['privilegio'];

 	$modificacion = ("UPDATE menu SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', email = '$email', privilegio = '$privilegio' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= 'usuariosV.php';</script>";
 			}
  			