<?php
session_start();

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }
  require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $id = $_GET['id'];
  $cedula = $_GET['cedula'];
  $html=file_get_contents("http://localhost/Proyecto/pdf/planilla2.php?id=$id&cedula=$cedula");

  // Load HTML content 
  $dompdf->loadHtml($html, 'UTF-8'); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("Document.pdf", array("Attachment" => false));
?>