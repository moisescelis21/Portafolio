<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>

	<?php require_once "scripts.php"; ?>
</head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
<style>
	body {
    background: url(img/bg.png);
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
    font-weight: 700;
}

form{
    margin-top: 10%;
    background-color: #FFF;
    padding: 60px 60px;
    box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
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
    background: linear-gradient(to right, #349EE8, #63BDFC);
    transition: 0.3s ease width;
    left: 0;
}


input:focus~.barra::before{
    width: 100%;
}

	.boton {
    font-family: 'roboto';
    background: #4568DC;
    background: -webkit-linear-gradient(to right, #349EE8, #63BDFC);
    background: linear-gradient(to right, #349EE8, #63BDFC);
    border: none;
    border-radius: 15px;
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
    background: -webkit-linear-gradient(to right, #3A5C7A, #346DA0);
    background: linear-gradient(to right, #3A5C7A, #346DA0);
}

@media screen and (max-width:500px){
    form{
        width: 80%;
    }
}
</style>
<br><br><br>
    <form action="log.php" method="POST" id="form" autocomplete="off">
				<div class="form">
				<h1>Iniciar Sesión</h1>
					<p></p>
					<div class="grupo">
                <input type="text" name="usuario" id="usuario" ><span class="barra"></span>
                <label for="">Usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
					<p></p>
					<button type="submit" class="boton" id="entrarSistema">Entrar</button>
					<a href="registro.php" class="boton">No tengo una cuenta</a>
                    <a href="preguntas3.php" class="boton">Olvide mi Contraseña</a>
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