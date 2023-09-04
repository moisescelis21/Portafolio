<?php
  require_once '../dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  use Dompdf\Options;

  $options = new Options();
  $options->set('isRemoteEnabled', TRUE);
  $dompdf = new Dompdf($options);
  $fechaI=$_GET['fechaI'];
  $fechaF=$_GET['fechaF'];
  $tipo=$_GET['tipo'];
  $html=file_get_contents("http://localhost/javier/reportes/movimiento3.php?fechaI=$fechaI&fechaF=$fechaF&tipo=$tipo");

  // Load HTML content 
  $dompdf->loadHtml($html, 'UTF-8'); 
 
  // (Optional) Setup the paper size and orientation 
  $dompdf->setPaper('A4', 'portrait'); 
 
  // Render the HTML as PDF 
  $dompdf->render(); 
 
  // Output the generated PDF to Browser 
  $dompdf->stream("movimientos.pdf", array("Attachment" => false));
?>