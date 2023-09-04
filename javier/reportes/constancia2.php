
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
	<center><img src="img/logo3.png" style="height: 60; width: 500px;"></center>
	<?php
	$date = date('d');
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$date2 = $meses[date('n')-1];
	$date3 = date('Y');
	 ?>
	<p style="text-align: right; font-size: 15px;">Ciudad Bolivar, <?php echo $date; ?> de <?php echo $date2; ?> del <?php echo $date3; ?></p>
	<br><br><br><br>
	<p style="text-align: center; font-size: 20px;">A quien pueda interesarle</p>
	<br><br>
	<?php 
    
    $id=$_GET['id'];
    $conexion=mysqli_connect('localhost','root','','javier');
    $sql="SELECT * FROM trabajadores";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nombres = $mostrar['nombres'];
      $apellidos = $mostrar['apellidos'];
      $cedula = $mostrar['cedula'];
      $ingreso = date("d/m/Y", strtotime($mostrar['ingreso']));
      $cargo = $mostrar['cargo'];
      $numero = $mostrar['salario'];
	  $salario = $mostrar['salario'];


      
     ?>
	<p style="margin-left: 15%; font-size: 20px; text-align: justify;">Por medio de la Presente hago constar que el ciudadano(a) <?php echo $nombres; ?> &nbsp; <?php echo $apellidos; ?>  Titular de la cedula de identidad N° <?php echo $cedula;?> Presta sus servicios en esta empresa desde <?php echo $ingreso; ?> Actualmente ocupa el cargo en <?php echo $cargo; ?> con un Salario mensual de <?php echo convertirNumeroLetra($salario); ?>  ( Bs.s <?php echo $numero; ?>)</p>
	<p style="margin-left: 15%; font-size: 20px;">  </p>
	<p style="margin-left: 15%; font-size: 20px;"></p>
	<p style="margin-left: 15%; font-size: 20px;"></p>
	<p style="margin-left: 15%; font-size: 20px;"></p>
	<br>
	<?php } ?>
	<p style="margin-left: 15%; font-size: 20px;">Constancia que emite la empresa, a solicitud de la parte interesada.</p>
	<br>
	<p style="margin-left: 25%; font-size: 20px;">Por TECNOELECTROSUR, C.A, RIF J 40182272-0.</p>
	<br>
	<p style="margin-left: 35%; font-size: 20px;">Adolfo Hernández  16.626.607.</p>
	<p style="margin-left: 35%; font-size: 20px;">Teléfono: 0416-1806655.</p>
</body>
</html>