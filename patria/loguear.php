<?php
	session_start();
	$email = $_POST['email'];
	$password= sha1($_POST['password']);
	$con = mysqli_connect("localhost", "root", "", "patria");
	$consulta = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	$_SESSION["email"] = $email;
	$_SESSION["name"] = $informacion['name'];
	$_SESSION["privilegio"] = $informacion['privilegio'];
	if ($filas > 0) {
		if ($_SESSION["privilegio"] == 1) {
			echo "<script>alert('Se ha logueado correctamente'); window.location= 'menu.php';</script>";
		}else{
			echo "<script>alert('Se ha logueado correctamente'); window.location= 'menu.php';</script>";
		}
	}else{
		echo "<script>alert('Se ha equivocado en el email o la contraseña'); window.location= 'index.php';</script>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	