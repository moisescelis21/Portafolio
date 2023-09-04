const formulario = document.getElementById('formulario');

const inputs = document.querySelectorAll('#formulario input');

const selects = document.querySelectorAll('#formulario select');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,200}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	numeros: /^\d{1,200}$/, // 1 a 14 numeros.
    date: /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/, // Fechas en formato YYYY/MM/DD.
    alfanum: /^(?=.*[a-zA-Z0-9!@#$%^&*()_+,\-./:;<=>?@[\\\]^_`{|}~])\S+$/, // Formato de Resoluciones.
}

const campos = {
	cedula: true,
	nombres: true,
	apellidos: true,
	cargo: true,
	nomina: true,
	centpago: true,
	adscrito: true,
	sueldo: true,
	resolucion: true,
	fechresolucion: true,
	antiguedad: true,
	profesion: true,
	hijos: true,
	nrocuenta: true,
	tipocuenta: true,
	compensacion: true,
	vacaciones: true,
	liquidacion: true,
	especiales: true,

}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "cedula":
			validarCampo(expresiones.numeros, e.target, 'cedula');
			break;
        case "nombres":
			validarCampo(expresiones.nombre, e.target, 'nombres');
			break;
        case "apellidos":
			validarCampo(expresiones.nombre, e.target, 'apellidos');
			break;
       case "cargo":
			validarCampo(expresiones.nombre, e.target, 'cargo');
			break;
        case "nomina":
			validarSelect(e.target, 'nomina');
			break;
        case "centpago":
            validarCampo(expresiones.nombre, e.target, 'centpago');
            break;
        case "adscrito":
            validarCampo(expresiones.nombre, e.target, 'adscrito');
            break;
        case "sueldo":
            validarCampo(expresiones.numeros, e.target, 'sueldo');
            break;
        case "resolucion":
            validarCampo(expresiones.alfanum, e.target, 'resolucion');
            break;
        case "fechresolucion":
            validarCampo(expresiones.date, e.target, 'fechresolucion');
            break;
        case "antiguedad":
            validarSelect(e.target, 'antiguedad');
            break;
        case "profesion":
            validarSelect(e.target, 'profesion');
            break;
        case "hijos":
            validarCampo(expresiones.numeros, e.target, 'hijos');
            break;
        case "nrocuenta":
            validarCampo(expresiones.numeros, e.target, 'nrocuenta');
            break;
        case "tipocuenta":
            validarSelect(e.target, 'tipocuenta');
            break;
        case "compensacion":
            validarCampo(expresiones.numeros, e.target, 'compensacion');
            break;
        case "vacaciones":
            validarCampo(expresiones.numeros, e.target, 'vacaciones');
            break;        
        case "liquidacion":
            validarCampo(expresiones.numeros, e.target, 'liquidacion');
            break;
        case "especiales":
            validarCampo(expresiones.numeros, e.target, 'especiales');
            break;
        

	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('icon-checkmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('icon-close-outline');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.remove('form__validacion-error-activo');
		campos[campo] = true;
	} else if (input.value == "") {
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('icon-close-outline');
		document.querySelector(`#grupo__${campo} i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos[campo] = false;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('icon-close-outline');
		document.querySelector(`#grupo__${campo} i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

selects.forEach((select) => {
	select.addEventListener('click', validarFormulario)
})

formulario.addEventListener('submit', (e) => {

	if (campos.cedula && campos.nombres && campos.apellidos && campos.cargo && campos.nomina && campos.centpago && campos.adscrito && campos.sueldo && campos.resolucion && campos.fechresolucion && campos.antiguedad && campos.profesion && campos.hijos && campos.nrocuenta && campos.tipocuenta && campos.compensacion && campos.vacaciones && campos.liquidacion && campos.especiales) {

		document.querySelectorAll('.container-inputs-correcto').forEach((icono) => {
			icono.classList.remove('container-inputs-correcto');
		});
	} else {
		e.preventDefault();

		const mensaje = document.getElementById('formulario__mensaje');
		mensaje.classList.add('formulario__mensaje-activo');
		mensaje.addEventListener('click', hiddenmsg);
		console.log(campos)

		function hiddenmsg() {
			mensaje.classList.remove('formulario__mensaje-activo');
		}

		setTimeout(hiddenmsg, 5000);
	}
});