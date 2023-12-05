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


 $id = $_GET['id'];
 $grupo=$_POST['grupo'];
 $sgrupo=$_POST['sgrupo'];
 $año=$_POST['año'];
 $numero=$_POST['numero'];
 $cantidad=$_POST['cantidad'];
 $descripcion=$_POST['descripcion'];
 $ubicacion=$_POST['ubicacion'];
 $precio=$_POST['precio'];
 $observacion=$_POST['observacion'];

if ($grupo == "" OR $sgrupo == "" OR $año == "" OR $numero == "" OR $cantidad == "" OR $descripcion == "" OR $ubicacion == "" OR $precio == "" OR $observacion == "" ) {
  echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'bienesgadd.php';
  }
})</script>";
 }else{
  $modificacion = ("UPDATE bienes SET grupo = '$grupo',sgrupo = '$sgrupo',año = '$año',numero = '$numero',cantidad = '$cantidad',descripcion = '$descripcion',ubicacion = '$ubicacion',precio = '$precio',observacion = '$observacion' WHERE id = '$id' ");
  $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
  $ejecutar=mysqli_query($con,$modificacion);
 }
 	if(!$ejecutar){
 		echo"Su bienes no ha sido modificado correctamente.";
 	}else{
    echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su bienes ha sido modificado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'bienesg.php';
  }
})</script>";
  		
 	}	
}
?>