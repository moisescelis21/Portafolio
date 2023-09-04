<!DOCTYPE html>
<html>
<head>
	<?php require_once "scripts.php"; ?>

	
	<style type="text/css">
		:root {
			font-size: 100%;
			font-size: 16px;
			line-height: 1.5;
			--primary-blue: #233975;
		}
		body{
			padding: 0;
			margin: 0;
			font-family: 'Montserrat', 'sans-serif';
			font-weight: 500;
		}
		h1{
			font-size: 2.05	rem;
			font-weight: 700;

		}
		h2{
			font-size: 1.5rem;
			font-weight: 700;
		}
		a{
			text-decoration: none;
			color: var(--primary-blue);
		}
		a:hover{
			text-decoration: underline;
		}
		.small{
			font-size: 80%;
			text-align: center;
		}
		.split-screen{
			display: flex;
			flex-direction: column;
		}
		.left{
			height: 200px;

		}
		.left, .right{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.left{
			background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.5)), url('img/bg2.png');
			background-size: cover;
		}
		.left .copy{
			color: white;
			text-align: center;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;

		}
		.left p{
			font-weight: 400;

		}
		.right .copy{
			color: black;
			text-align: center;
		}
		.right .copy p{
			margin: 1.5em 0;
			font-size: 0.875rem;

		}
		.right form{
			width: 328px;
			margin-top: -100px;
		}
		form input[type="text"],
		form input[type="email"],
		form input[type="password"] {
			display: block;
			width: 100%;
			box-sizing: border-box;
			border-radius: 8px;
			border: 1px solid #c4c4c4;
			padding: 1em;
			margin-bottom: 1.25rem;
			font-size: 0.875rem;
		}
		label{
			display: block;
			margin-bottom: 0.5rem;
			font-size: 0.75rem;
		}
		.input-container .password{
			position: relative;
		}
		.input-container .password i{
			position: absolute;
			top: 40px;
			right: 16px;
		}



		.signup-btn{
			display: block;
			width: 100%;
			background: var(--primary-blue);
			color: white;
			font-weight: 700;
			border: none;
			padding: 1rem;
			border-radius: 8px;
			font-size: 0.75rem;
			text-transform: uppercase;
			letter-spacing: 0.5px;

		}
		.signup-btn:hover{
			background: #2c4893;
			cursor: pointer;
		}

	

		@media screen and (min-width: 900px) {
			.split-screen{
				flex-direction: row;
				height: 100vh;
			}
			.left,
			.right{
				display: flex;
				width: 50%;
				height: auto;
			}
		}
		
		img{
			width: 180px;
			height: 180px;
			margin-top: 35%;
		}

	</style>
	<title></title>
</head>
<body>
	<div class="split-screen">
		<div class="left">
			<section class="copy">
				<h1>"No hay amor más grande que el que uno siente aquí en el pecho por una causa, por una patria, por una gente, por un pueblo, por la causa humana".</h1>
				<p>Comandante Hugo Chávez</p>
			</section>
		</div>
		<div class="right">
			<form action="loguear.php" method="POST">
				<section class="copy">
					<img src="img/logo.png">
					<h2>Inicia Sesión</h2>
					<div class="login-container">
							
					</div>
				</section>
				<div class="input-container correo">
					<label for="email">Correo Electrónico</label>
					<input id="email" name="email" type="email" autocomplete="off">
				</div>
				<div class="input-container contraseña">
					<label for="password">Contraseña</label>
					<input id="password" name="password" placeholder="" type="password" autocomplete="off">
					<i class="far fa-eye-slash"></i>
				</div>
				
				<button class="signup-btn" id="entrarSistema" type="submit">Entrar</button>
				
			</form>
		</div>
	</div>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#email').val()==""){
				alertify.alert("Debes agregar el correo electrónico");
				return false;

			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la clave");
				return false;
			}
			

	
		});	
	});
</script>