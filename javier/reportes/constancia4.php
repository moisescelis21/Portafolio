<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="javier";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $ingreso=$_POST['ingreso'];
 $cargo=$_POST['cargo'];
 $salario=$_POST['salario'];
 $sql="INSERT INTO trabajadores VALUES('id','$nombres','$apellidos','$cedula','$ingreso','$cargo','$salario')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su trabajdor no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su trabajador ha sido registrado correctamente.'); window.location= 'constancias.php';</script>";
 	}	

?>