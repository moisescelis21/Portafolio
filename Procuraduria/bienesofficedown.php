<?php
session_start();
$roles = $_SESSION["roles"];
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<?php

  require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $ubicacion = $_GET['ubicacion'];
  $html=file_get_contents("http://localhost/Procuraduria/bienesofficedown2.php?ubicacion=$ubicacion");

  // Load HTML content 
  $dompdf->loadHtml($html); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'landscape'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("bienesgenerales.pdf", array("Attachment" => false));
?>