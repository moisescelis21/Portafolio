<!DOCTYPE html>
<html>
<head>
	<title> | Registro</title>



    <meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php require_once "scripts.php"; ?>
</head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
<style>
    body {
    background: url(img/bg.jpg);
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto';
    height: 650px;
    display: flex;
    justify-content: center;
    align-items: center;
}

h1{
    text-align: center;
    font-weight: 700px;
}

form{
    margin-top: 13%;
    background-color: #FFF;
    padding: 50px 120px;
    box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
    border-radius: 10px;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px;
}

input{
    background: none;
    color: #5e5d5d;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--colorTextos);
}

input:focus{ 
    outline: none;
    color: #5e5d5d;
}

label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top: 10px;
    transition: 0.5s ease all;
    pointer-events: none;
    font-weight: bold;
}

input:focus~label,
input:valid~label{
    top: -14px;
    font-size: 12px;
    color: #2196f3;
}

.barra{
    position: relative;
    display: block;
    width: 100%;
}

.barra::before{
    content: "";
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #11998e, #38ef7d);
    transition: 0.3s ease width;
    left: 0;
}

input:focus~.barra::before{
    width: 100%;
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

@media screen and (max-width:500px){
    form{
        width: 80%;
    }
}
</style>
<br><br><br>
					<form id="frmRegistro" action="registrou.php" method="POST" autocomplete="off">
                        <img src="img/logonuevo.png" style="width: 100px; margin:  -50px auto; margin-left: 35%; margin-bottom: -15px;">
						<h1>Registro</h1>
					<div class="grupo">
                <input type="text" name="nombre" id="nombre" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra" ></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellido" id="apellido" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra"></span>
                <label for="">Apellido</label>
            </div>
            <div class="grupo">
                <input type="text" name="usuario" id="usuario"><span class="barra"></span>
                <label for="">Usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password"><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="text" name="cedula" id="cedula"><span class="barra"></span>
                <label for="">Cédula de Identidad</label>
            </div>
            <div class="grupo">
                <input type="text" name="correo" id="correo"><span class="barra"></span>
                <label for="">Correo Electrónico</label>
            </div>
					<p></p>
					<button type="submit" class="boton" id="registrarNuevo">Enviar Datos</button>
					<a href="index.php" class="boton">Iniciar Sesión</a>
					</form>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

		$('#registrarNuevo').click(function(){
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
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la contraseña");
				return false;
            }else if($('#cedula').val()==""){
                alertify.alert("Debes agregar la cédula de identidad");
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
					"&password=" + $('#password').val() +
                    "&cedula=" + $('#cedula').val() +
					"&correo=" + $('#correo').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.alert("Registro Exitoso!").set('onok', function(closeEvent){ window.location="index.php";} );
                                }else{
                                alertify.alert("Regitro Fallido ):");
							}
						}
					});
		});
	});

</script>

