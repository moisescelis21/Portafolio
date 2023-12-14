<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $materias=$_POST['materia'];
 $año=$_POST['anio'];
 $sql="INSERT INTO  materias VALUES('id','$materias','$año')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"La Materia no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('La materia ha sido registrado correctamente.'); window.location= 'materias2.php';</script>";
 	}	

?>