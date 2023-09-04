<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="patria";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $privilegio=$_POST['privilegio'];
 $creacion = date("Y-m-d");
 $validacion="SELECT email FROM usuarios where email='$email'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
 	if (mysqli_num_rows($validacion2)>0) {
 		echo "<script>alert('El email ingresado ya fue registrado.'); window.location= 'usuarios.php';</script>";
 	}else{
 		$sql="INSERT INTO usuarios VALUES('id','$name','$email', SHA('$password'), '$creacion', '$privilegio')";
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$sql);
 		if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
  			echo "<script>alert('Su usuario ha sido registrado correctamente'); window.location= 'menu.php';</script>";
 		}
 	}	
}else{
	echo"Hubo Algun Error";
}




 
?>