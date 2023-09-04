<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="javier";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $objeto=$_POST['objeto'];
 $cantidad=$_POST['cantidad'];
 $fecha = date('Y-m-d');
 $validacion="SELECT cantidad FROM objetos where id='$id'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
	$cantanterior = $mostrar['cantidad'];
 }
 	$cantnueva = $cantanterior - $cantidad;
 	if ($cantnueva < 0) {
 		echo "<script>alert('La cantidad no puede ser mayor a la cantidad actual'); window.location= 'objetos.php';</script>";
 	}else{
 		$modificacion = ("UPDATE objetos SET cantidad = '$cantnueva' WHERE id = '$id' ");
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$modificacion);
 		$sql="INSERT INTO movimientos VALUES('id','$objeto','$cantidad','$cantanterior','$cantnueva','Quitar', '$fecha')";
		$ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar2=mysqli_query($con,$sql);
 	}
 	
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('La cantidad fue quitada exitosamente'); window.location= 'objetos.php';</script>";
 			}
  			