<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
  if ($roles == 1 OR $roles == 2 OR $roles == 4 OR $roles == 8) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no tiene permiso para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
  }
  
if (!isset($_SESSION["cedula"])) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Debe loguearse para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
}else{
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id14 = $_GET['id']; 
 $id2 = $_GET['id2']; 
 $id3 = $_GET['id3']; 
 $COD=$_POST['COD'];
 $localizacion=$_POST['localizacion'];

 if ($_FILES['imagen']['size'] === 0) {
 	if ($COD == "" OR $localizacion == "") {
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'archivosbienesedit.php?id=$id14&id2=$id2&id3=$id3';
  }
})</script>";
 	}else{
 	$modificacion = ("UPDATE referencias SET COD = '$COD', localizacion = '$localizacion' WHERE id = '$id14' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }
 }else{
 	if ($COD == "" OR $_FILES["imagen"]["name"] == "" OR $localizacion == "") {
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'archivosbienesedit.php?id=$id14&id2=$id2&id3=$id3';
  }
})</script>";
 	
 	}else{
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $archivoSubido = $_FILES['imagen']['tmp_name'];
 $nombreOriginal = $_FILES['imagen']['name'];
 $nombreArchivoSinEspacios = str_replace(' ', '_', $nombreOriginal);
 $ruta = $ubi . '\referencias\\'. basename($nombreArchivoSinEspacios);
 move_uploaded_file($archivoSubido, $ruta);
 $ubicacion = $nombreArchivoSinEspacios;
 	$modificacion = ("UPDATE referencias SET COD = '$COD', localizacion = '$localizacion', archivo = '$ubicacion' WHERE id = '$id14' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }
 }
 

 
 
 	if(!$ejecutar){
 		echo"Su archivo no ha sido actualizado correctamente.";
 	}else{
    echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su archivo ha sido actualizado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'archivosbienes.php?id=$id3&id2=$id2';
  }
})</script>";
  	
 	}	
}
?>