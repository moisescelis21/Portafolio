<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $ubicacion=$_POST['ubicacion'];
 $usuario=$_SESSION["usuario"];
 $sql="INSERT INTO direcciones VALUES('id','$ubicacion','$usuario')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su ubicacion no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su ubicacion ha sido registrado correctamente.'); window.location= 'ubicacionesV.php';</script>";
 	}	

?>