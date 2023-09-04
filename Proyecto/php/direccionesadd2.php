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

 $direccion=$_POST['direccion'];
 $validacion="SELECT direccion FROM direcciones where direccion='$direccion'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		
 }
 $sql="INSERT INTO direcciones VALUES('id','$direccion')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su direccion no ha sido registrada correctamente.";
 	}else{
  		echo "<script>alert('Su direccion ha sido registrada correctamente.'); window.location= '../direcciones.php';</script>";
 	}	

?>