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
 $id = $_GET['id'];
 $pregunta1=$_POST['pregunta1'];
 $pregunta2=$_POST['pregunta2'];
 $pregunta3=$_POST['pregunta3'];
 $respuesta1=$_POST['respuesta1'];
 $respuesta2=$_POST['respuesta2'];
 $respuesta3=$_POST['respuesta3'];
 if ($respuesta1 == "" OR $respuesta2 == "" OR $respuesta3 == "") {
 	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'preguntas.php';
  }
})</script>";
 }else{
 	$modificacion = ("UPDATE preguntas SET respuesta1 = '$respuesta1', respuesta2 = '$respuesta2', respuesta3 = '$respuesta3', pregunta1 = '$pregunta1', pregunta2 = '$pregunta2', pregunta3 = '$pregunta3' WHERE id = '$id' ");
 	$ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 	$ejecutar=mysqli_query($con,$modificacion);
 }
 if(!$ejecutar){
 		echo"Hubo Algun Error";
 		}else{
 			echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Sus preguntas fueron modificadas exitosamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'preguntas.php';
  }
})</script>";
 			}
}			