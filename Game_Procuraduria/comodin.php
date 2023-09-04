<!DOCTYPE html>
<html>
  <head>
    <title>Temporizador</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      /* Estilos CSS para el cuerpo */
      body {
        margin: 0;
        padding: 0;
        background-color: #222;
      }

      /* Estilos CSS para el temporizador */
      #temporizador {
        font-size: 7vw;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
      }
    </style>
  </head>
  <script>
      var audio = new Audio('sound/comodin.mp3');
      audio.play();
    </script>
  <body>
    <div id="temporizador">30</div>
    <canvas id="grafico"></canvas>
    <script src="script.js"></script>
 
  </body>
</html>

