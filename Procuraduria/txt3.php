<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "procuraduria");


$correlativo = $_GET['correlativo'];
$total = 0;
$cestaT = 0;
$sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
$result2=mysqli_query($conexion,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
	$cedula = $mostrar2['cedula'];
	


		

		


$sql="SELECT * FROM trabajadores WHERE cedula='$cedula'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 

$sql3="SELECT * FROM preciobcv";
    $result3=mysqli_query($conexion,$sql3);

    while($mostrar3=mysqli_fetch_array($result3)){
      $precioactual = $mostrar3['precioactual'];
      $preciomanual = $mostrar3['preciomanual'];
      if ($preciomanual != 0) {
        $cestaT = round($preciomanual*40,2);
      }else{
        $cestaT = round($precioactual*40,2);
      }
 
}  
      $totalcobra = number_format($cestaT,2, "", "");
            $total = $total + $totalcobra;


    
 
   
} 

 }
$sql4="INSERT INTO txt VALUES('id','$total','$correlativo')";
      $ejecutar4=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
      $ejecutar4=mysqli_query($conexion,$sql4);
      echo "<script>window.location= 'txt4.php?correlativo=$correlativo';</script>";

// Cerrar archivo de texto y conexión a la base de datos

mysqli_close($conexion);
?>