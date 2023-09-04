<?php
session_start();
$usuario = $_SESSION["usuario"];
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon.svg">
    <title>El Punto del Sabor | Sistema</title>

    <!-- Google Font -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/sidebarsystem.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/remixicon.css">



<!-- DATATABLES -->
<link rel="stylesheet" type="text/css" href="DataTables/Bulma-0.9.2/css/bulma.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<!-- RESPONSIVE TABLES -->
<link rel="stylesheet" href="datatables/Responsive-2.2.9/css/responsive.foundation.min.css">
<script src="datatables/Responsive-2.2.9/js/responsive.foundation.min.js"></script>
</head>

<style>
  
.container1{
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.container__section{
    margin-top: 50px;
    padding: 20px 10px;
    display: flex;
    flex-direction: column;
    
    gap: 20px;
    margin: auto;
    background-color: var(--blank-color);
    width: 80%;
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.6)

}

.back__div {
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 100%;
    flex-flow: wrap;
}

.back__div-item{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    width: fit-content;
}


.back__div-item i {
    color: var(--blank-color);
    text-transform: uppercase;
    background-color: var(--primary-color);
    border-radius: 50%;
    font-size: 20px;
    padding: 10px;
}
.back__div-item i:hover {
    background-color: var(--secondary-color);
    color: var(--blank-color);
}



.back {
    text-decoration: none;
}

/* AVATAR */

.container__section-avatar{
    display: flex;
    align-items: center;
    
}
.avatar__div{
    flex-direction: column;
    display: flex;
    justify-content: flex;
    align-items: center;
    min-width: 280px;
    width: 40%;
}
.avatar-img{
    display: flex;
    flex-direction: column;
}
.avatar {
    width: 200px;
    max-width: 200px;
    height: auto;  
    overflow: hidden;
    margin: 0 auto;
    pointer-events: none;
}
.avatar__select{
    background-color: rgba(50, 121, 6, 0.913);
    position: relative;
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40px;
    left: 60%;
    bottom: 40px;
    font-size: 30px;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
}


.user-info{
    width: 100%;
    color: #fff;
    display: flex;
    font-size: 16px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    line-height: 1.5;
}
.user-info h2{
    font-size: 18px;
    text-transform: uppercase;
    color: #fff;
}

.user-info p{
  color: #fff;
}



/* FORM */

.form {
    width: 100%;
    padding: 10px 10px;
    display: flex;
}

.form_container {
    margin: auto;
    width: auto;
    padding: 10px;
    display: flex;
    flex-direction: column;
    width: 60%;
    font-weight: bold;
    
}


.form-h2 {
    color: #fff;
    margin: 20px 0;
    text-align: center;
    font-size: 20px;
}



.container-inputs {
    width: 100%;
    max-width: 400px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 20px;
}

.form-icon{
    width: 5%;
    color: #fff;
}

.form-label {
    display: block;
    color: #fff;
    padding: 5px;
    font-size: 12px;
    text-transform: uppercase;
    width: 30%;
    min-width: 80px;
    text-align: left;
}

.form__inputs {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap:20px;
    width: 70%;
}

.form__inputs .form__validacion-estado {
    opacity: 0;
    position: absolute;
    margin-right: auto;
    padding-right: 10px;
}

.container-inputs input {
    padding: 8px;
    width: 100%;
    margin: 10px 0;
    border: none;
    border-radius: 2px;
    background-color: var(--input-select);
    border-radius: 20px;
    border: 2px solid rgba(2, 46, 60, 0.509);
    color: rgb(92, 92, 92);
    font-size: 15px;
    outline: none;
    transition:var(--transition-03);
}

.container-inputs input:focus {
    border-radius: 10px;
    border: 2px solid rgb(3, 159, 194);
    background-color: rgba(191, 186, 186, 0.08);
    color: var(--secondary-color2);
    -webkit-box-shadow: 0px 8px 20px 0px rgba(16, 123, 255, 0.5);
    box-shadow: 0px 8px 20px 0px rgba(16, 123, 255, 0.5);
}

.container-inputs input::placeholder {
    color: #fff;;
}

/* BOTONES */

.container-btn {
    width: 200px;
    margin:auto;
}

.container-btn input {
    padding: 15px;
    margin: 10px 0;
    width: 100%;
    border: 1px solid transparent;
    border-radius: 20px;
    background-color: var(--primary-color);
    color: rgb(255, 255, 255);
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.2s ease;
}

.container-btn input:active {

    transform: scale(0.95);
}

.container-btn input:hover {
    border: 1px solid var(--primary-color);
    background-color: var(--blank-color);
    color: var(--font-color);
    -webkit-box-shadow: 0px 8px 20px 0px rgba(16, 123, 255, 0.5);
    box-shadow: 0px 8px 20px 0px rgba(16, 123, 255, 0.5);
}




@media only screen and (max-width: 850px) {
    .container {
        width: 100%;
    }
    .back-div{
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
    }
    .form-h2{
        font-size: 14px;
    }
    .form {
        flex-direction: column;
    }
    .avatar__div{
        width: 100%;
    }
    .avatar__selection{
        bottom: calc(50% - 130px);
    }
    .form_container {
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .form-label{
        font-size: 10px;
    }

    .container-btn input {
        gap: 20px;
        font-size: 12px;
    }
}
</style>


<body>
    
     <!-- Sidebar Section Begin -->
     <?php require('./layout/sidebarsystem.php')  ?>
    <!-- Sidebar Section End -->


    <div id="overlay" class="overlay"></div>
      <div class="layout">
        <main class="content">
          <!-- CONTENIDO AQUI -->
          <div class="contenedor2">



</div>



<!-- IMAGEN DE PERFIL -->
<div class="container__section-avatar">
     <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $usuario = $mostrar['usuario'];
                            $correo = $mostrar['correo'];
                            $cedula = $mostrar['cedula'];
                            $privilegio = $mostrar['privilegio'];
                            
                        ?>

    <form class="form" id="formulario" action="shop-system-profile4.php?id_usuario=<?php echo $id ?>" method="POST" autocomplete="off">

        <!-- AVATAR -->
       
    
        <div class="avatar__div">
            <div class="avatar-img">
                <img class="avatar" src="img/avatar3.png" alt="">
                <div id="select" class="avatar__select"><i class="icon-cheveron-outline-down"></i></div>
                <div class="user-info">
                    <h2>Nombre de usuario: <?php echo $usuario ?> </h2>
                    <p>Cédula: <?php echo $cedula ?></p>
                    <?php if ($privilegio == 1) {
                    ?>
                    <p>Privilegio: Administrador</p>
                    <?php }else{
                    ?>
                    <p>Privilegio: Usuario</p>
                    <?php } ?>
                    
                </div>
            </div>


        </div>

        <div class="form_container">
            <div class="avatar__selection">
                <div id="close" class="avatar__selection-close"><i class="icon-close-outline"></i></div>

                <!-- OPCIONES DE AVATAR -->
                <?php 
                        $conexion=mysqli_connect('localhost','root','','delmary');
                        $sql="SELECT * FROM clientes WHERE usuario='$usuario'";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $usuario = $mostrar['usuario'];
                            $nombres = $mostrar['nombres'];
                            $correo = $mostrar['correo'];
                            $telefono = $mostrar['telefono'];
                            $telefonoalternativo = $mostrar['telefonoalternativo'];
                            $direccion = $mostrar['direccion'];
                            
                        ?>

            </div>
            <div class="container-inputs" id="grupo__usuario">
                <i class="icon-user form-icon"></i>
                <label class="form-label" for="usuario">Nombre Completo</label>
                <div class="form__inputs">
                    <input type="text" name="nombres" id="nombres" class=""
                            placeholder="Nombre Completo" value="<?php echo $nombres ?>" disabled>
                </div>
            </div>

            <!--CONTRASEÑA-->

            <div class="container-inputs" id="grupo__password">
                <i class="icon-key form-icon"></i>
                <label class="form-label" for="password"> Contraseña</label>
                <div class="form__inputs">
                    <input type="password" name="password" id="password" class="password" >
                </div>
            </div>


            <!--Correo-->

            <div class="container-inputs" id="grupo__correo">
                <i class="icon-box form-icon"></i>
                <label class="form-label" for="correo">Correo Electrónico</label>
                <div class="form__inputs">
                    <input type="text" name="correo" id="correo" class=""
                            placeholder="Correo Electronico" value="<?php echo $correo ?>" disabled>
                </div>
            </div>

            <div class="container-inputs" id="grupo__cedula">
                <i class="icon-news-paper form-icon"></i>
                <label class="form-label" for="cedula">Teléfono</label>
                <div class="form__inputs">
                    <input type="text" name="telefono" id="telefono" class=""
                            placeholder="Numero de Telefono" value="<?php echo $telefono ?>" disabled>
                </div>
            </div>
            <div class="container-inputs" id="grupo__cedula">
                <i class="icon-news-paper form-icon"></i>
                <label class="form-label" for="cedula">Teléfono Alternativo</label>
                <div class="form__inputs">
                    <input type="text" name="telefonoalternativo" id="telefonoalternativo" class=""
                            placeholder="Telefono Alternativo" value="<?php echo $telefonoalternativo ?>" disabled>
                </div>
            </div>
            <div class="container-inputs" id="grupo__cedula">
                <i class="icon-news-paper form-icon"></i>
                <label class="form-label" for="cedula">Dirección</label>
                <div class="form__inputs">
                    <input type="text" name="direccion" id="direccion" class=""
                            placeholder="Direccion de Delivery" value="<?php echo $direccion ?>" disabled>
                </div>
            </div>
            <div class="container-btn">
                <input type="submit" class="btn-submit" value="Guardar Cambios">
            </div>
        </div>
        <input type="hidden" name="id_usuario" id="id_usuario" class="id_usuario" value="<?php echo $id ?>" >
    </form>
<?php }} ?>
</div>
</div>
</div>
    </div>

</body>
</html>

<script src="js/sidebarsystem.js"></script>
<script src="js/table.js"></script>