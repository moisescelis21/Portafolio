<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $cantidad=$_POST['cantidad'];
 $validacion="SELECT cantidad FROM ingredientes where id='$id'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
	$cantactual = $mostrar['cantidad'];
 }
 	$cantnueva = $cantactual - $cantidad;
 	if ($cantnueva < 0) {
 		echo "<script>alert('La cantidad no puede ser mayor a la cantidad actual'); window.location= 'ingredientesQ1.php?id=$id';</script>";
 	}else{
 		$modificacion = ("UPDATE ingredientes SET cantidad = '$cantnueva' WHERE id = '$id' ");
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$modificacion);
 	}
 	
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('La cantidad fue quitada exitosamente'); window.location= 'ingredientesV.php';</script>";
 			}
  			