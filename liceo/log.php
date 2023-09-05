<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password= sha1($_POST['password']);
	$con = mysqli_connect("localhost", "root", "", "liceo");
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	$_SESSION["usuario"] = $usuario;
	$_SESSION["admin"] = $informacion['admin'];
	$_SESSION["cedula"] = $informacion['cedula'];
	if ($filas > 0) {
		echo "<script>alert('Se ha logueado correctamente'); window.location= 'inicio.php';</script>";
	}else{
		echo "<script>alert('Se ha equivocado en el usuario o la contraseña'); window.location= 'index.php';</script>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	