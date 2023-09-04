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
 $redaccion=$_POST['redaccion'];
 $resumen=$_POST['resumen'];
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $ruta = $ubi . '/archivos/'. basename( $_FILES["imagen"]["name"]);
 move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
 $ubicacion = "/archivos/" . $_FILES["imagen"]["name"];
 $fecha=date('Y-m-d');
 $validacion="SELECT cedula FROM trabajadores where cedula='$cedula'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		
 }
 $sql="INSERT INTO noticias VALUES('id','$titulo','$ubicacion','$redaccion','$resumen','$cedula', '$fecha')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su noticia no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su noticia ha sido registrado correctamente.'); window.location= 'noticias.php';</script>";
 	}	

?>