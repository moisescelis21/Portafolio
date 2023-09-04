<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password= sha1($_POST['password']);
	$con = mysqli_connect("localhost", "root", "", "empanadas");
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	$_SESSION["usuario"] = $usuario;
	$_SESSION["privilegio"] = $informacion['privilegio'];
	if ($filas > 0) {
		if ($_SESSION["privilegio"] == 1) {
		 	echo "<script>alert('Se ha logueado correctamente'); window.location= '/empanadas/compras/admin/comprasV.php';</script>";
		 }else{
		 	echo "<script>alert('Se ha logueado correctamente'); window.location= '/empanadas/compras/usuario/comprasV.php';</script>";
		 }
	}else{
		echo "<script>alert('Se ha equivocado en el usuario o la contraseña'); window.location= 'index.php';</script>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	