<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- /* CSS */ -->
    <link rel="stylesheet" href="../css/recoverystyle.css">
    <link rel="stylesheet" href="../icons/iconpack2/style.css">
</head>


<div class="container">
    <form class="form" id="formulario" action="paso2.php" method="post" autocomplete="off">
        <div class="form_container">
            <h2 class="form-h2 back-div">Olvidé mi Contraseña</h2>
            <!--USUARIO-->
            <div class="container-inputs" id="grupo__usuario">
                <label class="form-label" for="usuario">Usuario</label>
                <div class="form__inputs">
                    <input type="text" name="usuario" id="usuario" class="usuario"
                            placeholder="Introduzca su nombre de usuario...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">El usuario debería contener de 4 a 16 caracteres. Puede contener
                        números y guiones.</p>
            </div>
            <div class="container-btn">
                <input type="submit" class="btn-submit" value="Verificar">

                <a href="../index.php">Cancelar</a>
            </div>
        </div>
    </form>
    <div id="formulario__mensaje">
            <p> <i class="icon-close"></i> ¡Coloque un usuario válido!</p>
        </div>
</div>
<script src="verificarUsuario.js"></script>
</body>

</html>
