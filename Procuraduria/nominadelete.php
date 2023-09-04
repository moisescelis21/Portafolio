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
 $correlativo = $_GET['correlativo'];
 $eliminar = ("DELETE FROM nominas WHERE correlativo= '$correlativo' ");
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$eliminar);
 $eliminar2 = ("DELETE FROM nominapersonal WHERE correlativo= '$correlativo' ");
 $ejecutar2=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar2=mysqli_query($con,$eliminar2);
 $eliminar3 = ("DELETE FROM recibos WHERE correlativo= '$correlativo' ");
 $ejecutar3=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar3=mysqli_query($con,$eliminar3);
 $eliminar4 = ("DELETE FROM txt WHERE correlativo= '$correlativo' ");
 $ejecutar4=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar4=mysqli_query($con,$eliminar4);
 $eliminar5 = ("DELETE FROM fechas WHERE correlativo= '$correlativo' ");
 $ejecutar5=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar5=mysqli_query($con,$eliminar5);

 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
      echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'El registro fue eliminado exitosamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'nomina.php';
  }
})</script>";
 	
 			}
  }			