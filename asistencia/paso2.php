<!DOCTYPE html>
<html>
<head>
    <title> | Iniciar Sesión</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once "scripts.php"; ?>
</head>

<style>
    body {
    background: url(img/bg.jpg);
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto';
    height: 650px;
    display: flex;
    justify-content: center;
    align-items: center;
}

h1{
    text-align: center;
    font-weight: 700;
}

form{
    margin-top: 10%;
    background-color: #FFF;
    padding: 120px 120px;
    box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
    border-radius: 10px;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px ;
}

input{
    background: none;
    color: #5e5d5d;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--colorTextos);
}

input:focus{ 
    outline: none;
    color: #5e5d5d;
}

label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top: 10px;
    transition: 0.5s ease all;
    pointer-events: none;
    font-weight: bold;
}

input:focus~label,
input:valid~label{
    top: -14px;
    font-size: 12px;
    color: #2196f3;
}

.barra{
    position: relative;
    display: block;
    width: 100%;
}

.barra::before{
    content: "";
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #11998e, #38ef7d);
    transition: 0.3s ease width;
    left: 0;
}

input:focus~.barra::before{
    width: 100%;
}

    .boton {
    font-family: 'roboto';
    background: #4568DC;
    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);
    background: linear-gradient(to right, #38ef7d, #11998e);
    border: none;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
        }

@media screen and (max-width:500px){
    form{
        width: 80%;
    }


}
</style>

<br><br><br>

    <form action="paso3.php" method="POST" id="form" autocomplete="off">
                <div class="form">
                    <img src="img/logonuevo.png" style="width: 100px; margin:  -70px auto; margin-left: 35%; margin-bottom: 10px;">
                <h1>Iniciar Sesión</h1>
                    <p></p>
                    <?php 
                $usuario=$_POST['usuario'];
                $conexion=mysqli_connect('localhost','root','','liceo');
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
                $pregunta1 =  $mostrar['pregunta1'];
                $pregunta2 = $mostrar['pregunta2'];
                $pregunta3 = $mostrar['pregunta3'];
                $usuario = $mostrar['usuario'];
                ?>
                    <div class="grupo">
                <input type="text" name="pregunta1" id="pregunta1" disabled value="<?php echo $pregunta1 ?>" ><span class="barra"></span>
                <input type="text" name="respuesta1" id="respuesta1" placeholder="Respuesta #1"><span class="barra"></span>
                <input type="text" name="pregunta2" disabled id="pregunta2" value="<?php echo $pregunta2 ?>" ><span class="barra"></span>
                <input type="date" name="respuesta2" id="respuesta2" placeholder="Respuesta #2" ><span class="barra"></span>
                <input type="text" name="pregunta3" disabled id="pregunta3" value="<?php echo $pregunta3 ?>" ><span class="barra"></span>
                <input type="text" name="respuesta3" id="respuesta3" placeholder="Respuesta #3" ><span class="barra"></span>
                <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario; ?>" >
            </div>
        <?php } ?>
                    <p></p>
                    <button type="submit" class="boton" id="entrarSistema">Verificar</button>
                    <button class="boton"><a href="index.php" style="text-decoration: none; color:white;">Cancelar</a></button>
                </div>
            </form>


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#entrarSistema').click(function(){
            if($('#usuario').val()==""){
                alertify.alert("Debes agregar el usuario");
                return false;
            }else if($('#password').val()==""){
                alertify.alert("Debes agregar la clave");
                return false;
            }

            cadena="usuario=" + $('#usuario').val() + 
                    "&password=" + $('#password').val();

                    $.ajax({
                        type:"POST",
                        url:"php/index.php",
                        data:cadena,
                        success:function(r){
                            if(r==1){
                                alertify.alert("Iniciaste Sesión!").set('onok', function(closeEvent){ window.location="inicio.php";} );
                                }else{
                                alertify.alert("Inicio de Sesión Fallido ):");
                            }
                        }
                    });
        }); 
    });
</script>