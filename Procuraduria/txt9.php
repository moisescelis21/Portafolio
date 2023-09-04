<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "procuraduria");


$correlativo = $_GET['correlativo'];
$total = 0;
$sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
$result2=mysqli_query($conexion,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
	$cedula = $mostrar2['cedula'];
	


		

		


$sql="SELECT * FROM trabajadores WHERE cedula='$cedula'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 $sql3="SELECT * FROM preciobcv";
    $result3=mysqli_query($conexion,$sql3);

    while($mostrar3=mysqli_fetch_array($result3)){
      $precioactual = $mostrar3['precioactual'];
      $cumpleaños = ($precioactual*60)*0.332;
 
}  
      $totalcobra = number_format($cumpleaños,2, "", "");
            $total = $total + $totalcobra;


    
 
   
} 

 }
$sql4="INSERT INTO txt VALUES('id','$total','$correlativo')";
      $ejecutar4=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
      $ejecutar4=mysqli_query($conexion,$sql4);
      echo "<script>window.location= 'txt10.php?correlativo=$correlativo';</script>";

// Cerrar archivo de texto y conexión a la base de datos

mysqli_close($conexion);
?>