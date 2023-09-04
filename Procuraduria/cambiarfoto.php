<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
 
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

 $foto=$_POST['foto'];
 $cedula=$_POST['cedula'];

 if ($foto == 1) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/1.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 2) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/2.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 3) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/3.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 4) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/4.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 5) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/5.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 6) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/6.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 7) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/7.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }elseif ($foto == 8) {
 	$modificacion = ("UPDATE usuarios SET foto = 'img/perfil/8.png' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }

 	if(!$ejecutar){
 		echo"Su foto no ha sido cambiada correctamente.";
 	}else{
     echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su foto ha sido cambiada correctamente',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'perfilusuario.php';
  }
})</script>";
 
 	}	
}
?>