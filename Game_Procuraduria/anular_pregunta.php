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
$correctas2 = $_POST['correctas'];
$incorrectas2 = $_POST['incorrectas'];
$pregunta_id = $_POST['pregunta_id'];



$modificacion2 = ("UPDATE pregunta SET status = 'Preguntada' WHERE id = '$pregunta_id' ");
$ejecutar2=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar2=mysqli_query($conexion,$modificacion2);


$sql2="SELECT * FROM estadisticas WHERE equipo='$equipo' AND ronda='$ronda'";
$result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id = $mostrar2['id'];
                            $preguntas_anuladas2 = $mostrar2['preguntas_anuladas'];
                            $preguntas_anuladas = $mostrar2['preguntas_anuladas'] + 1;
                            $correctas = $mostrar2['correctas'];
                            $incorrectas = $mostrar2['incorrectas'];
                            if ($correctas > $correctas2) {
                            	$correctas3 = $correctas - 1;
                            }else{
                            	$correctas3 = $correctas;
                            }
                            if ($incorrectas > $incorrectas2) {
                            	$incorrectas3 = $incorrectas - 1;
                            }else{
                            	$incorrectas3 = $incorrectas;
                            }


                            

// Insertar los valores en la base de datos
$modificacion = ("UPDATE estadisticas SET preguntas_anuladas = '$preguntas_anuladas', correctas = '$correctas3', incorrectas = '$incorrectas3' WHERE id = '$id' ");
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