<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
if ($roles != 0 OR $privilegio != 0) {
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
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
 $id = $_GET['id']; 
 $cedula2=$_POST['cedula'];
 $password=$_POST['password'];
 $privilegio=$_POST['privilegio'];
 $roles=$_POST['roles'];
 $status=$_POST['status'];
if ($cedula2 == "" OR $password == "" OR $roles == "none" OR $privilegio == "none" OR $status == "none") {
	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuariosedit.php?id=$id';
  }
})</script>";
 }else{
 	$password=sha1($_POST['password']);
 	$modificacion = ("UPDATE usuarios SET cedula = '$cedula2', password = '$password', privilegio = '$privilegio', roles = '$roles', status = '$status' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
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
    window.location= 'usuarios.php';
  }
})</script>";
 			}
 }
 }
  			