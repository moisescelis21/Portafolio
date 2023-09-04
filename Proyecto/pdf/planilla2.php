<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            flex-direction: column;
            font-family: sans-serif;
            align-items: center;
            width: 100%;
            margin: 0 50px;
            border: 3px solid rgb(118, 117, 117);
            border-radius: 50px;
            height: 24cm;
            padding: 20px;
        }

        .header-container {

            border-radius: 20px;
            gap: 5px;
            width: 100%;
            text-align: center;
            font-size: 15px;
            top: 20px;
            background-color: #fff;
            padding: 10px;
            margin: 0 50px;
        }

        .header__container-text p {
            font-size: 14px;
            line-height: 1.5;

        }

        .header__container-text h2 {
            font-size: 14px;
            line-height: 1.5;
            color: gray;
        }

        .header-img {
            width: 120px;
            background-color: #fff;
            height: 50px;
            margin: 5px 100px 10px 100px;
            opacity: 0.7;

        }

        .info-container {
            margin-top: 100px;
            border: 3px solid rgb(118, 117, 117);
            border-radius: 30px;
            padding: 20px;
            height: 21cm;
        }



        .info__container-p1 {
            margin: 30px 40px 20px 40px;
            font-weight: bold;
        }

        .info__container-p1 p {
            display: inline;
        }


        .firmas {
            width: 100%;

            text-align: center;
        }

        .firmas hr {
            margin: 40px 0 20px 0;
            width: 180px;
        }

        .firmas hr {

            margin: 30px auto 20px auto;
            width: 180px;
        }

        .salto {
            page-break-after: always;
            border: none;
            margin: 0;
            padding: 0;
        }


        /* 2DA PAG */

        .acta {
            padding: 30px;
        }

        .acta h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .acta p {
            line-height: 1.5;
            text-align: justify;
        }

        table {
            width: 100%;
            border: 1px solid #000;
            margin: 20px auto 20px auto;
        }

        th {
            padding: 10px;
            border: 1px solid #000;
        }

        tr:nth-child(1) {
            background-color: rgb(188, 255, 255);
            border: 1px solid #000;
        }

        .firmas2 {
            width: 180px;
            float: left;
            margin-left: 50px;
        }

        .firmas2 p {
            margin-bottom: 10px;
        }

        .firmas3 {
            float: right;
            margin-top: -15px
            width: 200px;;
        }
        .firmas3 p{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
        <?php 
        $id=$_GET['id'];
        $conexion=mysqli_connect('localhost','root','','proyecto');
        $sql="SELECT * FROM actas WHERE id='$id' OR id2='$id'";
        $result=mysqli_query($conexion,$sql);  
        $row=mysqli_num_rows($result);
        while($mostrar=mysqli_fetch_assoc($result)){
            $equipo[] = $mostrar['equipo'];
            $marca[] = $mostrar['marca'];
            $serial[] = $mostrar['serial'];
            $serialB[] = $mostrar['serialB'];
            $color[] = $mostrar['color'];
            $direccion[] = $mostrar['direccion'];
            $fecha = date("d/m/Y", strtotime($mostrar['fecha']));
            $hora = $mostrar['hora'];
            $ubicacion[] = $mostrar['ubicacion']; 
            
        }                 
        ?>       
        <?php 
        $cedula=$_GET['cedula'];
        $conexion2=mysqli_connect('localhost','root','','proyecto');
        $sql2="SELECT * FROM trabajadores WHERE cedula='$cedula'";
        $result2=mysqli_query($conexion2,$sql2);
        while($mostrar2=mysqli_fetch_array($result2)){
            $nombre = $mostrar2['nombre'];
            $apellido = $mostrar2['apellido'];
            $cargo = $mostrar2['cargo'];   
         ?>
    <div class="container">

        <!-- 1ra PARTE -->
        <header class="header-container">
            <img class="header-img img1" src="img/gob.jpg" alt="">
            <img class="header-img img2" src="img/alcal.jpg" alt="">
            <div class="header__container-text">
                <h2>REPUBLICA BOLIVARIANA DE VENEZUELA</h2>
                <h2>ALCALDÍA DEL MUNICIPIO ANGOSTURA DEL ORINOCO</h2>
                <h2>DIRECCIÓN DE SISTEMAS Y TECNOLOGÍA</h2>
                <p><b>ENTREGA</b></p>
                <p><b>DE: Direccion de Sistemas y Tecnologia</b></p>
                <p><b>A: <?php print_r($direccion[0]); ?></b></p>
                <p><b>FECHA: <?php echo $fecha ?></b></p>
            </div>

        </header>
        <section>
            <?php if ($row == 1) {
            ?>
            <img src="../<?php print_r($ubicacion[0]); ?>" style="width: 100%; height: 50%;">

            <?php
            } if ($row == 2) {
            ?>
            <br><br><br><br><br>
            <img src="../<?php print_r($ubicacion[0]); ?>" style="width: 49%; height: 50%;">
            <img src="../<?php print_r($ubicacion[1]); ?>" style="width: 49%; height: 50%;">
            <?php
            }if ($row == 3) {
            ?>  
            <br><br><br><br><br>
            <img src="../<?php print_r($ubicacion[0]); ?>" style="width: 32%; height: 45%;">
            <img src="../<?php print_r($ubicacion[1]); ?>" style="width: 32%; height: 45%;">
            <img src="../<?php print_r($ubicacion[2]); ?>" style="width: 32%; height: 45%;">
            <?php
            }if ($row == 4) {
            ?>  
            <br><br><br><br><br>
            <img src="../<?php print_r($ubicacion[0]); ?>" style="width: 24%; height: 40%;">
            <img src="../<?php print_r($ubicacion[1]); ?>" style="width: 24%; height: 40%;">
            <img src="../<?php print_r($ubicacion[2]); ?>" style="width: 24%; height: 40%;">
            <img src="../<?php print_r($ubicacion[3]); ?>" style="width: 24%; height: 40%;">
            <?php
            } ?>
            
        </section>
        <div class="firmas">
            <p>ENTREGA:</p>
            <hr>
            </br>
            </br>
            <p><b><?php echo $nombre;?>&nbsp;<?php echo $apellido; ?></b></p>
            <p>C.I: <?php echo $cedula; ?></p>
            <p>Cargo: <?php echo $cargo; ?></p>
        </div>
    </div>

    <hr class="salto">
    <!-- 2da planilla -->

    <div class="container">
        <header class="header-container">
            <img class="header-img img1" src="img/gob.jpg" alt="">
            <img class="header-img img2" src="img/alcal.jpg" alt="">
            <div class="header__container-text">
                <h2>REPUBLICA BOLIVARIANA DE VENEZUELA</h2>
                <h2>ALCALDÍA DEL MUNICIPIO ANGOSTURA DEL ORINOCO</h2>
                <h2>DIRECCIÓN DE SISTEMAS Y TECNOLOGÍA</h2>
            </div>

        </header>

        <div class="acta">
            <h2>ACTA DE ENTREGA</h2>
            <p>En el día de hoy <?php echo $fecha; ?>, siendo las <?php echo $hora; ?> <?php if ($hora <= 12) {
            ?>
            AM
            <?php
            }else{
            ?>
            PM
            <?php
            }
            ?>. 
            se elabora la presente Acta en la Dirección de Sistemas
            y Tecnología, con la finalidad de dejar constancia de la entrega de 
            <?php if ($row == 1) {
            ?>
            un (01) <?php print_r($equipo[0]); ?> de Marca <?php print_r($marca[0]); ?> y Color <?php print_r($color[0]); ?>.
            <?php
                }if($row == 2){
            ?>
            dos (02) <?php print_r($equipo[0]); ?> y <?php print_r($equipo[1]); ?> Marca <?php print_r($marca[0]); ?> y <?php print_r($marca[1]); ?>, de colores <?php print_r($color[0]); ?> y <?php print_r($color[1]);?>.
            <?php
                }if($row == 3){ ?>
             tres (03) <?php print_r($equipo[0]); ?>, <?php print_r($equipo[1]); ?> y <?php print_r($equipo[2]); ?> de Marca <?php print_r($marca[0]); ?>, <?php print_r($marca[1]); ?> y <?php print_r($marca[2]); ?>, de colores <?php print_r($color[0]); ?>, <?php print_r($color[1]); ?> y <?php print_r($color[2]); ?>.
             <?php
                }if($row == 4){ ?>
             cuatro (04) <?php print_r($equipo[0]); ?>, <?php print_r($equipo[1]); ?>, <?php print_r($equipo[2]); ?> y <?php print_r($equipo[3]); ?> Marca <?php print_r($marca[0]); ?>, <?php print_r($marca[1]); ?>, <?php print_r($marca[2]); ?> y <?php print_r($marca[3]); ?>, de colores <?php print_r($color[0]); ?>, <?php print_r($color[1]); ?>, <?php print_r($color[2]); ?> y <?php print_r($color[3]); ?>. 
              <?php
                } ?>
    
            </p>
            <table>
                <tr>
                    <th>Equipo</th>
                    <th>Marca/Modelo</th>
                    <th>Serial N°</th>
                    <th>Serial de Bienes</th>
                    <th>Color</th>
                </tr>
                <?php if ($row == 1) {
                ?>
                <tr>
                    <th><?php print_r($equipo[0]); ?></th>
                    <th><?php print_r($marca[0]); ?></th>
                    <th><?php print_r($serial[0]);?></th>
                    <th><?php print_r($serialB[0]); ?></th>
                    <th><?php print_r($color[0]); ?></th>
                </tr>
                <?php
                }if($row == 2){
                ?>
                <tr>
                    <th><?php print_r($equipo[0]); ?></th>
                    <th><?php print_r($marca[0]); ?></th>
                    <th><?php print_r($serial[0]);?></th>
                    <th><?php print_r($serialB[0]); ?></th>
                    <th><?php print_r($color[0]); ?></th>
                </tr>
                 <tr>
                    <th><?php print_r($equipo[1]); ?></th>
                    <th><?php print_r($marca[1]); ?></th>
                    <th><?php print_r($serial[1]);?></th>
                    <th><?php print_r($serialB[1]); ?></th>
                    <th><?php print_r($color[1]); ?></th>
                </tr>
                <?php
                }if($row == 3){ 
                ?>
                <tr>
                    <th><?php print_r($equipo[0]); ?></th>
                    <th><?php print_r($marca[0]); ?></th>
                    <th><?php print_r($serial[0]);?></th>
                    <th><?php print_r($serialB[0]); ?></th>
                    <th><?php print_r($color[0]); ?></th>
                </tr>
                 <tr>
                    <th><?php print_r($equipo[1]); ?></th>
                    <th><?php print_r($marca[1]); ?></th>
                    <th><?php print_r($serial[1]);?></th>
                    <th><?php print_r($serialB[1]); ?></th>
                    <th><?php print_r($color[1]); ?></th>
                </tr>
                <tr>
                    <th><?php print_r($equipo[2]); ?></th>
                    <th><?php print_r($marca[2]); ?></th>
                    <th><?php print_r($serial[2]);?></th>
                    <th><?php print_r($serialB[2]); ?></th>
                    <th><?php print_r($color[2]); ?></th>
                </tr>
                <?php
                }if($row == 4){
                ?>
                <tr>
                    <th><?php print_r($equipo[0]); ?></th>
                    <th><?php print_r($marca[0]); ?></th>
                    <th><?php print_r($serial[0]);?></th>
                    <th><?php print_r($serialB[0]); ?></th>
                    <th><?php print_r($color[0]); ?></th>
                </tr>
                 <tr>
                    <th><?php print_r($equipo[1]); ?></th>
                    <th><?php print_r($marca[1]); ?></th>
                    <th><?php print_r($serial[1]);?></th>
                    <th><?php print_r($serialB[1]); ?></th>
                    <th><?php print_r($color[1]); ?></th>
                </tr>
                <tr>
                    <th><?php print_r($equipo[2]); ?></th>
                    <th><?php print_r($marca[2]); ?></th>
                    <th><?php print_r($serial[2]);?></th>
                    <th><?php print_r($serialB[2]); ?></th>
                    <th><?php print_r($color[2]); ?></th>
                </tr>
                 <tr>
                    <th><?php print_r($equipo[3]); ?></th>
                    <th><?php print_r($marca[3]); ?></th>
                    <th><?php print_r($serial[3]);?></th>
                    <th><?php print_r($serialB[3]); ?></th>
                    <th><?php print_r($color[3]); ?></th>
                </tr>
                <?php
                }
                ?>
            </table>
            <p>Entrega que se hace a la <b><?php print_r($direccion[0]); ?></b> a los efectos de apoyo a las actividades de esa
                Dirección, reiterándole mi más alta disposición y colaboración para el fortalecimiento de la gestión de
                nuestro Alcalde Sergio Hernández.
            </p>

        </div>
        <div class="firmas2">
            <p>ENTREGA:</p>
            <br>
            <hr class="firmas2__hr">
            <br>
            <p><b><?php echo $nombre;?>&nbsp;<?php echo $apellido; ?></b></p>
            <p>C.I: <?php echo $cedula; ?></p>
            <p>Cargo: <?php echo $cargo; ?></p>
        </div>
        <div class="firmas3">
            <p>RECIBE:</p>
            <p>______________________</p>
            <p>Nombre y Apellido:</p>
            <p>______________________</p>
            <p>C.I: __________________</p>
            <p>Teléfono: ______________</p>
            <p>Cargo: ________________</p>
            <p>Fecha: ________________</p>
        </div>

<?php
           
        }
                        
         ?>
    </div>
</body>

</html>