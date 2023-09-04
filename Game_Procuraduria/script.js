// Obtener el elemento del temporizador
var temporizador = document.getElementById("temporizador");


// Configurar el gráfico de dona
var grafico = new Chart(document.getElementById("grafico"), {
  type: "doughnut",
  data: {
    labels: [],
    datasets: [
      {
        data: [30, 0],
        backgroundColor: ["white", "#222"],
        borderWidth: 0,
      },
    ],
  },
  options: {
    cutoutPercentage: 80,
    animation: {
      animateScale: true,
      duration: 1000,
    },
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      display: false,
    },
    tooltips: {
      enabled: false,
    },
  },
});

// Definir la función para actualizar el temporizador
function actualizarTemporizador(segundos) {
  // Actualizar el valor del temporizador en la página
  temporizador.innerHTML = segundos;

  // Calcular el porcentaje de tiempo restante
  var porcentajeRestante = (segundos / 30) * 100;

  // Actualizar el valor del gráfico de dona
  grafico.data.datasets[0].data = [segundos, 30 - segundos];

  // Actualizar el color de fondo del gráfico de dona
  var colorFondo;
  if (segundos > 15) {
    colorFondo = "white";
  } else if (segundos > 5) {
    colorFondo = "#ffbf00";
  } else {
    colorFondo = "#ff4136";
  }
  grafico.data.datasets[0].backgroundColor = [colorFondo, "#222"];

  // Actualizar el gráfico de dona
  grafico.update();
}

// Definir la función de cuenta regresiva
function cuentaRegresiva(segundos) {
  // Definir la función de actualización del temporizador
  function actualiza() {
    segundos--;
    if (segundos < 0) {
      // Detener la cuenta regresiva cuando el temporizador llega a cero
      clearInterval(intervalo);
      temporizador.innerHTML = "0";
      return;
    }
    actualizarTemporizador(segundos);
  }

  // Iniciar la cuenta regresiva
  actualiza();
  var intervalo = setInterval(actualiza, 1000);
}

// Iniciar la cuenta regresiva
cuentaRegresiva(30);

