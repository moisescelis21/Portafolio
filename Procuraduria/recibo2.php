<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>RECIBO DE PAGO</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="font-size: 10px;">
	<img src="img/logo.jpeg" style="height: 100px; width: 100px;">
    <p style="position: relative; left: 40%; top:-115px"><strong>PROCURADURIA GENERAL DEL ESTADO BOLIVAR</strong></p>
    <p style="position: relative;left: 48%; top: -115px"><strong>RECIBO DE PAGO</strong></p>
    <?php
                        $cedula=$_GET['cedula'];
                        $correlativo=$_GET['correlativo'];
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql2="SELECT * FROM recibos WHERE cedula = '$cedula' AND correlativo = '$correlativo'";
                        $result2=mysqli_query($conexion,$sql2);

                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id = $mostrar2['id'];
                            $primantiguedad2 = $mostrar2['antiguedad'];
                            $primprofesion2 = $mostrar2['profesion'];
                            $primhijos2 = $mostrar2['hijos'];
                            $sueldo = $mostrar2['sueldo'];
                            $sueldototal4 = $mostrar2['totalcobra'];


    $sql3="SELECT * FROM nominapersonal WHERE cedula = '$cedula'  AND correlativo = '$correlativo'";
                        $result3=mysqli_query($conexion,$sql3);

                        while($mostrar3=mysqli_fetch_array($result3)){
                            $id = $mostrar2['id'];
                            $diastrabajados = $mostrar3['diastrabajados'];

    $sql4="SELECT * FROM nominas WHERE correlativo = '$correlativo'";
                        $result4=mysqli_query($conexion,$sql4);

                        while($mostrar4=mysqli_fetch_array($result4)){
                            $id = $mostrar4['id'];
                            $periodo = $mostrar4['periodo'];
  
                      
  
     ?>



    <?php
    
    $dia = date("d", strtotime($periodo));
    $mes = date("m", strtotime($periodo));
    $ano = date("Y", strtotime($periodo));
    $lunes = 0;
    $dia2 = 0;
    $maximodias = cal_days_in_month(CAL_GREGORIAN,$mes,$ano);
    while ($dia2 < $maximodias) {
    $dia3 = utf8_encode(strftime("%A", strtotime($ano . '-' . $mes . '-' . $dia2)));
    $dia2++;
    if ($dia3 == "Monday") {
      $lunes++;
    }
    }
    
 $sql="SELECT * FROM trabajadores WHERE cedula='$cedula'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $cedula_length = strlen($cedula);

    if ($cedula_length == 8 || $cedula_length == 7) {
    // Formatear la cédula
    if ($cedula_length == 8) {
        $formatted_cedula = substr($cedula, 0, 2) . '.' . substr($cedula, 2, 3) . '.' . substr($cedula, 5, 3);
    } else {
        $formatted_cedula = substr($cedula, 0, 1) . '.' . substr($cedula, 1, 3) . '.' . substr($cedula, 4, 3);
    }
}
      $nomina = $mostrar['nomina'];
      $cargo = $mostrar['cargo'];
      $adscrito = $mostrar['adscrito'];
      $fechresolucion = $mostrar['fechresolucion'];
      

$sql9="SELECT * FROM montos WHERE cedula='$cedula'";
    $result9=mysqli_query($conexion,$sql9);
    while($mostrar9=mysqli_fetch_array($result9)){
      

$sql10="SELECT * FROM datosbancarios WHERE cedula='$cedula'";
    $result10=mysqli_query($conexion,$sql10);
    while($mostrar10=mysqli_fetch_array($result10)){
      $nrocuenta = $mostrar10['nrocuenta'];
      $tipocuenta = $mostrar10['tipcuenta'];
      $centpago = $mostrar10['centpago'];
?>

	<p style="position: relative;left: 30px; top: -80px;"><strong>Nómina: <?php echo $nomina;?></strong></p>
    <?php 
        if ($periodo == "15-$mes-$ano") {       
    ?>
    <p style="position: relative;left: 79%; top: -105px;"><strong>Desde 01/<?php echo $mes?>/<?php echo $ano ?> Hasta 15/<?php echo $mes?>/<?php echo $ano ?></strong></p>
    <?php }else{ ?>
     <p style="position: relative; left: 79%; top: -105px;"><strong>Desde 16/<?php echo $mes?>/<?php echo $ano ?> Hasta <?php echo $maximodias?>/<?php echo $mes?>/<?php echo $ano ?></strong></p>   
    <?php } ?>

    <p style="position: relative; top: -105px; left: 30px;"><strong>Cédula de Identidad:</strong></p>
    <p style="position: relative; top: -110px; left: 30px;"><strong>V-<?php echo $formatted_cedula;?></strong></p>
    <div style="position: relative; left: 140px; top: -160px;">
    <p style=""><strong>Nombre del Trabajador:</strong></p>
    </div>
    <div style="position: relative; left: 140px; top: -175px;">
    <p style=""><strong><?php echo $nombres;?> <?php echo $apellidos;?></strong></p>
    </div>
    <div style="position: relative; left: 95%; top:-225px;">
    <p style=""><strong>Sueldo:</strong></p>
    </div>
    <div style="position: relative; left: 94%; top:-238px;">
    <p style=""><strong>Bs.<?php echo $sueldo;?></strong></p>
    </div>
    <p style="position: relative; left: 30px; top: -245px"><strong>Cargo:</strong></p>
    <p style="position: relative;left: 30px; top:-250px;"><strong><?php echo $cargo;?></strong></p>
    <p style="position: relative;left: 30px; top: -255px;"><strong>Centro de Pago:</strong></p>
    <p style="position:relative; left: 30px; top: -262px"><strong><?php echo $centpago;?></strong></p>
    <div style="position: relative; left: 55%; top: -375px;">
    <p style=""><strong>Unidad de Adscripcion:</strong></p>
    </div>
    <div style="position: relative; left: 55%; top: -390px;">
    <p style=""><strong>02-08-01-02-07</strong></p>
    </div>
    <div style="position: relative; left: 55%; top: -390px;">
    <p style=""><strong><?php echo $adscrito;?></strong></p>
    </div>

<?php
      $quincena = round($sueldo/2,2);
      $asignaciones = ($primantiguedad2 + $primprofesion2 + $primhijos2) / 2;
      $asignaciones2 = ($primantiguedad2 + $primprofesion2 + $primhijos2);
      $asignaciones6 = ($primantiguedad2 + $primprofesion2);
      
      $sueldototal2 = $sueldo + $asignaciones2;

      $bonovacacional = round((145/360)*($sueldototal2/30),2);
      $aguinaldo = round((120/360)*($sueldototal2/30),2);
      $salariointegral = round((($sueldototal2/30) + $bonovacacional + $aguinaldo)*30,2);
      $PH = $salariointegral * 0.01;
      $aportePH = round($salariointegral * 0.02,2);
      $IVSS = round(((($sueldo * 12)/52)*0.04)*$lunes,2);
      $aporteIVSS = round(((($sueldo * 12)/52)*0.09)*$lunes,2);
      $RPE = ((($sueldo*12)/52)*0.005)*$lunes;
      $aporteRPE = round(((($sueldo*12)/52)*0.02)*$lunes,2);
      $pensionjubilacion = round($sueldototal2 * 0.03,2);
      $aportepension = round($sueldototal2 * 0.03,2); 
      $deducciones = round(($PH + $IVSS + $RPE + $pensionjubilacion)/2,2);
      $sueldototal = round($quincena + $asignaciones - $deducciones,2);


      $primantiguedad3 = round(($primantiguedad2/30)*$diastrabajados,2);
      $primprofesion3 = round(($primprofesion2/30)*$diastrabajados,2);
      $primhijos3 = round(($primhijos2/30)*$diastrabajados,2);
      $asignaciones3 = round($asignaciones,2);
      $asignaciones4 = round($primantiguedad3 + $primprofesion3,2);

      $PH2 = $PH/2;
      $IVSS2 = $IVSS/2;
      $RPE2 = $RPE/2;
      $pensionjubilacion2 = $pensionjubilacion/2;
      $deducciones2 = round($PH2 + $IVSS2 + $RPE2 + $pensionjubilacion2,2);





      $sueldototal3 = round($quincena + $asignaciones3,2);
      $sueldototal4 = $quincena + $asignaciones3 - $deducciones2;
      $sueldototal6 = round($quincena - $deducciones,2);









 ?>


























    <?php if ($nomina == "Pension" OR $nomina == "Jubilacion") {
    ?>
    <p style="position: relative; left: 30px; top: -367px;"><strong>Nombre del Concepto</strong></p>
    <p style="position: relative; left: 30px; top: -377px;"><strong>SUELDO BASE</strong></p>
    <p style="position: absolute; left: 52%; top: 189px;"><strong>Cantidad</strong></p>
    <p style="position: absolute; left: 55%; top: 190px;"><strong>30</strong></p>
    <p style="position: absolute; left: 65%; top: 180px;"><strong>Asignaciones</strong></p>
    <p style="position: absolute; left: 68%; top: 192px;"><strong><?php echo number_format($sueldo,2) ?></strong></p>
    
    <p style="position: absolute; left: 30px; top: 320px;"><strong>Recibi Conforme:</strong></p>
    <p style="position: absolute; left: 50%; top: 320px;"><strong>TOTALES</strong></p>
    <p style="position: absolute; left: 68%; top: 320px;"><strong><?php echo number_format($sueldo,2) ?></strong></p>
    <p style="position: absolute; left: 47%; top: 335px;"><strong>NETO A COBRAR Bs.</strong></p>
    <p style="position: absolute; left: 68%; top: 335px;"><strong><?php echo number_format($sueldo,2) ?></strong></p>
      
    <?php }else{ ?>
    <p style="position: relative; left: 30px; top: -367px;"><strong>Nombre del Concepto</strong></p>
    <p style="position: relative; left: 30px; top: -377px;"><strong>SUELDO BASE</strong></p>
    <p style="position: relative; left: 30px; top: -387px;"><strong>PRIMA ANTIGÜEDAD</strong></p>
    <p style="position: relative; left: 30px; top: -395px;"><strong>PRIMA PROFESIONALIZACIÒN</strong></p>
    <p style="position: relative; left: 30px; top: -405px;"><strong>PRIMA POR HIJOS</strong></p>
    <p style="position: relative; left: 30px; top: -415px;"><strong>R.P.V.H</strong></p>
    <p style="position: absolute; left: 30px; top: 258px"><strong>SSO</strong></p>
    <p style="position: absolute; left: 30px; top: 260px"><strong>RPE</strong></p>
    <p style="position: absolute; left: 30px; top: 272px"><strong>APORTE PENSIÒN Y JUBILACIÒN</strong></p>
    <p style="position: absolute; left: 52%; top: 175px;"><strong>Cantidad</strong></p>
    <p style="position: absolute; left: 54%; top: 188px;"><strong><?php echo $diastrabajados; ?></strong></p>
    <p style="position: absolute; left: 65.4%; top: 175px;"><strong>Asignaciones</strong></p>
    <?php
     if ($quincena >= 0.00 AND $quincena <= 0.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 189px;"><strong><?php echo number_format($quincena,2) ?></strong></p>
    <?php
     }elseif ($quincena >= 1.00 AND $quincena <= 9.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 189px;"><strong><?php echo number_format($quincena,2) ?></strong></p>
    <?php
    }elseif($quincena >= 10.00 AND $quincena < 99.99){
    ?>
    <p style="position: absolute; left: 69.9%; top: 189px;"><strong><?php echo number_format($quincena,2) ?></strong></p>
    <?php
    }elseif ($quincena >= 100.00 AND $quincena < 990.99) {
    ?>
    <p style="position: absolute; left: 69.2%; top: 189px;"><strong><?php echo number_format($quincena,2) ?></strong></p>
    <?php
    } 
    ?>
    <?php
     if ($primantiguedad3 >= 0.00 AND $primantiguedad3 <= 0.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 202px;"><strong><?php echo number_format($primantiguedad3,2) ?></strong></p>
    <?php
     }elseif ($primantiguedad3 > 1.00 AND $primantiguedad3 <= 9.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 202px;"><strong><?php echo number_format($primantiguedad3,2) ?></strong></p>
    <?php
    }elseif($primantiguedad3 > 10.00 AND $primantiguedad3 < 99.99){
    ?>
    <p style="position: absolute; left: 69.9%; top: 202px;"><strong><?php echo number_format($primantiguedad3,2) ?></strong></p>
    <?php
    }elseif ($primantiguedad3 > 100.00 AND $primantiguedad3 < 990.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 202px;"><strong><?php echo number_format($primantiguedad3,2) ?></strong></p>
    <?php
    } 
    ?>
    <?php
     if ($primprofesion3 >= 0.00 AND $primprofesion3 <= 0.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 214px;"><strong><?php echo number_format($primprofesion3,2) ?></strong></p>
    <?php
     }elseif ($primprofesion3 > 1.00 AND $primprofesion3 <= 9.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 214px;"><strong><?php echo number_format($primprofesion3,2) ?></strong></p>
    <?php
    }elseif($primprofesion3 > 10.00 AND $primprofesion3 < 99.99){
    ?>
    <p style="position: absolute; left: 69.9%; top: 214px;"><strong><?php echo number_format($primprofesion3,2) ?></strong></p>
     <?php
    }elseif ($primprofesion3 > 100.00 AND $primprofesion3 < 999.99) {
    ?>
    <p style="position: absolute; left: 70.5%; top: 214px;"><strong><?php echo number_format($primprofesion3,2) ?></strong></p>
    <?php
    } 
    ?>
    <?php
     if ($primhijos3 >= 0.00 AND $primhijos3 <= 0.99) {
    ?>
    <p style="position: absolute; left: 70.6%; top: 225px;"><strong><?php echo number_format($primhijos3,2) ?></strong></p>
    <?php
     }elseif ($primhijos3 > 1.00 AND $primhijos3 <= 9.99) {
    ?>
    <p style="position: absolute; left: 70.6%; top: 225px;"><strong><?php echo number_format($primhijos3,2) ?></strong></p>
    <?php
    }elseif($primhijos3 > 10.00 AND $primhijos3 < 99.99){
    ?>
    <p style="position: absolute; left: 70%; top: 225px;"><strong><?php echo number_format($primhijos3,2) ?></strong></p>
     <?php
    }elseif ($primhijos3 > 100.00 AND $primhijos3 < 999.99) {
    ?>
    <p style="position: absolute; left: 70.6%; top: 225px;"><strong><?php echo number_format($primhijos3,2) ?></strong></p>
    <?php
    } 
    ?>
  
    <p style="position: absolute; left: 75%; top: 175px;"><strong>Deducciones</strong></p>
    <p style="position: absolute; left: 80%; top: 240px;"><strong><?php echo number_format($PH2,2) ?></strong></p>
    <p style="position: absolute; left: 80%; top: 252px;"><strong><?php echo number_format($IVSS2,2) ?></strong></p>
    <p style="position: absolute; left: 80%; top: 264px;"><strong><?php echo number_format($RPE2,2) ?></strong></p>
    <p style="position: absolute; left: 80%; top: 276px;"><strong><?php echo number_format($pensionjubilacion2,2) ?></strong></p>
    <p style="position: absolute; left: 30px; top: 320px;"><strong>Recibi Conforme:</strong></p>
    <p style="position: absolute; left: 50%; top: 320px;"><strong>TOTALES</strong></p>
    <?php
     if ($sueldototal3 >= 0.00 AND $sueldototal3 <= 0.99) {
    ?>
    <p style="position: absolute; left: 70.3%; top: 320px;"><strong><?php echo number_format($sueldototal3,2) ?></strong></p>
    <?php
     }elseif ($sueldototal3 > 1.00 AND $sueldototal3 <= 9.99) {
    ?>
    <p style="position: absolute; left: 70.3%; top: 320px;"><strong><?php echo number_format($sueldototal3,2) ?></strong></p>
    <?php
    }elseif($sueldototal3 > 10.00 AND $sueldototal3 < 99.99){
    ?>
    <p style="position: absolute; left: 69.8%; top: 320px;"><strong><?php echo number_format($sueldototal3,2) ?></strong></p>
     <?php
    }elseif ($sueldototal3 > 100.00 AND $sueldototal3 < 999.99) {
    ?>
    <p style="position: absolute; left: 69.3%; top: 320px;"><strong><?php echo number_format($sueldototal3,2) ?></strong></p>
    <?php
    } 
    ?>
    <p style="position: absolute; left: 79.5%; top: 320px;"><strong><?php echo number_format($deducciones2,2) ?></strong></p>
    <p style="position: absolute; left: 47%; top: 343px;"><strong>NETO A COBRAR Bs.</strong></p>
    <?php
     if ($sueldototal4 >= 0.00 AND $sueldototal4 <= 0.99) {
    ?>
    <p style="position: absolute; left: 72.2%; top: 343px;"><strong><?php echo number_format($sueldototal4,2) ?></strong></p>
    <?php
     }elseif ($sueldototal4 > 1.00 AND $sueldototal4 <= 9.99) {
    ?>
    <p style="position: absolute; left: 71.5%; top: 343px;"><strong><?php echo number_format($sueldototal4,2) ?></strong></p>
    <?php
    }elseif($sueldototal4 > 10.00 AND $sueldototal4 < 99.99){
    ?>
    <p style="position: absolute; left: 70%; top: 343px;"><strong><?php echo number_format($sueldototal4,2) ?></strong></p>
     <?php
    }elseif ($sueldototal4 > 100.00 AND $sueldototal4 < 999.99) {
    ?>
    <p style="position: absolute; left: 69.4%; top: 343px;"><strong><?php echo number_format($sueldototal4,2) ?></strong></p>
    <?php
    } 
    ?>
  

    <?php }}}}}}} ?>