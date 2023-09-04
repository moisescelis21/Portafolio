<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'procuraduria');

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
  die('Error al conectarse a la base de datos: ' . $conexion->connect_error);
}

// Obtener los valores enviados en la petición
$equipo = $_POST['equipo'];
$ronda = $_POST['ronda'];
$correctas = $_POST['correctas'];
$incorrectas = $_POST['incorrectas'];

// Insertar los valores en la base de datos
$sql = "INSERT INTO estadisticas VALUES ('id','$equipo', '$ronda','$correctas', '$incorrectas','0')";
$ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($conexion,$sql);

if ($ejecutar) {
  echo json_encode(array('mensaje' => 'Datos guardados correctamente'));
} else {
  echo json_encode(array('error' => 'Error al guardar los datos en la base de datos: ' . $conexion->error));
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>