<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
if (!isset($_SESSION["cedula"])) {
  echo "<script>alert('Debe loguearse para entrar aqui.'); window.location= 'login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>INTRANET | Inicio</title> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/register_intranet.css">
    <link rel="stylesheet" href="css/estilo.css">

    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <style type="text/css">
      #respuesta1:hover {
  background-color: yellow;
  transition: background-color 0.5s ease-in-out;
}

#respuesta1 {
  background-color: white;
}
#respuesta2:hover {
  background-color: yellow;
  transition: background-color 0.5s ease-in-out;
}

#respuesta2 {
  background-color: white;
}
#respuesta3:hover {
  background-color: yellow;
  transition: background-color 0.5s ease-in-out;
}

#respuesta3 {
  background-color: white;
}
#respuesta4:hover {
  background-color: yellow;
  transition: background-color 0.5s ease-in-out;
}

#respuesta4 {
  background-color: white;
}
#timer {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
}

button {
 
}
    </style>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>

<script type="text/javascript">
  var audio = new Audio('sound/preguntaronda2.mp3');
      audio.play();
</script>
<body onload="ocultarInputs();">
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
        <?php require('./layout/background.php') ?>

        <!-- Sidebar End -->

        <!-- Content Start -->

        
    <section class="home">

        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM trabajadores WHERE cedula=$cedula";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombres = $mostrar['nombres'];

                            
                        ?>
            <?php } ?>
        <?php if ($cedula == 18237190) {
        ?>
        <div class="text animated wow fadeInRight">Bienvenido Presentador!</div>
        <?php }else{ 
        ?>
        <div class="text animated wow fadeInRight">Bienvenido <?php echo $nombres ?>!</div>
        <?php } ?>  
        <a href="javascript: history.go(-1)" class="button_back"><i class='bx bx-undo'></i>Regresar</a>
        <div class="animated wow fadeIn">
            <div class="top"> 
                <?php 
            $equipo=$_GET['equipo'];
            $ronda=$_GET['ronda'];
            $conexion = new mysqli("localhost", "root", "", "procuraduria");

// Consulta para obtener el número total de registros en la tabla
$consultaTotal = "SELECT COUNT(*) AS total FROM pregunta";
$resultadoTotal = $conexion->query($consultaTotal);
$datosTotal = $resultadoTotal->fetch_assoc();
$totalRegistros = $datosTotal["total"];

// Generar un número aleatorio entre 1 y el número total de registros
$indiceAleatorio = rand(1, $totalRegistros);

// Consulta para obtener un registro aleatorio de la tabla
$consultaAleatoria = "SELECT * FROM pregunta LIMIT " . ($indiceAleatorio - 1) . ", 1";
$resultadoAleatorio = $conexion->query($consultaAleatoria);
$datosAleatorios = $resultadoAleatorio->fetch_assoc();
$respuestacorrecta = $datosAleatorios["respuestacorrecta"];

?>

      
            </div>
            <div class="space">

            </div>


            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <div id="timer" onclick="startTimer(); mostrarInputs();">1:00</div>
            
          <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
                <h1><?php echo $datosAleatorios["pregunta"] ?></h1>
            </div>
        </header>
            <form action="jugar3.php" class="formulario" id="formulario" method="post" autocomplete="off" enctype="multipart/form-data">
      <!-- Grupo: Usuario -->

                <div class="container-inputs" id="grupo__porcentaje">
                    <label class="formulario__label" style="font-size: 30px; text-align: justify;" for="porcentaje"><?php echo $datosAleatorios["respuesta1"] ?></label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta1" id="respuesta1" class="respuesta1" value="A" onclick="verificar_valor()" style="color: black; font-size: 24px;">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca el porcentaje.</p>
                </div>
                <div class="container-inputs" id="grupo__porcentaje">
                    <label class="formulario__label" style="font-size: 30px; text-align: justify;" for="porcentaje"><?php echo $datosAleatorios["respuesta2"] ?></label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta2" id="respuesta2" class="respuesta2" value="B"  onclick="verificar_valor()" style="color: black; font-size: 24px;">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca el porcentaje.</p>
                </div>
                <div class="container-inputs" id="grupo__porcentaje">
                    <label class="formulario__label" style="font-size: 30px; text-align: justify;" for="porcentaje"><?php echo $datosAleatorios["respuesta3"] ?></label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta3" id="respuesta3" class="respuesta3" value="C"  onclick="verificar_valor()" style="color: black; font-size: 24px;">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca el porcentaje.</p>
                </div>
                <div class="container-inputs" id="grupo__porcentaje">
                    <label class="formulario__label" style="font-size: 30px; text-align: justify;" for="porcentaje"><?php echo $datosAleatorios["respuesta4"] ?></label>
                    <div class="form__inputs">
                        <input type="text" name="respuesta4" id="respuesta4" class="respuesta4" value="D"  onclick="verificar_valor()" style="color: black; font-size: 24px;">
                        <i class="icon-close-outline form__validacion-estado"></i>
                    </div>
                    <p class="form__validacion-error">Introduzca el porcentaje.</p>
                </div>
                <input type="hidden" name="equipo" id="equipo" value="<?php echo $equipo ?>">
                <input type="hidden" name="ronda" id="ronda" value="<?php echo $ronda ?>">
                <input type="hidden" name="idanterior" id="idanterior" value="<?php echo $datosAleatorios["id"] ?>">




      <div class="formulario__mensaje" id="formulario__mensaje">
        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
      </div>

      <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" name="siguiente" id="siguiente" type="button" value="Registrar" class="formulario__btn">Siguiente Pregunta</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
      </div>
      <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button name="anular" id="anular" type="button" value="Registrar" class="formulario__btn" onclick="anular_pregunta()">Anular Pregunta</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
      </div>
      <div class="formulario__grupo formulario__grupo-btn-enviar">
   
      </div>

    </form>
               
          </div>

        </div>

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>




<script type="text/javascript">
 function verificar_valor() {
  // Paso 3: Verificar si el valor del input coincide con el valor de SQL
  var valor_sql = "<?php echo $respuestacorrecta ?>";
  var equipo = "<?php echo $equipo ?>";
  var ronda = "<?php echo $ronda ?>";
  var input1 = document.getElementById("respuesta1");
  var input2 = document.getElementById("respuesta2");
  var input3 = document.getElementById("respuesta3");
  var input4 = document.getElementById("respuesta4");
  var success = new Audio('sound/success_sound.mp3');
  var error = new Audio('sound/error_sound.mp3');

  input1.addEventListener("click", function() {
    if (input1.value == valor_sql) {
      input1.style.background = "green";
      input2.style.background = "red";
      input3.style.background = "red";
      input4.style.background = "red";
      success.play();
      <?php $correcto = "Correcto"; ?>
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=1&incorrectas=0");
    } else {
      input1.style.background = "red";
      error.play();
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=0&incorrectas=1");
      // Encuentra el input correcto y lo pone en verde
      if (input2.value == valor_sql) {
        input2.style.background = "green";
        input3.style.background = "red";
        input4.style.background = "red";
      } else if (input3.value == valor_sql) {
        input2.style.background = "red";
        input3.style.background = "green";
        input4.style.background = "red";
      } else if (input4.value == valor_sql) {
        input2.style.background = "red";
        input3.style.background = "red";
        input4.style.background = "green";
      }
    }
  });

  input2.addEventListener("click", function() {
    if (input2.value == valor_sql) {
      input1.style.background = "red";
      input2.style.background = "green";
      input3.style.background = "red";
      input4.style.background = "red";
      success.play();
      <?php $correcto = "Correcto"; ?>
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=1&incorrectas=0");

    } else {
      error.play();
      input2.style.background = "red";
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=0&incorrectas=1");
      // Encuentra el input correcto y lo pone en verde
      if (input1.value == valor_sql) {
        input1.style.background = "green";
        input3.style.background = "red";
        input4.style.background = "red";
      } else if (input3.value == valor_sql) {
        input1.style.background = "red";
        input3.style.background = "green";
        input4.style.background = "red";
      } else if (input4.value == valor_sql) {
        input1.style.background = "red";
        input3.style.background = "red";
        input4.style.background = "green";
      }
    }
  });

  input3.addEventListener("click", function() {
    if (input3.value == valor_sql) {
      success.play();
      input1.style.background = "red";
      input2.style.background = "red";
      input3.style.background = "green";
      input4.style.background = "red";
      <?php $correcto = "Correcto"; ?>
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=1&incorrectas=0");
    } else {
      error.play();
      input3.style.background = "red";
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=0&incorrectas=1");
      // Encuentra el input correcto y lo pone en verde
      if (input1.value == valor_sql) {
        input1.style.background = "green";
        input2.style.background = "red";
        input4.style.background = "red";
      } else if (input2.value == valor_sql) {
        input1.style.background = "red";
        input2.style.background = "green";
        input4.style.background = "red";
      } else if (input4.value == valor_sql) {
        input1.style.background = "red";
        input3.style.background = "red";
        input4.style.background = "green";
      }
    }
  });

  input4.addEventListener("click", function() {
    if (input4.value == valor_sql) {
      success.play();
      input1.style.background = "red";
      input2.style.background = "red";
      input3.style.background = "red";
      input4.style.background = "green";
      <?php $correcto = "Correcto"; ?>
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=1&incorrectas=0");
    } else {
      error.play();
      input4.style.background = "red";
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_estadisticas.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Estadísticas guardadas correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=0&incorrectas=1");
      // Encuentra el input correcto y lo pone en verde
      if (input1.value == valor_sql) {
        input1.style.background = "green";
        input2.style.background = "red";
        input3.style.background = "red";
      } else if (input2.value == valor_sql) {
        input1.style.background = "red";
        input2.style.background = "green";
        input3.style.background = "red";
      } else if (input3.value == valor_sql) {
        input1.style.background = "red";
        input2.style.background = "red";
        input3.style.background = "green";
      }
    }
  });
}




function startTimer() {
  var timeleft = 60;
var downloadTimer = setInterval(function(){
  timeleft--;
  document.getElementById("timer").textContent = "0:" + timeleft.toString().padStart(2, "0");
  if(timeleft <= 0)
    clearInterval(downloadTimer);
},1000);
  var timer = document.getElementById("timer");
  timer.textContent = "1:00";
  timeleft = 60;
  clearInterval(downloadTimer);
  downloadTimer = setInterval(function(){
    timeleft--;
    timer.textContent = "0:" + timeleft.toString().padStart(2, "0");
    if(timeleft <= 0)
      clearInterval(downloadTimer);
  },1000);
}














function anular_pregunta() {
  // Paso 3: Verificar si el valor del input coincide con el valor de SQL
  var equipo = "<?php echo $equipo ?>";
  var ronda = "<?php echo $ronda ?>";
  var pregunta_id = "<?php echo $datosAleatorios["id"] ?>";
  var anular = document.getElementById("anular");
  anular.addEventListener("click", function() {
  
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "crear_anular_pregunta.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          console.log("Pregunta anulada guardada correctamente");
        }
      };
      xhr.send("equipo=" + equipo + "&ronda=" + ronda + "&correctas=0&incorrectas=1&" + "pregunta_id=" + pregunta_id);
    
});
}



function ocultarInputs() {
  var inputs = document.querySelectorAll("input");
  var label1 = document.getElementById("label1");
  var label2 = document.getElementById("label2");
  var label3 = document.getElementById("label3");
  var label4 = document.getElementById("label4");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].style.display = "none";
    label1.style.display = "none";
    label2.style.display = "none";
    label3.style.display = "none";
    label4.style.display = "none";
  }
}

function mostrarInputs() {
  var inputs = document.querySelectorAll("input");
  var label1 = document.getElementById("label1");
  var label2 = document.getElementById("label2");
  var label3 = document.getElementById("label3");
  var label4 = document.getElementById("label4");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].style.display = "block";
    label1.style.display = "block";
    label2.style.display = "block";
    label3.style.display = "block";
    label4.style.display = "block";
  }
}
</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>

</body>

</html>