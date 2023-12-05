<?php
session_start();
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienes Generales</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="font-size: 10px;">
	<center></center>


     <table style="width: 100%;" border="1">
                <thead>
                    <tr>
                        <th rowspan="2" colspan="5" style="height: 10%"><img src="img/logo.jpeg" style="height: 100px; width: 100px; "></th>
    
                        <th colspan="4">BIENES NACIONALES-MUEBLES BM1</th>
                      
                    </tr>
                    <tr>
                        <th colspan="2">DIRECCION DE BIENES</th>
                        <th colspan="1">Fecha</th>
                        <th>Fecha</th>
                      
                    </tr>
                    <tr>
                        <th colspan="9">INSTITUCIÓN: PROCURADURIA GENERAL DEL ESTADO BOLÍVAR .   DIRECCIÓN: AV. CRUZ VERDE C/CALLE CEDEÑO.   TELEFONO: 0285-6326630   MUNICIPIO: HERES.   ESTADO :BOLIVAR</th>
                      
                    </tr>
                    <tr>
                        <th colspan="4">Clasificación (Código)</th>
                        <th rowspan="2">Cantidad</th>
                        <th rowspan="2">Nombre y Descripción de los Elementos</th>
                        <th rowspan="2">Ubicación Física</th>
                        <th rowspan="2">Valor Unitario BsD</th>
                        <th rowspan="2">OBSERVACIONES</th>
                      
                    </tr>
                    <tr>
                        <th>Grupo</th>
                        <th>Sub-grupo</th>
                        <th>Año</th>
                        <th>Numero</th>                      
                    </tr>
                </thead>
                <tbody> 
                    <?php $ubicacion = $_GET['ubicacion'];
                    $precio2 = 0;
                     $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql3="SELECT * FROM ubicaciones WHERE pertenece = '$ubicacion' OR id = '$ubicacion'";
                        $result3=mysqli_query($conexion,$sql3);
                        while($mostrar3=mysqli_fetch_array($result3)){
                            $id2 = $mostrar3['id'];
                            $nombre2 = $mostrar3['nombre'];
                            $pertenece = $mostrar3['pertenece'];


                                $conexion=mysqli_connect('localhost','root','','procuraduria');
                                $sql="SELECT * FROM bienes WHERE ubicacion = '$id2'";
                                $result=mysqli_query($conexion,$sql);
                                

                                while($mostrar=mysqli_fetch_array($result)){
                                    $id = $mostrar['id'];
                                    $precio = $mostrar['precio'];
                                    $precio2 = $precio2 + $precio;
                                    
                        

                        
                         
                            
                        ?>    
                    <tr>
                      
                        <td style="" align="center"><?php echo $mostrar['grupo']; ?></td>
                        <td style="" align="center"><?php echo $mostrar['sgrupo']; ?></td>
                        <td style="" align="center"><?php echo $mostrar['año']; ?></td>
                        <td style="" align="center"><?php echo $mostrar['numero']; ?></td>
                        <td style="" align="center"><?php echo $mostrar['cantidad']; ?></td>
                        <td style="" align="left"><?php echo $mostrar['descripcion']; ?></td>
                        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql2="SELECT * FROM ubicaciones WHERE id = '$ubicacion' OR pertenece = '$ubicacion'";
                        $result2=mysqli_query($conexion,$sql2);
                        $precio2 = 0;
                        while($mostrar2=mysqli_fetch_array($result2)){
                            $id3 = $mostrar2['id'];
                            $nombre = $mostrar2['nombre'];

                            $pertenece2 = $mostrar2['nombre'];


                         
                            
                        ?> 
                        <?php
                        if ($id3 == $ubicacion OR $id2 == $pertenece) {
                        ?>
                        <?php
                        if ($pertenece > 0) {
                        ?>
                        <td style="" align="center"><?php echo $nombre ?>(<?php echo $nombre2; ?>)</td>
                        <?php
                        }else{
                        ?>
                        <td style="" align="center"><?php echo $nombre2; ?></td>
                        <?php
                        }

                         ?>
                        
                        <?php
                        }

                         ?>
                        
                    <?php  } ?>
                        <td style="" align="right"><?php echo number_format($precio,2); ?></td>
                        <td style="" align="center"><?php echo $mostrar['observacion']; ?></td>

                    </tr>
                    <?php


                     }} ?>

                    <tr>
      
                        <td style="" colspan="5" align="center">PREPARACION</td>
                        <td style="" align="center">CONFORMACION</td>
                        <td style="" align="right">APROBACION</td>
                        <td style="" colspan="2">SELLO</td>

                    </tr>
                    <tr>
      
                        <td style="" colspan="5">Nombre: Leisy Salazar <br><br><br> Cargo: Auxiliar de Mantto y Serv. Generales <br><br><br> Firma</td>
                        <td style="" >Nombre: Haydelis Espinoza <br><br><br> Cargo: Coord. de Registro de Bienes, Mantto y Serv. Generales <br><br><br> Firma</td>
                        <td style="" >Nombre: Angel Ascanio <br><br><br> Cargo: Director. de Registro de Bienes, Mantto y Serv. Generales <br><br><br> Firma</td>
                        <td style="" colspan="2" ></td>

                    </tr>


                </tbody>
            </table>





















