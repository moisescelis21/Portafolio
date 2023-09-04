<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $usuario=$_POST['usuario'];
 $correo=$_POST['correo'];
 $cedula=$_POST['cedula'];
 $privilegio=$_POST['privilegio'];
 $password = sha1($_POST['password']);
 	$modificacion = ("UPDATE usuarios SET usuario = '$usuario', correo = '$correo', cedula = '$cedula', privilegio = '$privilegio', password = '$password' WHERE id = '$id'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= 'usuarios3.php';</script>";
 			}

 	
  			