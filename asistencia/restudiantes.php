<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="asistencia";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $direccion=$_POST['direccion'];

 $validacion="SELECT cedula FROM trabajadores where cedula='$cedula'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
    if (mysqli_num_rows($validacion2)>0) {
        echo "<script>alert('El trabajador ingresado ya fue registrado.'); window.location= 'estudiantes.php';</script>";
    }
else{
 $sql="INSERT INTO trabajadores VALUES('id','$nombres','$apellidos','$cedula','$direccion','Activo')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"El estudiante no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('El Trabajador ha sido registrado correctamente.'); window.location= 'estudiantes.php';</script>";
 	}	
}
}else{
    echo"Hubo Algun Error";
}
?>