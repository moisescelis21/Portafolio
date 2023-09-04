<?php
session_start();

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $titulo=$_POST['titulo'];
 $cedula=$_POST['cedula'];
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $ruta = $ubi . '/archivos/'. basename( $_FILES["imagen"]["name"]);
 move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
 $ubicacion = $_FILES["imagen"]["name"];
 $fecha=date('Y-m-d');
 $sql="INSERT INTO archivos VALUES('id','$titulo','$ubicacion','$fecha', '$cedula')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su archivo no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su archivo ha sido registrado correctamente.'); window.location= 'archivos.php';</script>";
 	}	

?>