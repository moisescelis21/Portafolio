<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
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

 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $cedula=$_POST['cedula'];
 $cargo=$_POST['cargo'];
 $resolucion=$_POST['resolucion'];
 $centpago=$_POST['centpago'];
 $nomina=$_POST['nomina'];
 $sueldo=$_POST['sueldo'];
 $adscrito=$_POST['adscrito'];
 $antiguedad=$_POST['antiguedad'];
 $profesion=$_POST['profesion'];
 $hijos=$_POST['hijos'];
 $fechresolucion=$_POST['fechresolucion'];
 $nrocuenta=$_POST['nrocuenta'];
 $tipocuenta=$_POST['tipocuenta'];

if ($nombres == "" OR $apellidos == "" OR $cedula == "" OR $cargo == "" OR $resolucion == "" OR $fechresolucion == "" OR $nomina == "" OR $sueldo == "" OR $centpago == "" OR $adscrito == "" OR $antiguedad == "" OR $profesion == "" OR $hijos == "" OR $nrocuenta == "" OR $tipocuenta == "") {
	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadoresadd.php';
  }
})</script>";
 }else{
 $sql="INSERT INTO trabajadores VALUES('id','$nombres','$apellidos','$cedula','$cargo','$resolucion','$fechresolucion','$nomina','$adscrito','Activo')";
 $sql2="INSERT INTO datosbancarios VALUES('id','$centpago','$nrocuenta','$tipocuenta','$cedula')";
 $sql3="INSERT INTO primaspersonal VALUES('id','$antiguedad','$profesion','$hijos','$cedula')";
 $sql4="INSERT INTO montos VALUES('id','$sueldo','0','0','0','0','$cedula')";

 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$sql2);
 $ejecutar3=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar3=mysqli_query($con,$sql3);
 $ejecutar4=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar4=mysqli_query($con,$sql4);
}
 	if(!$ejecutar){
 		echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Su trabajador no ha sido registrado correctamente',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'trabajadoresadd.php';
  }
})</script>";
 	}else{
  		echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su trabajador ha sido registrado correctamente.',
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
?>