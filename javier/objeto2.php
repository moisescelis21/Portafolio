<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="javier";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $objeto=$_POST['objeto'];
 $codificacion=$_POST['codificacion'];
 $cantidad=0;
 $sql="INSERT INTO objetos VALUES('id','$objeto','$codificacion','$cantidad')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su objeto no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su objeto ha sido registrado correctamente.'); window.location= 'objetos.php';</script>";
 	}	

?>