<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "procuraduria");


$correlativo = $_GET['correlativo'];
$total = 0;
$sql2="SELECT * FROM recibos WHERE correlativo='$correlativo' AND cedula !='8874124' AND cedula !='8878329'";
$result2=mysqli_query($conexion,$sql2);
while($mostrar2=mysqli_fetch_array($result2)){
	$cedula = $mostrar2['cedula'];
	


		$totalcobra = number_format($mostrar2['totalcobra'],2, "", "");
		$total = $total + $totalcobra;

		


$sql="SELECT * FROM trabajadores WHERE cedula='$cedula' AND cedula !='8874124' AND cedula !='8878329'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $nomina = $mostrar['nomina'];
      $cargo = $mostrar['cargo'];
      $adscrito = $mostrar['adscrito'];
      $fechresolucion = $mostrar['fechresolucion'];
      $prueba = substr($apellidos. " ". $nombres, 0,30);
      $prueba = str_pad($prueba, 39, " ");
      



$sql8="SELECT * FROM primaspersonal WHERE cedula='$cedula'";
    $result8=mysqli_query($conexion,$sql8);
    while($mostrar8=mysqli_fetch_array($result8)){
      $profesion = $mostrar8['profesion'];
      $antiguedad = $mostrar8['antiguedad'];
      $hijos = $mostrar8['hijos'];

$sql9="SELECT * FROM montos WHERE cedula='$cedula'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      $sueldo = $mostrar9['sueldo'];

$sql10="SELECT * FROM datosbancarios WHERE cedula='$cedula'";
    $result10=mysqli_query($conexion,$sql10);
    while($mostrar10=mysqli_fetch_array($result10)){
      $nrocuenta = $mostrar10['nrocuenta'];
      $tipocuenta = $mostrar10['tipcuenta'];
 
   
}}}} 

 }
$sql4="INSERT INTO txt VALUES('id','$total','$correlativo')";
      $ejecutar4=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
      $ejecutar4=mysqli_query($conexion,$sql4);
      echo "<script>window.location= 'txt2.php?correlativo=$correlativo';</script>";

// Cerrar archivo de texto y conexión a la base de datos

mysqli_close($conexion);
?>