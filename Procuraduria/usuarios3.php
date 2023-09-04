<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
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
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="procuraduria";
 

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $cedula=$_POST['cedula'];
 $password=$_POST['password'];
 $privilegio=$_POST['privilegio'];
 $roles=$_POST['roles'];
 $foto = "img/perfil/1.png";
 if ($cedula == "" OR $password == "" OR $roles == "none" OR $privilegio == "none") {
 	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuarios2.php';
  }
})</script>";
 }else{
 	$password=sha1($_POST['password']);
 $validacion="SELECT * FROM trabajadores where cedula='$cedula'";
 $validacion2="SELECT * FROM usuarios where cedula='$cedula'";
 $result=mysqli_query($con,$validacion);
 $result2=mysqli_query($con,$validacion2);
 $num_registros = mysqli_num_rows($result);
 $num_registros2 = mysqli_num_rows($result2);
 if ($num_registros == 0) {
 	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Este usuario no esta registrado como trabajador, por favor registrelo',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadores.php';
  }
})</script>";
}else{
if ($num_registros2 > 0) {
	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Este usuario ya ha sido registrado, por favor intente con otro',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'usuarios.php';
  }
})</script>";
 }else{
 	$sql="INSERT INTO usuarios VALUES('id','$cedula','$password','$privilegio','$roles','$foto','Activo')";
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$sql);

 	if(!$ejecutar){
 		echo"Su usuario no ha sido registrado correctamente.";
 	}else{
 		echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su usuario ha sido registrado correctamente.',
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
 }
}
?>