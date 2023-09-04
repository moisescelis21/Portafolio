<?php
    session_start();
    $usuario = $_POST['usuario'];
    $respuesta11 = $_POST['respuesta1'];
    $respuesta22 = $_POST['respuesta2'];
    $respuesta33 = $_POST['respuesta3'];
    $con = mysqli_connect("localhost", "root", "", "javier");
    $consulta = "SELECT * FROM preguntas WHERE usuario='$usuario'";
    $resultado=mysqli_query($con,"SET CHARACTER SET 'utf8'");
    $resultado = mysqli_query($con, $consulta);
    $informacion=mysqli_fetch_array($resultado);
    $respuesta1 = $informacion['respuesta1'];
    $respuesta2 = $informacion['respuesta2'];
    $respuesta3 = $informacion['respuesta3'];
    if ($respuesta11 == $respuesta1 && $respuesta22 == $respuesta2 && $respuesta33 == $respuesta3) {
        $_SESSION["check"] = "positivo";
        $_SESSION["usuario"] = $usuario;
        echo "<script>alert('Las preguntas han sido contestadas correctamente'); window.location= 'preguntas6.php';</script>";

    }else{
        echo "<script>alert('Se ha equivocado en las respuestas, por favor intentelo de nuevo'); window.location= 'preguntas3.php';</script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($con);
?>  