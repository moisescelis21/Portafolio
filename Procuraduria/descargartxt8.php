<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "procuraduria");

$correlativo = $_GET['correlativo'];
$partes = explode('-', $correlativo);
$correlativo3 = $partes[0];

$sql5="SELECT * FROM nominas WHERE correlativo='$correlativo'";
$result5=mysqli_query($conexion,$sql5);
while($mostrar5=mysqli_fetch_array($result5)){
   $periodo = $mostrar5['periodo'];
   $dia = date("d", strtotime($periodo));
   $mes = date("m", strtotime($periodo));
   $ano = date("Y", strtotime($periodo));
   $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBREs");
      $mes3 = $meses[$mes-1];
      if ($periodo == "15-$mes-$ano"){ 
         $nombre = "VACACIONES";
      }else{
         $nombre = "VACACIONES";
      }

   $archivo2 = "C".$correlativo3.$nombre." ".$mes3.$ano.".txt";
   $archivo3 = "C:/xampp/htdocs/Procuraduria/txt/".$archivo2;
}
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;'.'filename='.$archivo2.'.txt');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($archivo3));

// Redireccionar después de unos segundos con JavaScript

// Leer el archivo y enviarlo al navegador para su descarga
readfile($archivo3);
mysqli_close($conexion);
exit;
?>
?>
<script>
    alert("El archivo txt fue generado con exito");
    window.location.href = "nomina.php";

</script>;