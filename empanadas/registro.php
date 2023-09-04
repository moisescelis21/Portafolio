<!DOCTYPE html>
<html>
<head>
	<title>Servicio de Delivery | Registro</title>
	<?php require_once "scripts.php"; ?>
</head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
<style>
	body {
    background: url(img/bgg.png);
    font-family: 'Roboto';
    height: 650px;
    display: flex;
    justify-content: center;
    align-items: center;
}

h1{
    text-align: center;
    font-weight: 700;
}

form{
    margin-top: 15%;
    background-color: #FFF;
    padding: 80px 150px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px ;
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
}

input:focus~label,
input:valid~label{
    top: -14px;
    font-size: 12px;
    color: #2196f3;
}


input:focus~.barra::before{
    width: 100%;
}

	.boton {
    font-family: 'roboto';
    background: #4568DC;
    background-color: #CCB89F;
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
        
    .boton:hover{
        background-color: #C0AA8E;
    }

@media screen and (max-width:500px){
    form{
        width: 80%;
    }
}

img{
    width: 120px; 
    height: 120px;
    display: block;
    margin: auto;
    margin-top: -18%;
}
</style>
<br><br><br>
					<form id="frmRegistro" method="POST" action="registrou.php" autocomplete="off">
                        <img src="img/logo.png">
						<h1>Registro</h1>
					<div class="grupo">
                <input type="text" name="nombre" id="nombre" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra" ></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellido" id="apellido" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Apellido</label>
            </div>
            <div class="grupo">
                <input type="text" name="usuario" id="usuario"><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password"><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email"><span class="barra"></span>
                <label for=""style="color: #4172FF; text-decoration: bold;">Correo Electrónico</label>
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
            var email = document.getElementById('email').value;
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
			}else if($('#email').val()==""){
				alertify.alert("Debes agregar el correo electrónico");
				return false;
			}if(/^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/.test(email)){
            }else{
                alertify.alert("Debes colocar un correo electrónico valido");
                return false;
            }

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val() +
					"&email=" + $('#email').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
							if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Registrado con éxito");
							}else{
								alertify.error("Registro fallido");
							}
						}
					});
		});
	});

</script>

