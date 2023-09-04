<!DOCTYPE html>
<html>
<head>
	<title>Contenedor 2</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
     <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'roboto', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}

}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }

  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: #FFC300;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}

img{
  width: 320px;
  height: 85px;
}




.contenedor1{

    background-color: rgba(25, 120, 204,1);
    padding: 150px 150px;
    box-shadow: 0 0 20px 0 rgba(25, 120, 204, 0.9);
    border-radius: 10px;
    width: 650px;
    height: 180px;
    margin: 15% auto;


    }


h2{
	color: #fff;
	margin: -12% 0;
}
input {
    background-color: #fff;
	border-radius: 0px 3px 3px 0px;
	-moz-border-radius: 0px 3px 3px 0px;
	-webkit-border-radius: 0px 3px 3px 0px;
	color: #fff;
	margin-bottom: 0.5em;
	width: 49%;
	padding: 15px 12px;
	border: none;
	font-family: roboto;
	font-size: 20px;
	line-height: 1.3em;
	padding: 2px;
	-webkit-appearance: none;
	text-indent: 7px;
}

::placeholder{
	color: #fff;
}

.boton{
	height: 40px;
	margin-top: 6px;
	background: #DEA93F;
	color: #FFFFFF;
    width: 150px;
    border: none;
    padding: 10px;
    font-size: 16px;
    font-family: Roboto;
    font-weight: bold;
    letter-spacing: 0.3px;
    cursor: pointer;
    transition: all .5s ease;
    border-radius: 5px;
    }

.boton:hover{
	background: rgba(223, 179, 89, 0.7);
}




      </style>

<body>
   <nav>
         <div class="logo">
         	<img src="img/logo2.png">
         </div>
         <i class="fas fa-bars"></i>
         </label>
            <ul>
            <li><a class="active" href="#">Inicio</a></li>
            <li><a href="contenedor1.php">Contenedor 1</a></li>
            <li><a href="contenedor2.php">Contenedor 2</a></li> 
            <li><a href="tabla.php">Tabla</a></li>
            <li><a href="#">Funcion 4</a></li>
            <li><a href="#">Funcion 5</a></li>
            <li><a href="index.php">Cerrar Sesión</a></li>

         </ul>
      </nav>
<div class="contenedor1">


	<div class="head">
<input type="text" name="">
<input type="text" name="">
<input type="text" name="">
<input type="text" name="">
</div>
</div>




</body>
</html>