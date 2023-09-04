<?php
session_start();
$privilegio = $_SESSION["privilegio"];
if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $eliminar = ("DELETE FROM pedidos WHERE id = '$id' ");
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$eliminar);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
      if ($privilegio == 1) {
      echo "<script>alert('El registro fue eliminado exitosamente'); window.location= 'pedidos.php';</script>";
      }else{
        echo "<script>alert('El registro fue eliminado exitosamente'); window.location= 'pedidos4.php';</script>";
      }
 			
 			}
  			