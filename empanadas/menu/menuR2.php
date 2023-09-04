<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $empanada=$_POST['empanada'];
 $sql="INSERT INTO menu VALUES('id','$empanada','0','0')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su empanada no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su empanada ha sido registrado correctamente.'); window.location= 'menuV.php';</script>";
 	}	

?>