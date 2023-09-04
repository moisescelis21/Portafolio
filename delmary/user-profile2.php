<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="delmary";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
$id=$_POST['id_cliente'];
 $nombres=$_POST['nombres'];
 $correo=$_POST['correo'];
 $telefono=$_POST['telefono'];
 $telefonoalternativo=$_POST['telefonoalternativo'];
 $direccion=$_POST['direccion'];
    $modificacion = ("UPDATE clientes SET nombres = '$nombres', correo = '$correo', telefono = '$telefono', telefonoalternativo = '$telefonoalternativo', direccion = '$direccion' WHERE id = '$id' ");
    $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
    $ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
        echo"Hubo Algun Error";
        }else{
            echo "<script>alert('Su modificacion fue hecha exitosamente'); window.location= 'user-profile.php';</script>";
            }
            