<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="patria";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $cedulaje = $_GET['cedulaje'];
 $carga = $_GET['carga'];
 $carga2 = $carga + 1;
 $name=$_POST['name'];
 $cedula=$_POST['cedula'];
 $edad=$_POST['edad'];
 $sexo=$_POST['sexo'];
 $direccion=$_POST['direccion'];
 $validacion="SELECT cedula FROM cargafamiliar where cedula='$cedula'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
 	if (mysqli_num_rows($validacion2)>0) {
 		echo "<script>alert('La persona ingresada ya fue registrada.'); window.location= 'rejefe.php';</script>";
 	}else{
 		$sql="INSERT INTO cargafamiliar VALUES('id','$name','$cedula', $edad, '$sexo', '$direccion', '$cedulaje')";
 		$modificacion = ("UPDATE jefecasa SET carga = '$carga2' WHERE cedula = '$cedulaje' ");
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$sql);
 		$ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar2=mysqli_query($con,$modificacion);
 		if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
  			echo "<script>alert('La persona ha sido registrada correctamente'); window.location= 'rejefe.php';</script>";
 		}
 	}	
}else{
	echo"Hubo Algun Error";
}




 
?>