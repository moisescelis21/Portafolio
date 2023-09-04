
<!DOCTYPE html>
<html>
<head>
	<title>Ordenes </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }

    #factura {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 11px;
}

#factura td, #factura th {
  border: 1px solid #ddd;
  padding: 8px;
}

#factura tr:nth-child(even){background-color: #f2f2f2;}

#factura tr:hover {background-color: #ddd;}

#factura     th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #733131;
  color: white;
}

.footer{
    margin-top: 30%;
}
</style>
<body>
    <div style="font-size: 10px;">
	<center><img src="img/logo.png" style="height: 100px; width: 100px; "></center>

     

<h1 align="center" style="font-style: oblique;">REPORTE DE ORDENES</h1>
<br><br><br><br>
        <table id="factura">
                    <tr>
                        <th colspan="5">PEDIDOS</th>
                    </tr>
                    <tr>
                        <th>NOMBRE Y APELLIDO</th>
                        <th>DIRECCION DE DELIVERY</th>
                        <th>NUMERO DE TELÉFONO</th>
                        <th>PRODUCTOS</th>
                        <th>SUBTOTAL</th>
                    </tr>
<?php

    $conexion=mysqli_connect('localhost','root','','delmary');
    $sql="SELECT * FROM pedidos WHERE status = 'En Espera' or status = 'Confirmado' ";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
      $productos = $mostrar['productos'];
      $subtotal = $mostrar['subtotal'];
      $direccion = $mostrar['direccion'];
      $usuario = $mostrar['usuario'];


    $sql2="SELECT * FROM clientes WHERE usuario='$usuario'";
    $result2=mysqli_query($conexion,$sql2);
    while($mostrar2=mysqli_fetch_array($result2)){
      $nombres = $mostrar2['nombres'];
      $telefono = $mostrar2['telefono'];
      


     ?>
                    <tr>
                        <td style="" align="center"><?php echo $nombres; ?> </td>
                        <td style="" align="center"><?php echo $direccion; ?></td>
                        <td style=""align="center"><?php echo $telefono ?></td>
                        <td style="" align="center"><?php echo $productos; ?></td>
                        <td style="" align="center">$<?php echo $subtotal; ?></td>
                    </tr>
                    <?php
}
}
 ?>
                    
            </table>
           

        <div class="footer">
            <p style="text-align: center; font-size: 15px; font-weight: bold;">El Punto Del Sabor CBO</p>
            <p style="text-align: center; font-size: 15px; font-weight: bold;">Teléfonos: 0412 879 0532.</p>
            <p style="text-align: center; font-size: 12px; ">Calle principal del Barrio Libertador 1, Casa N°22. A una cuadra de Granitos Bolívar. </p>
        </div>





          






















