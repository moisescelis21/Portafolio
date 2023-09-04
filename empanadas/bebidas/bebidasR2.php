<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $bebida=$_POST['bebida'];
 $sql="INSERT INTO bebidas VALUES('id','$bebida','0','0')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su bebida no ha sido registrada correctamente.";
 	}else{
  		echo "<script>alert('Su bebida ha sido registrada correctamente.'); window.location= 'bebidasV.php';</script>";
 	}	

?>