<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $usuario=$_POST['usuario'];
 $password= sha1($_POST['password']);
 $correo=$_POST['correo'];
 $cedula=$_POST['cedula'];
 $privilegio=$_POST['privilegio'];


 $sql="INSERT INTO usuarios VALUES('id','$usuario','$password','$correo','$cedula', '$privilegio')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su usuario no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('Su usuario ha sido registrado correctamente.'); window.location= 'usuarios.php';</script>";
 	}	

?>