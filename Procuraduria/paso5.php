<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
  session_start();


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $cedula= $_SESSION["cedula"];
 $password= sha1($_POST['password']);
if ($password == "da39a3ee5e6b4b0d3255bfef95601890afd80709") {
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no puede dejar el campo contraseña vacio.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'paso4.php';
  }
})</script>";
}else{

 	$modificacion = ("UPDATE usuarios SET password = '$password' WHERE cedula = '$cedula' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su nueva contraseña ha sido modificada exitosamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
}
 			}
  			