<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
	session_start();
	$cedula = $_POST['cedula'];
	$password = sha1($_POST['password']);
	$con = mysqli_connect("localhost", "root", "", "procuraduria");
	$consulta = "SELECT * FROM usuarios WHERE cedula='$cedula' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	
	if ($filas > 0) {
		$_SESSION["cedula"] = $informacion['cedula'];
		$_SESSION["privilegio"] = $informacion['privilegio'];
		$_SESSION["roles"] = $informacion['roles'];
		echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Usted se ha logueado correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'intranet_start.php';
  }
})</script>";
	}else{
		echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Se ha equivocado en el usuario o la contraseña',
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
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	