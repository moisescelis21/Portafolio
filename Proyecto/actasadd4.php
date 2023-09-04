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
 $id2=$_POST['id2'];
 
 $usuario=$_SESSION["usuario"];
 $validacion="SELECT usuario, cedula FROM usuarios where usuario='$usuario'";
 $result=mysqli_query($con,$validacion);
 while($mostrar=mysqli_fetch_array($result)){
		$cedula = $mostrar['cedula'];
 }
 $sqlc="SELECT * FROM actas WHERE id='$id2' OR id2='$id2'";
 $result=mysqli_query($con,$sqlc);  
 $row=mysqli_num_rows($result);
 if ($row <= 3) {
 	$sql="INSERT INTO actas VALUES('id','$equipo','$marca','$serial','$serialB','$color','$direccion','$fecha','$hora','$cedula','$ubicacion','$id2')";
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$sql);
 	if(!$ejecutar){
 		echo"Su acta no ha sido enviada correctamente.";
 	}else{
  		echo "<script>alert('Su acta ha sido enviada correctamente.'); window.location= 'actas.php';</script>";
 	}
 }else{
 		echo "<script>alert('Un acta solo puede contener 4 equipos electronicos, por favor cree otra acta.'); window.location= 'actas.php';</script>";
 }
 	

?>