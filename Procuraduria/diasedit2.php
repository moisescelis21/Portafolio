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
  if ($roles == 2 OR $roles == 3 OR $roles == 6 OR $roles == 8) {
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
 $cedula2=$_GET['cedula'];
 $correlativo = $_GET['correlativo']; 
 $diastrabajados = $_POST['diastrabajados'];
if ($diastrabajados == "") {
  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nominapersonal.php?correlativo=$correlativo';
  }
})</script>";

 }else{
 	$modificacion = ("UPDATE nominapersonal SET diastrabajados = '$diastrabajados' WHERE cedula = '$cedula2' AND correlativo='$correlativo' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
      echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su modificacion fue realizada exitosamente',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nominapersonal.php?correlativo=$correlativo';
  }
})</script>";
 			
 			}
 } 			