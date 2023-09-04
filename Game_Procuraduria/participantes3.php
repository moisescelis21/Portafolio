<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'procuraduria');

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
  die('Error al conectarse a la base de datos: ' . $conexion->connect_error);
}

// Obtener los valores enviados en la petición
$id = $_GET['id'];
$cantidad = $_POST['cantidad'];

                            
                
// Insertar los valores en la base de datos
$modificacion = ("UPDATE participantes SET cantidad = '$cantidad' WHERE id = '$id' ");
$ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($conexion,$modificacion);

if ($ejecutar) {
  echo "<script>alert('Su participantes han sido modificado correctamente.'); window.location= 'participantes.php';</script>";
} else {
  echo"Su participantes no han sido modificado correctamente.";
}





// Cerrar la conexión a la base de datos
$conexion->close();
?>