<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
if ($_SESSION["privilegio"] == 0) {
	echo "<script>alert('Usted no tiene permiso para entrar aqui.'); window.location= '../';</script>";
}
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $eliminar = ("DELETE FROM direcciones WHERE id = '$id' ");
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$eliminar);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('El registro fue eliminado exitosamente'); window.location= '../direcciones.php';</script>";
 			}
  			