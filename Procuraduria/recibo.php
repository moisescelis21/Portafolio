<?php
session_start();
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
  $cedula = $_GET['cedula'];
  $correlativo = $_GET['correlativo'];
  $html=file_get_contents("http://localhost/Procuraduria/recibo2.php?cedula=$cedula&correlativo=$correlativo");

  // Load HTML content 
  $dompdf->loadHtml($html); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('Letter', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("ReciboPago_".$cedula.".pdf", array("Attachment" => false));
?>