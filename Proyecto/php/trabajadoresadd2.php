<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $cedula=$_POST['cedula'];
 $cargo=$_POST['cargo'];
 $validacion="SELECT cedula FROM trabajadores where cedula='$cedula'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		
 }
 $sql="INSERT INTO trabajadores VALUES('id','$nombre','$apellido','$cedula','$cargo')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su trabajador no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su trabajador ha sido enviada correctamente.'); window.location= '../trabajadores.php';</script>";
 	}	

?>