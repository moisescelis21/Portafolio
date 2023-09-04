<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>VACACIONES</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
                      <?php
function convertirNumeroLetra($numero) {
    $partes = explode('.', $numero); // Separar parte entera y decimal
    
    $parteEntera = milmillon((int)$partes[0]);
    $resultado = $parteEntera;

    if (isset($partes[1])) {
        $parteDecimal = ltrim($partes[1], '0');
        
        if (!empty($parteDecimal)) {
            $resultado .= " CON " . convertirParteDecimal($parteDecimal);
        }
    }
    
    return strtoupper($resultado);
}

function convertirParteDecimal($parteDecimal) {
    $num = (int)$parteDecimal;
    
    if ($num === 0) {
        return "CERO";
    }
    
    $decenas = decena($num);
    $unidades = unidad($num % 10);
    
    return "$decenas";
}

function milmillon($nummierod){
        if ($nummierod >= 1000000000 && $nummierod <2000000000){
            $num_letrammd = "mil ".(cienmillon($nummierod%1000000000));
        }
        if ($nummierod >= 2000000000 && $nummierod <10000000000){
            $num_letrammd = unidad(Floor($nummierod/1000000000))." mil ".(cienmillon($nummierod%1000000000));
        }
        if ($nummierod < 1000000000)
            $num_letrammd = cienmillon($nummierod);
        
        return $num_letrammd;
    }
    function cienmillon($numcmeros){
        if ($numcmeros == 100000000)
            $num_letracms = "cien millones";
        if ($numcmeros >= 100000000 && $numcmeros <1000000000){
            $num_letracms = centena(Floor($numcmeros/1000000))." millones ".(millon($numcmeros%1000000));       
        }
        if ($numcmeros < 100000000)
            $num_letracms = decmillon($numcmeros);
        return $num_letracms;
    }
    function decmillon($numerodm){
        if ($numerodm == 10000000)
            $num_letradmm = "diez millones";
        if ($numerodm > 10000000 && $numerodm <20000000){
            $num_letradmm = decena(Floor($numerodm/1000000))."millones ".(cienmiles($numerodm%1000000));        
        }
        if ($numerodm >= 20000000 && $numerodm <100000000){
            $num_letradmm = decena(Floor($numerodm/1000000))." millones ".(millon($numerodm%1000000));      
        }
        if ($numerodm < 10000000)
            $num_letradmm = millon($numerodm);
        
        return $num_letradmm;
    }
    function millon($nummiero){
        if ($nummiero >= 1000000 && $nummiero <2000000){
            $num_letramm = "un millon ".(cienmiles($nummiero%1000000));
        }
        if ($nummiero >= 2000000 && $nummiero <10000000){
            $num_letramm = unidad(Floor($nummiero/1000000))." millones ".(cienmiles($nummiero%1000000));
        }
        if ($nummiero < 1000000)
            $num_letramm = cienmiles($nummiero);
        
        return $num_letramm;
    }
    function cienmiles($numcmero){
        if ($numcmero == 100000)
            $num_letracm = "cien mil";
        if ($numcmero >= 100000 && $numcmero <1000000){
            $num_letracm = centena(Floor($numcmero/1000))." mil ".(centena($numcmero%1000));        
        }
        if ($numcmero < 100000)
            $num_letracm = decmiles($numcmero);
        return $num_letracm;
    }
    function decmiles($numdmero){
        if ($numdmero == 10000)
            $numde = "diez mil";
        if ($numdmero > 10000 && $numdmero <20000){
            $numde = decena(Floor($numdmero/1000))."mil ".(centena($numdmero%1000));        
        }
        if ($numdmero >= 20000 && $numdmero <100000){
            $numde = decena(Floor($numdmero/1000))." mil ".(miles($numdmero%1000));     
        }       
        if ($numdmero < 10000)
            $numde = miles($numdmero);
        
        return $numde;
    }
    function miles($nummero){
        if ($nummero >= 1000 && $nummero < 2000){
            $numm = "mil ".(centena($nummero%1000));
        }
        if ($nummero >= 2000 && $nummero <10000){
            $numm = unidad(Floor($nummero/1000))." mil ".(centena($nummero%1000));
        }
        if ($nummero < 1000)
            $numm = centena($nummero);
        
        return $numm;
    }
    function centena($numc){
        if ($numc >= 100)
        {
            if ($numc >= 900 && $numc <= 999)
            {
                $numce = "novecientes ";
                if ($numc > 900)
                    $numce = $numce.(decena($numc - 900));
            }
            else if ($numc >= 800 && $numc <= 899)
            {
                $numce = "ochocientos ";
                if ($numc > 800)
                    $numce = $numce.(decena($numc - 800));
            }
            else if ($numc >= 700 && $numc <= 799)
            {
                $numce = "setecientos ";
                if ($numc > 700)
                    $numce = $numce.(decena($numc - 700));
            }
            else if ($numc >= 600 && $numc <= 699)
            {
                $numce = "seiscientos ";
                if ($numc > 600)
                    $numce = $numce.(decena($numc - 600));
            }
            else if ($numc >= 500 && $numc <= 599)
            {
                $numce = "quinientos ";
                if ($numc > 500)
                    $numce = $numce.(decena($numc - 500));
            }
            else if ($numc >= 400 && $numc <= 499)
            {
                $numce = "cuatrocientos ";
                if ($numc > 400)
                    $numce = $numce.(decena($numc - 400));
            }
            else if ($numc >= 300 && $numc <= 399)
            {
                $numce = "trescientos ";
                if ($numc > 300)
                    $numce = $numce.(decena($numc - 300));
            }
            else if ($numc >= 200 && $numc <= 299)
            {
                $numce = "doscientos ";
                if ($numc > 200)
                    $numce = $numce.(decena($numc - 200));
            }
            else if ($numc >= 100 && $numc <= 199)
            {
                if ($numc == 100)
                    $numce = "cien ";
                else
                    $numce = "ciento ".(decena($numc - 100));
            }
        }
        else
            $numce = decena($numc);
        
        return $numce;  
}
function decena($numdero){
    
        if ($numdero >= 90 && $numdero <= 99)
        {
            $numd = "noventa ";
            if ($numdero > 90)
                $numd = $numd."Y ".(unidad($numdero - 90));
        }
        else if ($numdero >= 80 && $numdero <= 89)
        {
            $numd = "ochenta ";
            if ($numdero > 80)
                $numd = $numd."Y ".(unidad($numdero - 80));
        }
        else if ($numdero >= 70 && $numdero <= 79)
        {
            $numd = "setenta ";
            if ($numdero > 70)
                $numd = $numd."Y ".(unidad($numdero - 70));
        }
        else if ($numdero >= 60 && $numdero <= 69)
        {
            $numd = "sesenta ";
            if ($numdero > 60)
                $numd = $numd."Y ".(unidad($numdero - 60));
        }
        else if ($numdero >= 50 && $numdero <= 59)
        {
            $numd = "cincuenta ";
            if ($numdero > 50)
                $numd = $numd."Y ".(unidad($numdero - 50));
        }
        else if ($numdero >= 40 && $numdero <= 49)
        {
            $numd = "cuarenta ";
            if ($numdero > 40)
                $numd = $numd."Y ".(unidad($numdero - 40));
        }
        else if ($numdero >= 30 && $numdero <= 39)
        {
            $numd = "treinta ";
            if ($numdero > 30)
                $numd = $numd."Y ".(unidad($numdero - 30));
        }
        else if ($numdero >= 20 && $numdero <= 29)
        {
            if ($numdero == 20)
                $numd = "veinte ";
            else
                $numd = "veinti".(unidad($numdero - 20));
        }
        else if ($numdero >= 10 && $numdero <= 19)
        {
            switch ($numdero){
            case 10:
            {
                $numd = "diez ";
                break;
            }
            case 11:
            {               
                $numd = "once ";
                break;
            }
            case 12:
            {
                $numd = "doce ";
                break;
            }
            case 13:
            {
                $numd = "trece ";
                break;
            }
            case 14:
            {
                $numd = "catorce ";
                break;
            }
            case 15:
            {
                $numd = "quince ";
                break;
            }
            case 16:
            {
                $numd = "dieciseis ";
                break;
            }
            case 17:
            {
                $numd = "diecisiete ";
                break;
            }
            case 18:
            {
                $numd = "dieciocho ";
                break;
            }
            case 19:
            {
                $numd = "diecinueve ";
                break;
            }
            }   
        }
        else
            $numd = unidad($numdero);
    return $numd;
}
function unidad($numuero){
    switch ($numuero)
    {
        case 9:
        {
            $numu = "nueve";
            break;
        }
        case 8:
        {
            $numu = "ocho";
            break;
        }
        case 7:
        {
            $numu = "siete";
            break;
        }       
        case 6:
        {
            $numu = "seis";
            break;
        }       
        case 5:
        {
            $numu = "cinco";
            break;
        }       
        case 4:
        {
            $numu = "cuatro";
            break;
        }       
        case 3:
        {
            $numu = "tres";
            break;
        }       
        case 2:
        {
            $numu = "dos";
            break;
        }       
        case 1:
        {
            $numu = "un";
            break;
        }       
        case 0:
        {
            $numu = "";
            break;
        }       
    }
    return $numu;   
}













                       ?>
    <div style="font-size: 10px;">
     <table style="width: 100%;" border="1">
                
                    <tr>
                        <td colspan="7"><img src="img/logo.jpeg" style="height: 50px; width: 80px; "><div style="position: relative; margin: -45 100; padding: 0 30px; left: 80px;"><h2 style="">DIRECCIÓN DE TALENTO HUMANO</h2><h2 style="">LIQUIDACIÓN DE VACACIONES</h2></div></td>
                    </tr>
<?php
    $sueldobasicototal = 0;
    $primaprofesiontotales = 0;
    $primaprofesiontotales2 = 0;
    $hijostotales = 0;
    $primahijostotales = 0;
    $primantiguedadtotales = 0;
    $primantiguedadtotales2 = 0;
    $salarionormaltotales = 0;
    $vacacionestotales = 0;
    $aguinaldototales = 0;
    $salariointegraltotales = 0;
    $quincenatotales = 0;
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

                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql8="SELECT * FROM primprofesion";
                        $result8=mysqli_query($conexion,$sql8);

                        while($mostrar8=mysqli_fetch_array($result8)){
                            $id = $mostrar8['id'];
                            $profesion2 = $mostrar8['profesion'];

                            if ($profesion == $profesion2) {
                              $profesion5 = $mostrar8['porcentaje'];
                              
                            }
                            
                            
}
 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql9="SELECT * FROM primantiguedad";
                        $result9=mysqli_query($conexion,$sql9);

                        while($mostrar9=mysqli_fetch_array($result9)){
                            $id = $mostrar9['id'];
                            $tiempo = $mostrar9['tiempo'];
      
                            if ($tiempo == $antiguedad) {
                              $tiempo2 = $mostrar9['tiempo'];
                              if ($tiempo2 >= 0 AND $tiempo2 <= 5) {
                                $quinquenio = "Primer Quinquenio";
                                $pago = "15";
                                $disfrute = "18";
                                $dias = "3";
                              }elseif ($tiempo2 >= 6 AND $tiempo2 <= 10) {
                                $quinquenio = "Segundo Quinquenio";
                                $pago = "18";
                                $disfrute = "21";
                                $dias = "3";
                              }elseif ($tiempo2 >= 11 AND $tiempo2 <= 15) {
                                $quinquenio = "Tercer Quinquenio";
                                $pago = "21";
                                $disfrute = "25";
                                $dias = "4";
                              }elseif ($tiempo2 > 15) {
                                $quinquenio = "Cuarto Quinquenio";
                                $pago = "25";
                                $disfrute = "30";
                                $dias = "5";
                              }


                              $antiguedad5 = $mostrar9['porcentaje'];

                            }
                          

                        } 

     ?>
<?php

    $mes = date('m');
    $ano = date('Y');
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
    if ($mes == "8" AND $ano == "2023"){
      $lunes = 4;
    }
      $quincena = ($sueldo / 30)*$diastrabajados;
      $primantiguedad = round($sueldo * ($antiguedad5/100),2);
      $primprofesion = round($sueldo * ($profesion5/100),2);
      $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql6="SELECT * FROM primhijos";
                        $result6=mysqli_query($conexion,$sql6);
                        $valor = 0;
                        while($mostrar6=mysqli_fetch_array($result6)){
                            $id = $mostrar6['id'];
                            $valor = $mostrar6['valor'];
      

                              
                        }
 
      $primhijos = $hijos * $valor;


      $asignaciones = ($primantiguedad + $primprofesion + $primhijos) / 2;
      $asignaciones2 = ($primantiguedad + $primprofesion + $primhijos);
      $asignaciones6 = ($primantiguedad + $primprofesion);
      
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
      $primprofesion2 = round(($primprofesion/30)*$diastrabajados,2); 
      $deducciones = round(($PH + $IVSS + $RPE + $pensionjubilacion)/2,2);
      $sueldototal = round($quincena + $asignaciones - $deducciones,2);


      $primantiguedad2 = round(($primantiguedad/30)*$diastrabajados,2);
      $primprofesion2 = round(($primprofesion/30)*$diastrabajados,2);
      $primhijos2 = round(($primhijos/30)*$diastrabajados,2);
      $asignaciones3 = round($primantiguedad2 + $primprofesion2 + $primhijos2,2);
      $asignaciones4 = round($primantiguedad2 + $primprofesion2,2);

      $PH2 = $PH/2;
      $IVSS2 = $IVSS/2;
      $RPE2 = $RPE/2;
      $pensionjubilacion2 = $pensionjubilacion/2;
      $deducciones2 = round($PH2 + $IVSS2 + $RPE2 + $pensionjubilacion2,2);




      $sueldototal3 = round($quincena + $asignaciones3,2);
      $sueldototal4 = $quincena + $asignaciones3 - $deducciones2;
      $sueldototal6 = round($quincena - $deducciones,2);

      $sueldobasicodiario = round(($sueldo/30)*$dias,2);
      $primantiguedaddiario = round(($primantiguedad/30)*$dias,2);
      $primprofesiondiario = round(($primprofesion/30)*$dias,2);
      $primhijosdiario = round(($primhijos/30)*$dias,2);
      $primasdiariastotales = round($sueldobasicodiario + $primantiguedaddiario + $primprofesiondiario + $primhijosdiario,2);
      $sueldototaldiario = round($sueldototal2/30);
      $inicio = new DateTime("2023-07-17");
      $inicio2 = $inicio;
      $final = $inicio2->modify("+25 days");
      $bonovacacional = round(($sueldototal2/30)*145,2);
     


  

    $cantidad = $cantidad + 1;
    ?>
               
                
                  <tr>
                        <td colspan="7" style="background-color: #99CCFF;" align="center">DATOS PERSONALES</td>
                    </tr>
                    <tr>
                        <td colspan="3.5" align="left">1.- Apellidos y Nombres:<br> <?php echo $nombres ?> <?php echo $apellidos ?></td>
                        <td colspan="3.5" align="left">2.- Cédula de Identidad:<br>V-<?php echo $cedula ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="left">3.- Cargo:<br> <?php echo $cargo ?></td>
                        <td colspan="2" align="left">4.- Fecha de Ingreso:<br> <?php echo $fechresolucion ?></td>
                        <td colspan="3" align="left">5.-  Años en la Administración Pública:<br> <?php echo $tiempo2 ?> Años</td>
                    </tr>
                    <tr>
                        <td colspan="7" style="background-color: #99CCFF;" align="center">VACACIONES ANUALES</td>
                    </tr>
                     <tr>
                        <td colspan="1" align="left">6.- Sueldo Básico Bs.:</td>
                        <td colspan="1" align="left">7.- Prima de Antigüedad Bs.:</td>
                        <td colspan="1" align="left">8.- Prima de Profesionalización</td>
                        <td colspan="1" align="left">9.- Prima por hijos </td>
                        <td colspan="1" align="left">10.- Sueldo normal mensual Bs.:</td>
                        <td colspan="1" align="left"><br> <?php echo $sueldototal2 ?></td>
                        <td colspan="1" align="left">11.-Otras Asignaciones:</td>
                    </tr>
                    <tr>
                        <td colspan="1" align="left"><br> <?php echo $sueldo ?></td>
                        <td colspan="1" align="left"><br> <?php echo $primantiguedad ?></td>
                        <td colspan="1" align="left"><br> <?php echo $primprofesion ?></td>
                        <td colspan="1" align="left"><br> <?php echo $primhijos ?></td>
                        <td colspan="1" align="left">12.- Sueldo normal diario Bs.</td>
                        <td colspan="1" align="left"><br> <?php echo round($sueldototal2/30,2); ?></td>
                        <td colspan="1" align="left">Bs.0.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left">13.- Sueldo Básico Diario Bs.: </td>
                        <td colspan="3" align="left">14.- CINCO (<?php echo $dias ?>) días adicionales de Sueldo Básico Diario remuneración:</td>
                        <td colspan="1" rowspan="9" align="left"></td>
                        <td colspan="1" rowspan="4" align="left">21.- Bono Vacacional:</td>

                        
                    </tr>
                    <tr>
                        <td colspan="1" align="left">Bs.</td>
                        <td colspan="1" align="left"><?php echo round($sueldo/30,2);?></td>
                        <td colspan="1" align="left"></td>
                        <td colspan="2" align="left"><?php echo $sueldobasicodiario;?></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" align="left">15.- Prima de Antigüedad diaria:</td>
                        <td colspan="3" align="left">16.- CINCO (<?php echo $dias ?>) días adicionales de Prima de Antigüedad remuneración:</td> 

                    </tr>
                    <tr>
                        <td colspan="1" align="left">Bs.</td>
                        <td colspan="1" align="left"><?php echo round($primantiguedad/30,2) ?></td>
                        <td colspan="1" align="left"></td>
                        <td colspan="2" align="left"><?php echo $primantiguedaddiario ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left">17.- Prima de Profesionalización diaria:</td>
                        <td colspan="3" align="left">18.- CINCO (<?php echo $dias ?>) días adicionales de Profesionalización:</td>
                        <td colspan="1" rowspan="1" align="left">Días de Bono Vacacional: 145 DIAS</td>     
                    </tr>
                    <tr>
                        <td colspan="1" align="left">Bs.</td>
                        <td colspan="1" align="left"><?php echo round($primprofesion/30,2) ?></td>
                        <td colspan="1" align="left"></td>
                        <td colspan="2" align="left"><?php echo $primprofesiondiario ?></td>
                        <td colspan="1" rowspan="4" align="left"><?php echo $bonovacacional ?></td>
                         
                    </tr>
                    <tr>
                        <td colspan="2" align="left">19.- Prima por Hijos diaria:</td>
                        <td colspan="3" align="left">20.- CINCO (<?php echo $dias ?>) días adicionales de Prima por Hijos ></td>
                          
                    </tr>
                    <tr>
                        <td colspan="1" align="left">Bs.</td>
                        <td colspan="1" align="left"><?php echo round($primhijos/30,2) ?></td>
                        <td colspan="1" align="left"></td>
                        <td colspan="2" align="left"><?php echo $primhijosdiario ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left"></td>
                        <td colspan="1" align="left">TOTAL  Bs.</td>
                        <td colspan="2" align="left"><?php echo $primasdiariastotales ?></td>
                    </tr>
                    <tr>
                        <td colspan="7" style="background-color: #99CCFF;" align="center">DISFRUTE Y PAGO DE VACACIONES</td>
                    </tr>
                    <tr>
                        <td colspan="5" rowspan="2" align="center" style="border: medium transparent">VACACIONES</td>
                        <td colspan="2" align="center">23- Total a Pagar:</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="background-color: #99CCFF;">Asignaciones</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="background-color: #99CCFF;">22.-Periodo Vacacional</td>
                        <td colspan="1" rowspan="17" style="border: medium transparent" align="left" ></td>
                        <td colspan="1" rowspan="1" style="border: medium transparent" align="left" ></td>
                        <td colspan="1" rowspan="1" style="border: medium transparent" align="left" ></td>
                        <td colspan="2" rowspan="3" style="" align="left" >Bono Vacacional: <?php echo $bonovacacional ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style=""><?php echo $quinquenio ?></td>
                        <td colspan="1" style="" align="left" >Días de disfrute: </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">Dias de Disfrute: <?php echo $disfrute ?> Dias</td>
                        <td colspan="1" style="" align="left" ><?php echo $disfrute ?> Dias</td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">Pago de Disfrute: <?php echo $pago ?> Dias</td>
                        <td colspan="1" rowspan="1" style="border: medium transparent" align="left" ></td>
                        <td colspan="1" rowspan="1" style="border: medium transparent" align="left" ></td>
                        <td colspan="2" rowspan="2" style="" align="left" >Dias adicionales de remuneración (<?php echo $dias ?> Dias) <?php echo $primasdiariastotales ?></td>
                        
                    </tr>
                    <tr>
                        
                        <td colspan="1" style="border: medium transparent" align="left" >.</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">24.- CODIFICACIÓN PRESUPUESTARIA:</td>
                        <td colspan="1" style="" align="left" >25.- Inicio</td>
                        <td colspan="1" style="" align="left" >26.- Final</td>
                        <td colspan="1" rowspan="3" style="" align="left" >Total Asignaciones</td>
                        <td colspan="1" rowspan="3" style="" align="right" ><?php echo $bonovacacional + $primasdiariastotales ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">401-01-36-00-000  SUELDO BÁSICO DEL  PERSONAL ALTO NIVEL Y DE DIRECCION</td>
                        <?php
                        $sql="SELECT * FROM fechas WHERE correlativo ='$correlativo'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $inicio = $mostrar['inicio'];
      $final = $mostrar['final'];
      $regreso = $mostrar['regreso'];

}
?>
                        <td colspan="1" rowspan="5" style="" align="center" ><?php echo $inicio ?></td>
                        <td colspan="1" rowspan="5" align="center" ><?php echo $final ?></td>

                    </tr>
                    <tr>
                        <td colspan="1" align="right" style="">Bs.</td>
                        <td colspan="1" align="left" style=""><?php echo $sueldobasicodiario ?></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">401-03-45-00-000  PRIMAS POR HIJOS E HIJAS AL PERSONAL DE ALTO NIVEL Y DE DIRECCION </td>
                         <td colspan="2" rowspan="1" style="" align="left" >Deducciones</td>
                    </tr>
                    <tr>
                        <td colspan="1" align="right" style="">Bs.</td>
                        <td colspan="1" align="left" style=""><?php echo $primhijosdiario ?></td>
                        <td colspan="1" rowspan="1" style="" align="left" >S.S.O.</td>
                        <td colspan="1" rowspan="1" style="" align="left" >0.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">401-03-95-00-000  OTRAS PRIMAS AL PERSONAL ALTO NIVEL Y DE DIRECCION </td>
                        <td colspan="1" rowspan="1" style="" align="left" >Reg. Prest. Empleo</td>
                        <td colspan="1" rowspan="1" style="" align="left" >0.00</td>

                    </tr>
                    <tr>
                        <td colspan="1" align="right" style="">Bs.</td>
                        <td colspan="1" align="left" style=""><?php echo $primprofesiondiario ?></td>
                        <td colspan="2" rowspan="1" align="center" >27.-  Fecha de Reintegro:</td>
                        <td colspan="1" rowspan="1" style="" align="left" >Reg. Prestac. Vivienda</td>
                        <td colspan="1" rowspan="1" style="" align="left" >0.00</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">401-03-49-00-000  PRIMAS DE ANTIGÜEDAD AL  PERSONAL DE ALTO NIVEL Y DE DIRECCION </td>
                        <td colspan="2" rowspan="5" align="center" ><?php echo $regreso ?></td>
                        <td colspan="1" rowspan="1" style="" align="left" >Pensión y Jubilación.</td>
                        <td colspan="1" rowspan="1" style="" align="left" >0.00</td>
                    </tr>
                    <tr>
                        <td colspan="1" align="right" style="">Bs.</td>
                        <td colspan="1" align="left" style=""><?php echo $primantiguedaddiario ?></td>
                        <td colspan="2" rowspan="2" style="border: medium transparent" align="left" >.</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="">401-05-18-00-000 BONO VACACIONAL AL PERSONAL DE  ALTO NIVEL Y DE DIRECCION </td>
                    </tr>
                    <tr>
                        <td colspan="1" align="right" style="">Bs.</td>
                        <td colspan="1" align="left" style=""><?php echo $bonovacacional ?></td>
                        <td colspan="1" align="left" style="">Total Deducciones</td>
                        <td colspan="1" align="left" style="">0.00</td>
                    </tr>
                    <tr>
                        <td colspan="1" align="left" style="">Total</td>
                        <td colspan="1" align="left" style=""><?php echo $bonovacacional + $primasdiariastotales ?></td>
                        <td colspan="2" align="left" style="background-color: #99CCFF;">Las deducciones se efectuarán en la nómina.</td>
                    </tr>
                    <tr>
                        <td colspan="7" align="left" style="text-align: justify"><strong>24.- BASE LEGAL: <br> RESOLUCIÓN Nº PGEB100-110-0071/18 DE LA  PROCURADURÍA GENERAL DEL ESTADO BOLÍVAR DE FECHA: 29/08/2018.<br>ARTÍCULO PRIMERO: Se acuerda otorgar un bono vacacional de ciento cuarenta y cinco (145) días, para cada trabajador o trabajadora, funcionario o funcionaria, y empleado o empleada, obrero u obrera, contratado y contratada de la Procuraduría General del Estado, cuando cumplan un año de servicio en la Institución. Al personal que está en comisión de servicio le corresponderá la diferencia entre el salario que percibe en su lugar de origen y en la Procuraduría. ARTÍCULO SEGUNDO: “Los trabajadores o trabajadoras, funcionarios o funcionarias, y empleados o empleadas, obreros u obreras, contratados y contratadas, tendrán derecho a una vacación anual de quince (15) días hábiles de disfrute con pago de dieciocho (18) días de sueldo durante el primer quinquenio de servicios, de dieciocho (18) días hábiles de disfrute con pago de veintiún (21) días de sueldo durante el segundo quinquenio de servicios, de veintiún (21) días hábiles de disfrute con pago de veinticinco (25) días de sueldo durante el tercer quinquenio de servicios,  y de veinticinco (25) días hábiles de disfrute con pago de treinta (30) días de sueldo a partir de dieciséis (16) años de servicio en la Administración Publica.</strong></td>
                    </tr>
                    <?php 
                    $sql="SELECT * FROM nominas WHERE correlativo ='$correlativo'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $periodo = $mostrar['periodo'];
      $mes2 = date("m", strtotime($periodo)); 
      $ano2 = date("Y", strtotime($periodo));
      $ano3 = $ano2-1;
      $meses = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
      $date2 = $meses[$mes2-1];
}
?>
                    <tr>
                        <td colspan="7" align="left" style="text-align: justify"><strong>25.- Declaro que he recibido de la PROCURADURÍA GENERAL DEL ESTADO BOLÍVAR, la cantidad de: <?php echo convertirNumeroLetra($bonovacacional + $primasdiariastotales) ?> (Bs. <?php echo $bonovacacional + $primasdiariastotales ?>) por concepto de pago de Bono Vacacional correspondiente al período: <?php echo $ano3 ?>-<?php echo $ano2 ?> y días adicionales por disfrute de Vacaciones. En Ciudad Bolívar,  mes de <?php echo $date2 ?> de 2023.</td>
                    </tr>
                    <tr>
                    <td colspan="2" align="left" style="background-color: #99CCFF;">ELABORADO POR:</td>
                    <td colspan="2" align="left" style="background-color: #99CCFF;">REVISADO POR:</td>
                    <td colspan="3" align="left" style="background-color: #99CCFF;">AUTORIZADO POR:</td>
                    </tr>
                    <tr>
                      <?php
                        $sql="SELECT * FROM trabajadores WHERE cargo ='COORDINADORA DE TALENTO HUMANO' OR cargo = 'COORDINADOR DE TALENTO HUMANO'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombrescoord = $mostrar['nombres'];
      $apellidoscoord = $mostrar['apellidos'];
      $cargocoord = $mostrar['cargo'];

}
$sql="SELECT * FROM trabajadores WHERE cargo ='DIRECTOR DE TALENTO HUMANO (E)'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombresdirecttahu = $mostrar['nombres'];
      $apellidosdirecttahu = $mostrar['apellidos'];
      $cargodirecttahu = $mostrar['cargo'];

}
$sql="SELECT * FROM trabajadores WHERE cargo ='DIRECTORA DE ADMINISTRACION Y FINANZAS (E)'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombresdirectadmon = $mostrar['nombres'];
      $apellidosdirectadmon = $mostrar['apellidos'];
      $cargodirectadmon = $mostrar['cargo'];

}

                       ?>

                    <td colspan="2" rowspan="1" align="left" style="height: 50px;"></td>
                    <td colspan="2" rowspan="1" align="left" style="height: 50px;"></td>
                    <td colspan="3" rowspan="1" align="left" style="height: 50px;"></td>
                    </tr>
                    <tr>
                    <td colspan="2"  align="left" style="">Nombre y Apellidos: <?php echo $nombrescoord ?> <?php echo $apellidoscoord ?></td>
                    <td colspan="2"  align="left" style="">Nombre y Apellidos: <?php echo $nombresdirecttahu ?> <?php echo $apellidosdirecttahu ?></td>
                    <td colspan="3"  align="left" style="">Nombre y Apellidos: <?php echo $nombresdirectadmon ?> <?php echo $apellidosdirectadmon ?></td>
                    </tr>
                    <tr>
                    <td colspan="2"  align="left" style="">Cargo: <?php echo $cargocoord ?></td>
                    <td colspan="2"  align="left" style="">Cargo: <?php echo $cargodirecttahu ?></td>
                    <td colspan="3"  align="left" style="">Cargo: <?php echo $cargodirectadmon ?></td>
                    </tr>
                    <?php
                    $sql="SELECT * FROM trabajadores WHERE cargo ='Procurador General del Estado Bolivar (E)'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombresprocu = $mostrar['nombres'];
      $apellidosprocu = $mostrar['apellidos'];
      $cargoprocu = $mostrar['cargo'];

}



                     ?>
                  
                    <tr>
                    <td colspan="3"  align="left" style="background-color: #99CCFF;">APROBADO POR:</td>
                    <td colspan="4"  align="left" style="background-color: #99CCFF;">RECIBE CONFORME:</td>
                    </tr>
                    <tr>
                    <td colspan="3" rowspan="1" align="left" style="height: 50px;"></td>
                    <td colspan="4" rowspan="1" align="left" style="height: 50px;"></td>
                    </tr>
                    <tr>
                    <td colspan="3" rowspan="1" align="left" style="">Nombre y Apellidos: <?php echo $nombresprocu ?> <?php echo $apellidosprocu ?></td>
                    <td colspan="3" rowspan="1" align="left" style="">Nombre y Apellidos: <?php echo $nombres ?> <?php echo $apellidos ?></td>
                    
                     <td colspan="1" rowspan="2" align="center" style=""><?php echo $periodo ?></td>

                    </tr>
                    <tr>
                    <td colspan="3"  align="left" style="">Cargo: <?php echo $cargoprocu ?></td>
                    <td colspan="3"  align="left" style="">Cedula de Identidad:V-<?php echo $cedula ?></td>
                    
                    </tr>
<?php 
$vacaciones = round($sueldototal2/30,2)*145 + $primasdiariastotales;
$vacaciones = number_format($vacaciones,2, "", "");
$modificacion = ("UPDATE montos SET vacaciones = '$vacaciones' WHERE cedula = '$cedula' ");
$ejecutar=mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
$ejecutar=mysqli_query($conexion,$modificacion);
 
 ?>
                    
<?php }}}} ?>




                    
                
            </table>






















