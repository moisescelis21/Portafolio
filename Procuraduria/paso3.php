<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
    session_start();
    $cedula = $_POST['cedula'];
    $respuesta11 = $_POST['respuesta1'];
    $respuesta22 = $_POST['respuesta2'];
    $respuesta33 = $_POST['respuesta3'];
    $con = mysqli_connect("localhost", "root", "", "procuraduria");
    $consulta = "SELECT * FROM preguntas WHERE cedula='$cedula'";
    $resultado = mysqli_query($con, $consulta);
    $informacion=mysqli_fetch_array($resultado);
    $respuesta1 = $informacion['respuesta1'];
    $respuesta2 = $informacion['respuesta2'];
    $respuesta3 = $informacion['respuesta3'];
    if ($respuesta11 == $respuesta1 && $respuesta22 == $respuesta2 && $respuesta33 == $respuesta3) {
        $_SESSION["check"] = "positivo";
        $_SESSION["cedula"] = $cedula;
        echo "<body><script>Swal.fire({
  title: 'Felicidades',
  text: 'Las preguntas han sido contestadas correctamente.',
  icon: 'success',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'paso4.php';
  }
})</script>";
 
    }else{
        echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Se ha equivocado en las respuestas, por favor intentelo de nuevo.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'paso1.php';
  }
})</script>";
        
    }
    mysqli_free_result($resultado);
    mysqli_close($con);
?>  