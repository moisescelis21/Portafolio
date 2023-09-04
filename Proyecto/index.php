<?php
	session_start();
    if($_POST){

    $con = mysqli_connect("localhost", "root", "", "proyecto");
	$usuario = $_POST['usuario'];
	$password= sha1($_POST['password']);
	
	$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($con, $consulta);
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);
	$_SESSION["usuario"] = $usuario;
	
	if ($filas > 0) {
        $_SESSION["cedula"] = $informacion['cedula'];
	    $_SESSION["usuario"] = $informacion['usuario'];
	    $_SESSION["privilegio"] = $informacion['privilegio'];

		echo "<script>alert('Se ha logueado correctamente'); window.location= 'inicio.php';</script>";
	}else{
		echo "<p class='index-mensaje'>Usuario y/o contraseña incorrectos <i class='icon-cancel'></i></p>";
	}
	mysqli_free_result($resultado);
	mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- /* CSS */ -->
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="icons/iconpack/style.css">
</head>


<div class="container">
    <form class="form" id="formulario" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
        <div class="form_container">
            <h2 class="form-h2">Iniciar Sesión</h2>
            <!--USUARIO-->
            <div class="container-inputs" id="grupo__usuario">
                <label class="form-label" for="usuario">Usuario</label>
                <div class="form__inputs">
                    <input type="text" name="usuario" id="usuario" class="usuario"
                        placeholder="Introduzca su usuario...">
                    <i class="icon-cancel form__validacion-estado"></i>
                </div>
                <p class="form__validacion-error">Usuario inválido. Debe contener de 4 a 16 caracteres. Puede contener
                    números y guiones.</p>
            </div>

            <!--CONTRASEÑA-->

            <div class="container-inputs" id="grupo__password">
                <label class="form-label" for="password">Contraseña</label>
                <div class="form__inputs">
                    <input type="password" name="password" id="password" class="password"
                        placeholder="Introduzca su contraseña...">
                    <i class="icon-cancel form__validacion-estado"></i>

                </div>
                <p class="form__validacion-error">Su contraseña debe poseer de 4 a 12 caracteres</p>
            </div>

            <div class="container-btn">
                <input type="submit" class="btn-submit" value="Iniciar Sesión">
                <input type="reset" class="btn-reset" value="Cancelar">
            </div>
            <a href="recoverypass/paso1.php" class="newaccount">Olvide mi Contraseña</a>

        </div>
    </form>

    <script src="js/inicio.js"></script>
    <script src="js/validacionesFormularios/loginvalidacion.js"></script>

</div>
</body>

</html>

<!-- <script type="text/javascript">
    $(document).ready(function () {
        $('#entrarSistema').click(function () {
            if ($('#usuario').val() == "") {
                alertify.alert("Debes agregar el usuario");
                return false;
            } else if ($('#password').val() == "") {
                alertify.alert("Debes agregar la clave");
                return false;
            }

            cadena = "usuario=" + $('#usuario').val() +
                "&password=" + $('#password').val();

            $.ajax({
                type: "POST",
                url: "php/login.php",
                data: cadena,
                success: function (r) {
                    if (r == 1) {
                        window.location = "inicio.php";
                    } else {
                        alertify.alert("Fallo al entrar :(");
                    }
                }
            });
        });
    });
</script> -->