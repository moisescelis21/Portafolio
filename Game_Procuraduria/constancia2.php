<?php

  require_once 'dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $id = $_GET['id'];
  $html=file_get_contents("http://localhost/Procuraduria/constancia.php?id=$id");

  // Load HTML content 
  $dompdf->loadHtml($html); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("Document.pdf", array("Attachment" => false));
?>