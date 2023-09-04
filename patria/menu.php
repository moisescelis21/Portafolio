<!DOCTYPE html>
<html lang="es">
<head>

	<style>


	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Roboto', sans-serif;
		text-decoration: none;
		color: #fff;
	}
body{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #fff;
}
	.capa{
		position: fixed;
		width: 100%;
		height: 100vh;
		
		z-index: -1;
		top: 0;left: 0;
	}
	.header{
		width: 100%;
		height: 100px;
		position: fixed;
		top: 0;left: 0;

	}
	.container{
		width: 90%;
		max-width: 1200px;
		margin: auto;
	}
	.container .btn-menu, .logo{
		float: left;
		line-height:100px;
	}
	.container .btn-menu label{
		color: #010101;
		font-size: 25px;
		cursor: pointer;
	}
	.logo h1{
		color: #010101;
		font-weight: 400;
		font-size: 22px;
		margin-left: 10px;
	}
	.container .menu{
		float: right;
		line-height: 100px;
	}
	.container .menu a{
		display: inline-block;
		padding: 15px;
		line-height: normal;
		text-decoration: none;
		color: #010101;
		transition: all 0.3s ease;
		border-bottom: 2px solid transparent;
		font-size: 15px;
		margin-right: 5px;
	}
	.container .menu a:hover{
		border-bottom: 2px solid #FF5C5C;
		padding-bottom: 5px;
	}

	#btn-menu{
		display: none;
	}
	.container-menu{
		position: absolute;
		background: rgba(0,0,0,0.5);
		width: 100%;
		height: 100vh;
		top: 0;left: 0;
		transition: all 500ms ease;
		opacity: 0;
		visibility: hidden;
	}
	#btn-menu:checked ~ .container-menu{
		opacity: 1;
		visibility: visible;
	}
	.cont-menu{
		width: 100%;
		max-width: 210px;
		background: #FF5C5C;
		height: 100vh;
		position: relative;
		transition: all 500ms ease;
		transform: translateX(-100%);
		font-weight: bold;	
	}
	#btn-menu:checked ~ .container-menu .cont-menu{
		transform: translateX(0%);
	}
	.cont-menu nav{
		transform: translateY(15%);
	}
	.cont-menu nav a{
		display: block;
		text-decoration: none;
		padding: 20px;
		color: #010101;
		border-left: 5px solid transparent;
		transition: all 400ms ease;
	}
	.cont-menu nav a:hover{
		border-left: 5px solid #c7c7c7;
		background: rgba(255,255,255,0.2);
		color: #FFF;
	}
	.cont-menu label{
		position: absolute;
		right: 5px;
		top: 10px;
		color: #010101;
		cursor: pointer;
		font-size: 18px;
	}


	.logo2{
		width: 210px;
		height: 120px;
		margin-top: -25%;

	}
	
.slider{
  width: 800px;
  height: 500px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #FF5C5C;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #FF5C5C;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #FF5C5C;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #FF5C5C;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #FF5C5C;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #FF5C5C;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #FF5C5C;
}

	</style>
	<meta charset="UTF-8">
	<title>Menu</title>
	
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Menú</h1>
			</div>
			<nav class="menu">
				<a href="#">Inicio</a>
				<a href="#">Usuario</a>
				<a href="logout.php">Cerrar Sesión</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<img class="logo2" src="../patria/img/logo2.png">
			<a href="#">Control</a>
			<a href="rejefe.php">Agregar Jefe de Casa</a>
			<a href="relider.php">Agregar Líder de Calle</a>
			<a href="usuarios.php">Registro de Usuarios</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

  
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <div class="slide first">
          <img src="../patria/img/slider/1.png" alt="">
        </div>
        <div class="slide">
          <img src="../patria/img/slider/2.png" alt="">
        </div>
        <div class="slide">
          <img src="../patria/img/slider/3.png" alt="">
        </div>
        <div class="slide">
          <img src="../patria/img/slider/4.png" alt="">
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    </div>

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

  </body>
</html>
      