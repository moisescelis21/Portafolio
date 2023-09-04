<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="patria";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $name=$_POST['name'];
 $cedula=$_POST['cedula'];
 $edad=$_POST['edad'];
 $sexo=$_POST['sexo'];
 $direccion=$_POST['direccion'];
 $agregado= $_SESSION["name"];
 $validacion="SELECT cedula FROM lideres where cedula='$cedula'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
 	if (mysqli_num_rows($validacion2)>0) {
 		echo "<script>alert('El lider ingresado ya fue registrado.'); window.location= 'relider2.php';</script>";
 	}else{
 		$sql="INSERT INTO lideres VALUES('id','$name','$cedula', $edad, '$sexo', '$direccion', '$agregado')";
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$sql);
 		if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
  			echo "<script>alert('El lider de calle ha sido registrado correctamente'); window.location= 'relider.php';</script>";
 		}
 	}	
}else{
	echo"Hubo Algun Error";
}




 
?>