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

 $pregunta1=$_POST['pregunta1'];
 $respuesta1=$_POST['respuesta1'];
 $pregunta2=$_POST['pregunta2'];
 $respuesta2=$_POST['respuesta2'];
 $pregunta3=$_POST['pregunta3'];
 $respuesta3=$_POST['respuesta3'];
 $cedula = $_SESSION["cedula"];
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
    window.location= 'trabajadoresedit.php?cedula=$cedula2';
  }
})</script>";
 }else{
 $sql="INSERT INTO preguntas VALUES('id','$pregunta1','$respuesta1','$pregunta2','$respuesta2','$pregunta3','$respuesta3', '$cedula')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
}
 	if(!$ejecutar){
 		echo"Sus preguntas no han sido registradas correctamente.";
 	}else{
  		echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Sus preguntas fueron registradas exitosamente.',
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
?>