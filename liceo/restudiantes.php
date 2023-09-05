<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $edad=$_POST['edad'];
 $anio=$_POST['anio'];
 $direccion=$_POST['direccion'];
 $turno=$_POST['turno'];
 $año1 = date('Y');
 $año2 = $año1 + 1;
 $aniocurso = $año1.'-'.$año2;
 $validacion="SELECT cedula FROM estudiantes where cedula='$cedula'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
    if (mysqli_num_rows($validacion2)>0) {
        echo "<script>alert('El estudiante ingresado ya fue registrado.'); window.location= 'estudiantes.php';</script>";
    }
else{
 $sql="INSERT INTO estudiantes VALUES('id','$nombres','$apellidos','$cedula','$edad','$anio','NULL','$direccion','$aniocurso','$turno')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"El estudiante no ha sido registrado correctamente.";
 	}else{
  		echo "<script>alert('El estudiante ha sido registrado correctamente.'); window.location= 'estudiantes.php';</script>";
 	}	
}
}else{
    echo"Hubo Algun Error";
}
?>