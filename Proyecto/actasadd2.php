<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 
 $equipo=$_POST['equipo'];
 $marca=$_POST['marca'];
 $serial=$_POST['serial'];
 $serialB=$_POST['serialB'];
 $color=$_POST['color'];
 $direccion = $_POST['direccion'];
 $fecha=date('Y-m-d');
 $hora = date('H:i');
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $ruta = $ubi . '/pdf/img/actas/'. basename( $_FILES["imagen"]["name"]);
 move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
 $ubicacion = "/pdf/img/actas/" . $_FILES["imagen"]["name"];
 
 $usuario=$_SESSION["usuario"];
 $validacion="SELECT usuario, cedula FROM usuarios where usuario='$usuario'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		$cedula = $mostrar['cedula'];
 }
 $sql="INSERT INTO actas VALUES('id','$equipo','$marca','$serial','$serialB','$color','$direccion','$fecha','$hora','$cedula','$ubicacion','id2')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su solicitud no ha sido enviada correctamente.";
 	}else{
  		echo "<script>alert('Su solicitud ha sido enviada correctamente.'); window.location= 'actas.php';</script>";
 	}	

?>