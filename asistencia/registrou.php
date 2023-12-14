<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $usuario=$_POST['usuario'];
 $password=$_POST['password'];
 $cedula=$_POST['cedula'];
 $correo=$_POST['correo'];
 $validacion="SELECT usuario FROM usuarios where usuario='$usuario'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
 	if (mysqli_num_rows($validacion2)>0) {
 		echo "<script>alert('El usuario ingresado ya fue registrado.'); window.location= 'registro.php';</script>";
 	}else{
 		$sql="INSERT INTO usuarios VALUES('id','$nombre','$apellido','$usuario',SHA('$password'),'$cedula','$correo','0')";
 		$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 		$ejecutar=mysqli_query($con,$sql);
 		if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
  			echo "<script>alert('Su usuario ha sido registrado correctamente'); window.location= 'index.php';</script>";
 		}
 	}	
}else{
	echo"Hubo Algun Error";
}




 
?>