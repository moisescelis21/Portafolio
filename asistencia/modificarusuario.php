<?php
session_start();
$admin=$_SESSION["admin"];

if (!isset($_SESSION["usuario"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'index.php';</script>";
  }else{
    if ($admin == 0) {
      echo "<script>alert('Usted no tiene permiso para ingresar aqui.'); window.location= 'inicio.php';</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio | </title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php require_once "scripts.php" ?>

</head>
<style>

    body{
    background: url(img/bg2.jpg);
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto';
    height: 650px;
    }
nav ul{
    list-style: none;
    padding: 0;
}

nav li{
    line-height: 3rem;
    position: relative;
    width: 300px;
}

nav li ul {
    position: absolute;
}

nav a{
    text-decoration: none;
    color: #fff;
    display: block;
    padding: 0 2.5em;
    transition: .4s;
}

nav a:hover{
    background: rgba(0,0,0,.5);
}




/*PRIMER NIVEL*/

nav > ul {
    background: #333 ;
    display: table;
    width: 100%;

}

nav > ul > li {
    float: left;
}

/*SEGUNDO NIVEL*/

nav li li {
    background: #222;
    width: 300px;
    max-height: 0;
    overflow: hidden;

}

nav li:hover > ul > li {
    max-height: 1000px;
    overflow: visible; 
}

nav > ul > li > ul{
    top: 100%;
}

/*TERCER NIVEL*/

nav ul ul ul {
    left: 100%;
    top: 0;
}
img{
    width: 100px;
    height: 110px;
    margin: auto;
    float: right;
}



table{
    background: rgba(255, 255, 255, 0.6);
    text-align: left;
    border-collapse: collapse;
    width: 90%;
    transition: all .5s ease;
    margin: 6% auto;
}


td, tr{
    padding: 10px;
}

thead{
    background-color: #333;
    color: white;
}

.relleno:hover{
    background-color: #369681;
    color: white;
}
img{
    width: 100px;
    height: 110px;
    margin: auto;
    float: right;
}





.contenedor1{
    background-color: rgba(1,1,1,0.6);
    padding: 120px 120px;
    box-shadow: 0 0 8px 0 rgba(1, 1, 1, 0.9);
    border-radius: 10px;
    width: 680px;
    height: 300px;
    margin: 10% auto;

    border-bottom: 5px solid;
    border-image: linear-gradient(to right, #38ef7d, #11998e) .5 stretch;
    

    }

h2{
    color: #fff;
    margin: -12% 0;



}

input{
    margin-top: 60px;
      background-color: #3b4148;
    border-radius: 0px 3px 3px 0px;
    -moz-border-radius: 0px 3px 3px 0px;
    -webkit-border-radius: 0px 3px 3px 0px;
    color: #fff;
    border: none;
    font-family: roboto;
    font-size: 20px;
    line-height: 1.5em;
    width: 250px;
    margin-left: 45px;
}
select{
    margin-top: 60px;
      background-color: #3b4148;
    border-radius: 0px 3px 3px 0px;
    -moz-border-radius: 0px 3px 3px 0px;
    -webkit-border-radius: 0px 3px 3px 0px;
    color: #fff;
    border: none;
    font-family: roboto;
    font-size: 20px;
    line-height: 1.5em;
    width: 250px;
    margin-left: 45px;
}
.boton {
    font-family: 'roboto';
    background: #4568DC;
    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);
    background: linear-gradient(to right, #38ef7d, #11998e);
    border: none;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
        }

.head{
margin-top: 15%;
}


</style>
<img src="img/logonuevo.png">
<body>
<?php require('./layout/nav.php') ?>

<div class="contenedor1">
    
<form action="modificarusuario2.php" method="POST">
    <center><h2>Nuevo Usuario</h2></center>
    <div class="head">
<?php
        $id=$_GET['id'];
        $conexion=mysqli_connect('localhost','root','','liceo');
        $sql="SELECT * FROM usuarios WHERE id='$id'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $id = $mostrar['id'];   
            $nombres = $mostrar['nombre'];
            $apellidos = $mostrar['apellido'];
            $cedula = $mostrar['cedula'];
            $usuario = $mostrar['usuario'];
            $password = $mostrar['password'];
            $correo = $mostrar['correo'];
            $admin = $mostrar['admin'];

         ?>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?php echo $nombres ?>">
<input type="text" placeholder="Apellidos" name="apellido" id="apellido" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?php echo $apellidos ?>">
<input type="text" placeholder="Usuario" name="usuario" id="usuario" value="<?php echo $usuario ?>">
<input type="text" id="cedula"  placeholder="Cedula"  name="cedula" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" value="<?php echo $cedula ?>">
<input type="text" id="correo"  placeholder="Correo"  name="correo" value="<?php echo $correo ?>">
<select name="admin"  id="admin">
    <option value="2">Privilegios</option>
    <?php if ($admin == 1) {
    ?>   
    <option value="1" selected>Administrador</option>
    <option value="0">Usuario</option>
    <?php } ?>
    <?php if ($admin == 0) {
    ?>  
     <option value="1">Administrador</option>
    <option value="0" selected>Usuario</option>
    <?php } ?>
    
</select>
<?php } ?>
</br>
</br>
</br>

<button type="submit" class="boton" id="registro">Registrar</button>
</form>
</div>
</div>




</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){

        $('#registro').click(function(){
            var correo = document.getElementById('correo').value;
            if($('#nombre').val()==""){
                alertify.alert("Debes agregar el nombre");
                return false;
            }else if($('#apellido').val()==""){
                alertify.alert("Debes agregar el apellido");
                return false;
            }else if($('#usuario').val()==""){
                alertify.alert("Debes agregar el usuario");
                return false;
            }else if($('#cedula').val()==""){
                alertify.alert("Debes agregar la cédula de identidad");
                return false;
            }else if($('#privilegio').val()=="2"){
                alertify.alert("Debes agregar el privilegio");
                return false;
            }else if($('#correo').val()==""){
                alertify.alert("Debes agregar el correo electrónico");
                return false;
            }if(/^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/.test(correo)){
            }else{
                alertify.alert("Debes colocar un correo electrónico valido");
                return false;
            }

            cadena="nombre=" + $('#nombre').val() +
                    "&apellido=" + $('#apellido').val() +
                    "&usuario=" + $('#usuario').val() + 
                    "&contraseña=" + $('#contraseña').val() +
                    "&cedula=" + $('#cedula').val() +
                    "&correo=" + $('#correo').val() +
                    "&privilegio=" + $('#privilegio').val();

           
          
        });
    });

</script>