<?php
session_start();

if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }

$id = $_GET['id'];
$cedula = $_GET['cedula'];
$fecha = date('Y-m-d');
$fecha2 = date('Y');
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
$correlativo = 1;
$sql="SELECT * FROM constancias WHERE id in (select MAX(id) from constancias)";
 $result=mysqli_query($con,$sql);
 while($mostrar=mysqli_fetch_array($result)){
 $correlativo = $mostrar['correlativo'];
 $fecha3 = date("Y", strtotime($mostrar['fecha']));
 if ($fecha2 == $fecha3) {
 	$correlativo = $mostrar['correlativo'] + 1;
 }else{
 	$correlativo = 1;
 }






}

$sql2="INSERT INTO constancias VALUES('id','$cedula','$fecha','$correlativo')";
$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($con,$sql2);
if(!$ejecutar){
        echo"Su constancia no ha sido generada correctamente.";
    }else{
        echo "<script>window.location= 'constancia2.php?id=$id&correlativo=$correlativo&cedula=$cedula';</script>";
    }


?>