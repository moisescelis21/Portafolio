<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombres=$_POST['nombres'];
 $correo=$_POST['correo'];
 $telefono=$_POST['telefono'];
 $telefonoalternativo=$_POST['telefonoalternativo'];
 $direccion=$_POST['direccion'];
 $usuario=$_POST['usuario'];

 $sql="INSERT INTO clientes VALUES('id','$nombres','$correo','$telefono','$telefonoalternativo','$direccion','$usuario')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su informacion no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su informacion ha sido registrado correctamente.'); window.location= 'user-profile.php';</script>";
 	}	

?>