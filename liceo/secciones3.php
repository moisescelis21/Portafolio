<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $letra_seccion=$_POST['letra_seccion'];
 $año=$_POST['año'];
 $turno=$_POST['turno'];
 $sql="INSERT INTO  secciones VALUES('id','$letra_seccion','$año','$turno')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"La seccion no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('La seccion ha sido registrado correctamente.'); window.location= 'secciones.php';</script>";
 	}	

?>