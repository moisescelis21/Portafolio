<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="liceo";
 
  session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }else{
    if ($admin == 0) {
      echo "<script>alert('Usted no tiene permiso para ingresar aqui.'); window.location= 'inicio.php';</script>";
    }
  }
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id'];
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $edad=$_POST['edad'];
 $anio=$_POST['anio'];
 $seccion=$_POST['seccion'];
 $direccion=$_POST['direccion'];
 $aniocurso=$_POST['aniocurso'];
 $turno=$_POST['turno'];

 	$modificacion = ("UPDATE estudiantes SET nombres = '$nombres',apellidos='$apellidos', cedula = '$cedula', edad = '$edad',anio = '$anio',seccion = '$seccion',direccion = '$direccion',aniocurso = '$aniocurso',turno = '$turno' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<script>alert('Su modificacion ha sido realizada exitosamente'); window.location= 'inicio.php';</script>";
 			}
  			