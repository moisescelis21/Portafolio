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
 $cedula2=$_GET['cedula2'];
 $nombres = $_POST['nombres'];
 $apellidos = $_POST['apellidos'];
 $cedula = $_POST['cedula'];
 $cargo = $_POST['cargo'];
 $resolucion = $_POST['resolucion'];
 $fechresolucion = $_POST['fechresolucion'];
 $nomina = $_POST['nomina'];
 $sueldo = $_POST['sueldo'];
 $centpago = $_POST['centpago'];
 $adscrito = $_POST['adscrito'];
 $antiguedad = $_POST['antiguedad'];
 $profesion = $_POST['profesion'];
 $hijos = $_POST['hijos'];
 $nrocuenta = $_POST['nrocuenta'];
 $tipocuenta = $_POST['tipocuenta'];
 $compensacion = $_POST['compensacion'];
 $vacaciones = $_POST['vacaciones'];
 $liquidacion = $_POST['liquidacion'];
 $especiales = $_POST['especiales'];
 $status = $_POST['status'];


 if ($nombres == "" OR $apellidos == "" OR $cedula == "" OR $cargo == "" OR $resolucion == "" OR $fechresolucion == "" OR $nomina == "" OR $sueldo == "" OR $centpago == "" OR $adscrito == "" OR $antiguedad == "" OR $profesion == "" OR $hijos == "" OR $nrocuenta == "" OR $tipocuenta == "" OR $compensacion == "" OR $vacaciones == "" OR $liquidacion == "" OR $especiales == "" OR $status == "") {
 
 echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadoresedit.php?cedula=$cedula2';
  }
})</script>";
 }else{
 	$modificacion = ("UPDATE trabajadores SET nombres = '$nombres', apellidos = '$apellidos',cedula = '$cedula', cargo = '$cargo', resolucion = '$resolucion', fechresolucion = '$fechresolucion', nomina = '$nomina', adscrito = '$adscrito', status = '$status'  WHERE cedula = '$cedula2' ");
 	$modificacion2 = ("UPDATE datosbancarios SET centpago = '$centpago', nrocuenta = '$nrocuenta', tipcuenta = '$tipocuenta' WHERE cedula = '$cedula2' ");
 	$modificacion3 = ("UPDATE primaspersonal SET  antiguedad = '$antiguedad', profesion = '$profesion', hijos = '$hijos' WHERE cedula = '$cedula2' ");
 	$modificacion4 = ("UPDATE montos SET sueldo = '$sueldo', compensacion = '$compensacion', vacaciones = '$vacaciones', liquidacion = '$liquidacion', especiales = '$especiales' WHERE cedula = '$cedula2' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 	$ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar2=mysqli_query($con,$modificacion2);
 	$ejecutar3=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar3=mysqli_query($con,$modificacion3);
 	$ejecutar4=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar4=mysqli_query($con,$modificacion4);

 }


 	
 
 if(!$ejecutar OR !$ejecutar2 OR !$ejecutar3 OR !$ejecutar4){
 		echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Su trabajador no ha sido modificado correctamente.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadoresedit.php?cedula=$cedula2';
  }
})</script>";
 		}else{
 			echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su trabajador ha sido modificado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadores.php';
  }
})</script>";
 			}
  }