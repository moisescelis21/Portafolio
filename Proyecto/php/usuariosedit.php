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
 $usuario=$_POST['usuario'];
 $correo=$_POST['correo'];
 $cedula=$_POST['cedula'];
 $privilegio=$_POST['privilegio'];
 $password = $_POST['password'];
 $password2 = $_POST['password2'];
 if ($password == $password2) {
 	$password3 = sha1($password);
 	$modificacion = ("UPDATE usuarios SET usuario = '$usuario', correo = '$correo', cedula = '$cedula', privilegio = '$privilegio', password = '$password3' WHERE id = '$id'");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= '../usuarios.php';</script>";
 			}
 }else{
 	echo "<script>alert('La contraseña que introdujo no son iguales'); window.location= '../usuarios.php';</script>";
 }
 	
  			