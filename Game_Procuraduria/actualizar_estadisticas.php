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
$sql2="SELECT * FROM estadisticas WHERE equipo='$equipo' AND ronda='$ronda'";
$result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id = $mostrar2['id'];
                            $correctas2 = $mostrar2['correctas'];
                            $incorrectas2 = $mostrar2['incorrectas'];

                            
                  



$correctas = $correctas2 + $_POST['correctas'];
$incorrectas = $incorrectas2 + $_POST['incorrectas'];

// Insertar los valores en la base de datos
$modificacion = ("UPDATE estadisticas SET correctas = '$correctas', incorrectas = '$incorrectas' WHERE id = '$id' ");
$ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($conexion,$modificacion);

if ($ejecutar) {
  echo json_encode(array('mensaje' => 'Datos guardados correctamente'));
} else {
  echo json_encode(array('error' => 'Error al guardar los datos en la base de datos: ' . $conexion->error));
}





}
// Cerrar la conexión a la base de datos
$conexion->close();
?>