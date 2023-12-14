<?php
 session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="asistencia";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $fecha=date("Y-m-d");
 

 $validacion="SELECT fecha FROM asistencia where fecha='$fecha'";
 $validacion2 =mysqli_query($con,$validacion);
 if ($validacion2) {
    if (mysqli_num_rows($validacion2)>0) {
        echo "<script>alert('La asistencia ingresada ya fue registrado.'); window.location= 'diciembre.php';</script>";
    }
else{
 $sql="INSERT INTO asistencia VALUES('id','$fecha')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"La asistencia no ha sido registrada correctamente.";
 	}else{
  		echo "<script>alert('La asistencia ha sido registrada correctamente.'); window.location= 'diciembre.php';</script>";
 	}	
}
}else{
    echo"Hubo Algun Error";
}
?>