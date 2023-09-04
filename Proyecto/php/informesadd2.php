<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= '../index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $equipo=$_POST['equipo'];
 $problema=$_POST['problema'];
 $accion=$_POST['accion'];
 $observacion=$_POST['observacion'];
 $fecha=date('Y-m-d');
 $estatus=$_POST['estatus'];
 $direccion = $_POST['direccion'];
 $usuario=$_SESSION["usuario"];
 $validacion="SELECT usuario, cedula FROM usuarios where usuario='$usuario'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		$cedula = $mostrar['cedula'];
 }
 $sql="INSERT INTO reportec VALUES('id','$direccion','$problema','$equipo','$accion','$observacion','$estatus','$fecha','$cedula')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su solicitud no ha sido enviada correctamente.";
 	}else{
  		echo "<script>alert('Su solicitud ha sido enviada correctamente.'); window.location= '../informes.php';</script>";
 	}	

?>