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
    <form class="form" id="form" action="paso3.php" method="post" autocomplete="off">
        <div class="form_container">
            <h2 class="form-h2 back-div">Olvidé mi Contraseña</h2>
            <?php 
                $usuario=$_POST['usuario'];
                $conexion=mysqli_connect('localhost','root','','proyecto');
                $sql="SELECT * FROM preguntas WHERE usuario='$usuario'";
                $sql2="SELECT * FROM usuarios WHERE usuario='$usuario'";
                $result=mysqli_query($conexion,$sql);
                $result2=mysqli_query($conexion,$sql2);
                $contador= mysqli_num_rows($result);
                $contador2= mysqli_num_rows($result2);
                if ($contador2 < 1) {
                    echo "<script>alert('El usuario que ingreso no existe, por favor verifique'); window.location= 'paso1.php';</script>";
                }
                if ($contador < 1) {
                    echo "<script>alert('El usuario que ingreso no tiene preguntas registradas, por favor verifique'); window.location= 'paso1.php';</script>";
                }
                while($mostrar=mysqli_fetch_array($result)){
                $id = $mostrar['id']; 
                $pregunta1 =   utf8_encode($mostrar['pregunta1']);
                $pregunta2 = utf8_encode($mostrar['pregunta2']);
                $pregunta3 = utf8_encode($mostrar['pregunta3']);
                $usuario = utf8_encode($mostrar['usuario']);
                ?>
             <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="pregunta2">Pregunta #1</label>
                        <div class="form__questions">
                            <input rows="4" type="text" id="pregunta1" name="pregunta1" value="<?php echo $pregunta1 ?>"  disabled >
                        </div>
                    </div>
                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="respuesta1">Respuesta #1</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta1" name="respuesta1" placeholder="Ingrese la Respuesta #1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
                            <i class="icon-cancel form__validacion-estado"></i>
                        </div>
                        
                    </div>     
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="pregunta2">Pregunta #2</label>
                        <div class="form__questions">
                            <input rows="4" type="text" id="pregunta2" name="pregunta2" value="<?php echo $pregunta2 ?>"  disabled >
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="respuesta2">Respuesta #2</label>
                        <div class="form__inputs">
                            <input type="date" id="respuesta2" name="respuesta2" placeholder="Ingrese la Respuesta #2">
                            <i class="icon-cancel form__validacion-estado"></i>
                        </div>
                        
                    </div>   
                      <!-- DIRECCIÓN -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="pregunta3">Pregunta #3</label>
                        <div class="form__questions">
                            <input rows="4" type="text" id="pregunta3" name="pregunta3" value="<?php echo $pregunta3 ?>" disabled >
                        </div>
                    </div>

                    <!-- PROBLEMA -->

                    <div class="container-inputs" id="grupo__problema">
                        <label class="form-label" for="respuesta3">Respuesta #3</label>
                        <div class="form__inputs">
                            <input type="text" id="respuesta3" name="respuesta3" placeholder="Ingrese la Respuesta #3" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
                            <i class="icon-cancel form__validacion-estado"></i>
                        </div>
                        
                    </div>  
                    <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario ?>">
            <?php
         }
        ?>
            <div class="container-btn">
                <input type="submit" class="btn-submit" value="Verificar">

                <a href="../index.php">Cancelar</a>
            </div>
        </div>
    </form>

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