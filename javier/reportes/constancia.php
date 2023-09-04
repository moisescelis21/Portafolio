<?php
  require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $id=$_GET['id'];
  $cedula=$_GET['cedula'];
  $html=file_get_contents("http://localhost/javier/constancia2.php?id='$id'");

  // Load HTML content 
  $dompdf->loadHtml($html, 'UTF-8'); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("$cedula.pdf", array("Attachment" => false));
?>