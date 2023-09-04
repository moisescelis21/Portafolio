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
$pregunta_id = $_POST['pregunta_id'];



$modificacion2 = ("UPDATE pregunta SET status = 'Preguntada' WHERE id = '$pregunta_id' ");
$ejecutar2=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar2=mysqli_query($conexion,$modificacion2);







$id = 0;
$consulta = "SELECT * FROM estadisticas WHERE equipo='$equipo' AND ronda='$ronda'";
	$resultado=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
	$resultado = mysqli_query($conexion, $consulta);
	while($mostrar=mysqli_fetch_array($resultado)){
                            $id = $mostrar['id'];


    }
	$filas =mysqli_num_rows($resultado);
	$informacion=mysqli_fetch_array($resultado);

	if ($filas > 0) {
$modificacion2 = ("UPDATE estadisticas SET preguntas_anuladas = '1',correctas = '0', incorrectas = '0' WHERE id = '$id' ");
$ejecutar2=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar2=mysqli_query($conexion,$modificacion2);

if ($ejecutar2) {
  echo json_encode(array('mensaje' => 'Datos guardados correctamente'));
} else {
  echo json_encode(array('error' => 'Error al guardar los datos en la base de datos: ' . $conexion->error));
}







	}else{
		// Insertar los valores en la base de datos
$sql = "INSERT INTO estadisticas VALUES ('id','$equipo', '$ronda','0', '0','1')";
$ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($conexion,$sql);

if ($ejecutar) {
  echo json_encode(array('mensaje' => 'Datos guardados correctamente'));
} else {
  echo json_encode(array('error' => 'Error al guardar los datos en la base de datos: ' . $conexion->error));
}







	}                           









// Cerrar la conexión a la base de datos
$conexion->close();
?>