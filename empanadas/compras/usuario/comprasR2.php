<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="empanadas";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $empanada=$_POST['empanada'];
 $cantidadE=$_POST['cantidadE'];
 $bebida=$_POST['bebida'];
 $cantidadB=$_POST['cantidadB'];
 $ubicacion=$_POST['ubicacion'];
 $usuario=$_SESSION["usuario"];
 $precioE = 0;
 $precioB = 0;
 $fecha = date('Y-m-d');
 $sql1="SELECT * FROM menu WHERE empanada='$empanada'";
 $sql2="SELECT * FROM bebidas WHERE bebida='$bebida'";
 $result=mysqli_query($con,$sql1);
 $result2=mysqli_query($con,$sql2);
 while($mostrar=mysqli_fetch_array($result)){
 	$precioE=$mostrar['precio'];
 } 
 while($mostrar2=mysqli_fetch_array($result2)){
 	$precioB=$mostrar2['precio'];
 } 
 $precioE2 = $cantidadE * $precioE;
 $precioB2 = $cantidadB * $precioB;
 $precioT = $precioE2 + $precioB2;
 $sql3="INSERT INTO compras VALUES('id','$empanada','$bebida','$cantidadE','$cantidadB','$ubicacion','$precioT','$fecha','$usuario')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql3);
 	if(!$ejecutar){
 		echo"Su compra no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su compra ha sido registrado correctamente.'); window.location= 'comprasV.php';</script>";
 	}	

?>