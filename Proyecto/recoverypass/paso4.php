<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
    <!-- /* CSS */ -->
    <link rel="stylesheet" href="../css/recoverystyle.css">
    <link rel="stylesheet" href="../icons/iconpack2/style.css">
</head>


<div class="container">
    <form class="form" id="formulario" action="paso5.php" method="post" autocomplete="off">
        <div class="form_container">
            <h2 class="form-h2 back-div">Nueva Contraseña</h2>
            <!--CONTRASEÑA-->
            <div class="container-inputs" id="grupo__password">
                <label class="form-label" for="password">Nueva Contraseña</label>
                <div class="form__inputs">
                    <input type="text" name="password" id="password" class="password"
                        placeholder="Introduzca su nueva contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Su contraseña debe poseer de 4 a 16 caracteres.</p>
            </div>

            <!-- REPETIR CONTRASEÑA -->
            <div class="container-inputs" id="grupo__password2">
                <label class="form-label" for="password2">Repita su contraseña</label>
                <div class="form__inputs">
                    <input type="text" name="password2" id="password2" class="password"
                        placeholder="Repita su contraseña...">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Escriba su contraseña correctamente</p>
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
<script src="verificarContraseña.js"></script>
</body>

</html>
