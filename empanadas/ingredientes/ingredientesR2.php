<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $ingredientes=$_POST['ingredientes'];
 $sql="INSERT INTO ingredientes VALUES('id','$ingredientes','0')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su ingrediente no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su ingrediente ha sido registrado correctamente.'); window.location= 'ingredientesV.php';</script>";
 	}	

?>