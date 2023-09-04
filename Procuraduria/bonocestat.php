<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>BONO CESTATICKET </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="font-size: 10px;">
	<center><img src="img/logo.jpeg" style="height: 100px; width: 100px; "></center>


  <?php
  $dia = 0;
  $mes = 0;
  $ano = 0;
  $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql4="SELECT * FROM nominas WHERE correlativo='$correlativo'";
    $result4=mysqli_query($conexion,$sql4);
    while($mostrar4=mysqli_fetch_array($result4)){
      $periodo = $mostrar4['periodo'];
      $dia = date("d", strtotime($periodo));
      $mes = date("m", strtotime($periodo));
      $ano = date("Y", strtotime($periodo));
      $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBREs");
      $mes3 = $meses[$mes-1];



   ?>
  <?php if ($periodo == "15-$mes-$ano"){ ?>
  <center><h1 style="color: red;">CESTATICKET DE <?php echo $mes3 ?>  </h1></center>
  <?php }else{ ?>
  <center><h1 style="color: red;">CESTATICKET DE <?php echo $mes3 ?>  </h1></center>
  <?php } ?>
  <?php } ?>
     <table style="width: 100%;" border="1">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>Apellidos y Nombres</th>
                        <th>CESTATICKET</th>
                        <th>Monto total a pagar</th>
    
                    </tr>
                </thead>
                <tbody>
    <?php
    $cestaTT = 0;
    $cantidad = 0;
    $correlativo = $_GET['correlativo'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql2="SELECT * FROM nominapersonal WHERE correlativo='$correlativo'";
    $result2=mysqli_query($conexion,$sql2);

    while($mostrar2=mysqli_fetch_array($result2)){
      $cedula2 = $mostrar2['cedula'];
      $diastrabajados = $mostrar2['diastrabajados'];



    $sql="SELECT * FROM trabajadores WHERE cedula='$cedula2'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $nomina = $mostrar['nomina'];
      $cargo = $mostrar['cargo'];
      $adscrito = $mostrar['adscrito'];
      $fechresolucion = $mostrar['fechresolucion'];
      



$sql8="SELECT * FROM primaspersonal WHERE cedula='$cedula2'";
    $result8=mysqli_query($conexion,$sql8);
    while($mostrar8=mysqli_fetch_array($result8)){
      $profesion = $mostrar8['profesion'];
      $antiguedad = $mostrar8['antiguedad'];
      $hijos = $mostrar8['hijos'];

$sql9="SELECT * FROM montos WHERE cedula='$cedula2'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      $sueldo = $mostrar9['sueldo'];
 


     ?>
<?php
$sql3="SELECT * FROM preciobcv";
    $result3=mysqli_query($conexion,$sql3);

    while($mostrar3=mysqli_fetch_array($result3)){
      $precioactual = $mostrar3['precioactual'];
      $preciomanual = $mostrar3['preciomanual'];
      if ($preciomanual != 0) {
        $cestaT = round($preciomanual*40,2);
      }else{
        $cestaT = round($precioactual*40,2);
      }
      $cantidad++;
}
     ?>

<?php
    $cestaTT = $cestaTT + $cestaT;



     ?>   
                    
                    <tr>
                      <td style="" ><?php echo $cantidad; ?></td>
                        <td style="" ><?php echo $apellidos; ?> <?php echo $nombres; ?></td>
                        <td style="" align="right"><?php echo number_format($cestaT,2); ?></td>
                        <td style=""align="right"><?php echo number_format($cestaT,2); ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                    <?php }}} ?>
                    <tr>
                        <td style="border: none"></td>
                        <td style="border: none"></td>
                        <td style=""align="right"><?php echo number_format($cestaTT,2); ?></td>
                        <td style=""align="right"><?php echo number_format($cestaTT,2); ?></td>
                    </tr>
                </tbody>
            </table>





















