<!DOCTYPE html>
<html>
<head>
	<title>Servicio de Delivery | Iniciar Sesión</title>

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
    background-color: #fff;
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
    <form action="log.php" method="POST" id="form">
				<div class="form">
                <img src="img/logo.png">
				<h1>Iniciar Sesión</h1>
					<p></p>
					<div class="grupo">
                <input type="text" name="usuario" id="usuario" ><span class="barra"></span>
                <label for="" style="color: #4172FF; text-decoration: bold;">Usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra"></span>
                <label for="" style="color: #4172FF;">Contraseña</label>
            </div>
					<p></p>
					<button type="submit" class="boton" id="entrarSistema">Entrar</button>
					<a href="registro.php" class="boton">No tengo una cuenta</a>
				</div>
			</form>


</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la clave");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>