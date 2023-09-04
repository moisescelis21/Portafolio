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
  if ($roles == 1 OR $roles == 3 OR $roles == 7 OR $roles == 8) {
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

 $titulo=$_POST['titulo'];
 $cedula=$_POST['cedula'];
 $redaccion=$_POST['redaccion'];
 $resumen=$_POST['resumen'];
 $ubi = getcwd().DIRECTORY_SEPARATOR;
 $ruta = $ubi . '/img/noticias/'. basename( $_FILES["imagen"]["name"]);
 move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
 $ubicacion = "img/noticias/" . $_FILES["imagen"]["name"];
 $fecha=date('Y-m-d');
 if ($titulo == "" OR $redaccion == "" OR $resumen == "" OR $_FILES["imagen"]["name"] == "") {
 	echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'No puede dejar los campos vacios, por favor verifique y prosiga',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'noticias.php';
  }
})</script>";
 }else{
 $sql="INSERT INTO noticias VALUES('id','$titulo','$ubicacion','$redaccion','$resumen','$cedula', '$fecha')";
 $ejecutar=mysqli_query($con,"SET CHARACTER SET 'utf8'");
 $ejecutar=mysqli_query($con,$sql);
 }
 	if(!$ejecutar){
 		echo"Su noticia no ha sido registrado correctamente.";
 	}else{
 		echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Su noticia ha sido registrado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'noticias.php';
  }
})</script>";
  		
 	}	
}
?>