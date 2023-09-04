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
	$_SESSION["cedula"] = $informacion['cedula'];
	$_SESSION["privilegio"] = $informacion['privilegio'];
	$_SESSION["roles"] = $informacion['roles'];
	if ($filas > 0) {
		echo "<script>alert('Se ha logueado correctamente'); window.location= 'intranet_start.php';</script>";
	}else{
		echo "<script>alert('Se ha equivocado en el usuario o la contraseña'); window.location= 'index.php';</script>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	