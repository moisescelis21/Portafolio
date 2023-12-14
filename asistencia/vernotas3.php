<?php
session_start();


  require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $año = $_GET['año'];
  $cedula = $_GET['cedula'];
  $html=file_get_contents("http://localhost/liceo/vernotas4.php?año=$año&cedula=$cedula");

  // Load HTML content 
  $dompdf->loadHtml($html, 'UTF-8'); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("Document.pdf", array("Attachment" => false));
?>