<?php
session_start();

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $cargo=$_POST['cargo'];
 $resolucion=$_POST['resolucion'];
 $fechresolucion=$_POST['fechresolucion'];
 $validacion="SELECT cedula FROM trabajadores where cedula='$cedula'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		
 }
 $sql="INSERT INTO trabajadores VALUES('id','$nombres','$apellidos','$cedula','$cargo','$resolucion','$fechresolucion')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su trabajador no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su trabajador ha sido registrado correctamente.'); window.location= 'trabajadores.php';</script>";
 	}	

?>