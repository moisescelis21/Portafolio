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
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $cedula=$_POST['cedula'];
 $cargo=$_POST['cargo'];

 	$modificacion = ("UPDATE trabajadores SET nombre = '$nombre', apellido = '$apellido', cedula = '$cedula', cargo = '$cargo' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../trabajadores.php';</script>";
 			}
  			