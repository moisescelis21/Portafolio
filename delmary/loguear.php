<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password = sha1($_POST['password']);
	$con = mysqli_connect("localhost", "root", "", "delmary");
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	$_SESSION["usuario"] = $informacion['usuario'];
	$_SESSION["privilegio"] = $informacion['privilegio'];
	if ($filas > 0) {
		if ($_SESSION["privilegio"] == 1) {
			echo "<script>alert('Se ha logueado correctamente'); window.location= 'shop-system.php';</script>";
		}else{
			echo "<script>alert('Se ha logueado correctamente'); window.location= 'index.php';</script>";
		}
		
	}else{
		echo "<script>alert('Se ha equivocado en el usuario o la contraseña'); window.location= 'login.php';</script>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
?>	