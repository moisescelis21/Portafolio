
<!DOCTYPE html>
<html>
<head>
	<title>Constancia </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<img src="img/logo.jpeg" style="height: 150px; width: 250px;">
	<p style="font-size: 12px; margin-left: 30px;"><strong>RIF: G-20000274-3</strong></p>
	<p style="text-align: right; font-size: 20px;"><strong>DTH-350-121-0001/2023</strong></p>
	<br><br><br><br>
	<p style="text-align: center; font-size: 20px; margin-top: -50px;"><u>CONSTANCIA DE TRABAJO</u></p>
	<br><br>
    <?php 
	$date = date('d');
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$date2 = $meses[date('n')-1];
	$date3 = date('Y');
    $id=$_GET['id'];
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql="SELECT * FROM trabajadores WHERE id=$id";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $resolucion = $mostrar['resolucion'];
      $datere = date("d", strtotime($mostrar['fechresolucion']));
      $meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
	  $date2re = $meses[date("m", strtotime($mostrar['fechresolucion']))-1];
	  $date3re = date("Y", strtotime($mostrar['fechresolucion']));
      $cargo = $mostrar['cargo'];
      function convertirNumeroLetra($numero){
    $numf = milmillon($numero);
    return $numf."";
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
 	<?php 
	$date = date('d');
	$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
	$date2 = $meses[date('n')-1];
	$date3 = date('Y');
    $id=4;
    $conexion=mysqli_connect('localhost','root','','procuraduria');
    $sql="SELECT * FROM trabajadores WHERE cargo='DIRECTORA DE TALENTO HUMANO'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nomdirect = $mostrar['nombres'];
      $apedirect = $mostrar['apellidos'];
      $cedirect = $mostrar['cedula'];
      $resodirect = $mostrar['resolucion'];
      $dateredirect = date("d", strtotime($mostrar['fechresolucion']));
      $meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
	  $date2redirect = $meses[date("m", strtotime($mostrar['fechresolucion']))-1];
	  $date3redirect = date("Y", strtotime($mostrar['fechresolucion']));
      $cargodirect = $mostrar['cargo'];


      
     ?>
	<p style="margin-left: 2%; font-size: 20px; text-align: justify; margin-top: -30px;">Quien Suscribe, <strong><?php echo $nomdirect ?> <?php echo $apedirect ?></strong>  Titular de la Cedula de identidad N° V-<strong><?php echo $cedirect ?></strong>, actuando en mi caracter de: <strong><?php echo $cargodirect ?></strong>, segun se evidencia en Resolucion N° PGEB-<?php echo $resodirect ?> de fecha: veinticuatro (<?php echo $dateredirect ?>) de <?php echo $date2redirect ?> del <?php echo convertirNumeroLetra($date3redirect); ?> (<?php echo $date3redirect ?>), mediante el presente, hago constar que el ciudadano: <strong><?php echo $nombres ?> <?php echo $apellidos ?></strong>, Titular de la Cedula de Identidad numero <strong>V-<?php echo $cedula ?></strong>, presta sus servicios en esta Institucion como: <strong><?php echo $cargo ?></strong> tal como consta en Resolución N°:PGEB<?php echo $resolucion ?> emanada del Despacho de Procurador General del Estado Bolivar, de fecha <?php echo convertirNumeroLetra($datere); ?> (<?php echo $datere ?>) de <?php echo $date2re ?> del  <?php echo $date3re ?>.
	<br>
	<p style="margin-left: 2%; font-size: 20px;">Constancia que se expide en Ciudad Bolívar, a los <?php echo convertirNumeroLetra($date); ?> (<?php echo $date ?>) dias del mes de <?php echo $date2 ?> <?php echo convertirNumeroLetra($date3); ?> (<?php echo $date3 ?>)</p>
	<br>
	<p style="text-align: center; font-size: 20px; margin-top: -10px;">Atentamente,</p>
	<br>
	<strong><p style="text-align: center; font-size: 20px; margin-top: -10px;">Lcda. <?php echo $nomdirect ?> <?php echo $apedirect ?></p>
	<p style="text-align: center; font-size: 20px;margin-top: -10px"><?php echo $cargodirect ?></p>
	<p style="text-align: center; font-size: 20px;margin-top: -20px">Procuraduría General del Estado Bolívar</p>
	<p style="text-align: center; font-size: 15px; margin-top: -20px">Delegación otorgada por el Procurador General del Estado Bolívar, </br> 
mediante Resolución N° PGEB100-110-0010/13 de fecha 28/02/2013</strong>
</p>
<p style="margin-top: 70px">c.c. Archivo</p>
<center>
	<p>__________________________________________________________________________________________</p>
	<p style="font-size: 12px;">Av. Cruz Verde Diagonal Av. Cedeño – Teléfono: (0285) 6323531– Email: <u>procubolivar@gmail.com</u> / <u>dthpgeb@hotmal.com</u></p>
</center>

<?php }} ?>
</body>
</html>