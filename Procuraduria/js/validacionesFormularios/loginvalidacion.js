
const formulario = document.getElementById('formulario');

const inputs = document.querySelectorAll('#formulario input');

const selects = document.querySelectorAll('#formulario select');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	numeros: /^\d{3,9}$/ // 7 a 14 numeros.
}

const campos = {
	usuario: false,
	password: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "cedula":
			validarCampo(expresiones.numeros, e.target, 'cedula');
			break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
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

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if (inputPassword1.value !== inputPassword2.value) {
		document.getElementById(`grupo__password2`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('icon-close-outline');
		document.querySelector(`#grupo__password2 i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__password2 .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos['password'] = false;
	} else if (inputPassword1.value == "" && inputPassword2.value == "") {
		document.getElementById(`grupo__password2`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('icon-close-outline');
		document.querySelector(`#grupo__password2 i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__password2 .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos['password'] = false;

	} else {
		document.getElementById(`grupo__password2`).classList.remove('container-inputs-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('container-inputs-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('icon-close-outline');
		document.querySelector(`#grupo__password2 i`).classList.add('icon-checkmark');
		document.querySelector(`#grupo__password2 .form__validacion-error`).classList.remove('form__validacion-error-activo');
		campos['password'] = true;
	}
}

const validarSelect = (input, campo) => {
	if (input.value == 'none') {
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos[campo] = false;
	} else {
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.remove('form__validacion-error-activo');
		campos[campo] = true;
		
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

selects.forEach((select) => {
	select.addEventListener('click', validarFormulario)
	select.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {

	if (campos.cedula && campos.password) {

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