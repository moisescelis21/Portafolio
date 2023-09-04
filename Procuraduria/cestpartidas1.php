
     
    <table style="width: 50%;" border="1" align="center">
                    <tr>
                        <th style="font-size: 9px">PARTIDAS</th>
                        <th style="font-size: 9px">COD</th>
                        <th style="font-size: 9px">MONTOS EN BOLIVARES</th>
                     </tr>         
    <?php
    $cestaTT1 = 0;
    $cestaTT2 = 0;
    $cestaTT3 = 0;
    $cestaTT4 = 0;
    $cestaTTT = 0;
    $cestaT1 = 0;
    $cestaT2 = 0;
    $cestaT3 = 0;
    $cestaT4 = 0;
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

$sql3="SELECT * FROM preciobcv";
    $result3=mysqli_query($conexion,$sql3);

    while($mostrar3=mysqli_fetch_array($result3)){
      $precioactual = $mostrar3['precioactual'];

}


    while($mostrar=mysqli_fetch_array($result)){
      $id = $mostrar['id']; 
      $nomina = $mostrar['nomina'];
      $cestaT = round($precioactual*40,2);

    if ($nomina == "Alto Funcionario"){
      $cestaT1 = $cestaT1 + $cestaT;
    }
    if ($nomina == "Alto Nivel") {
      $cestaT2 = $cestaT2 + $cestaT;
    }
    if ($nomina == "Empleado") {
      $cestaT3 = $cestaT3 + $cestaT;
    }
    if ($nomina == "Obrero") {
      $cestaT4 = $cestaT4 + $cestaT;
    }
      

     ?>
     
<?php


    $cestaTT1 = $cestaT1;
    $cestaTT2 = $cestaT2;
    $cestaTT3 = $cestaT3;
    $cestaTT4 = $cestaT4;
    $cestaTTT = $cestaTT1 + $cestaTT2 + $cestaTT3 + $cestaTT4;
    $cantidad = $cantidad + 1;


     ?>   


                  <?php }} ?>
                    

                    
                    <tr>
                        <td style="font-size: 9px" align="center">ALTO FUNCIONARIO</td>
                        <td style="font-size: 9px" align="center">401-04-46-00-000</td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($cestaTT1,2); ?></td>    
                    </tr>
                    <tr>
                        <td style="font-size: 9px" align="center">ALTO NIVEL</td>
                        <td style="font-size: 9px" align="center">401-04-51-00-000</td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($cestaTT2,2); ?></td>    
                    </tr>
                    <tr>
                        <td style="font-size: 9px" align="center">EMPLEADO</td>
                        <td style="font-size: 9px" align="center">401-04-08-00-000</td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($cestaTT3,2); ?></td>    
                    </tr>
                    <tr>
                        <td style="font-size: 9px" align="center">OBRERO</td>
                        <td style="font-size: 9px" align="center">401-04-18-00-000</td>
                        <td style="font-size: 9px" align="right"><?php echo number_format($cestaTT4,2); ?></td>    
                    </tr>
                    <tr>
                        <td style="" align="center" colspan="2">TOTAL</td>

                        <td style=""align="right"><?php echo number_format($cestaTTT,2) ?></td>
                    </tr>    
            </table>
</br></br></br>