const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos ={
	usuario: false,
	password: false,
	correo: false
}

const validarFormulario = (e) =>{
	switch(e.target.name){
		case "user":
			validarCampo(expresiones.usuario, e.target, 'user')	
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "email":
			validarCampo(expresiones.correo, e.target, 'email');
		break;
	}
}

const validarCampo = (expresion, input, campo) =>{
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('icon-checkmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('icon-cancel');	
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.remove('form__validacion-error-activo');
		campos[campo] = true;
	}else{
		document.getElementById(`grupo__${campo}`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__${campo} i`).classList.add('icon-cancel');
		document.querySelector(`#grupo__${campo} .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos[campo] = false;		
	}
}

const validarPassword2 = () =>{
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('container-inputs-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('container-inputs-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('icon-checkmark');
		document.querySelector(`#grupo__password2 i`).classList.add('icon-cancel');
		document.querySelector(`#grupo__password2 .form__validacion-error`).classList.add('form__validacion-error-activo');
		campos['password'] = false;
	}else{
		document.getElementById(`grupo__password2`).classList.remove('container-inputs-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('container-inputs-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('icon-checkmark');
		document.querySelector(`#grupo__password2 i`).classList.remove('icon-cancel');
		document.querySelector(`#grupo__password2 .form__validacion-error`).classList.remove('form__validacion-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
	
	if(!campos.usuario && !campos.password && !campos.correo){
		e.preventDefault();
		console.log("Se canceló el envío");
				
	}else{
		e.submit();
		console.log("seenvioelbta")
		document.querySelectorAll('.container-inputs-correcto').forEach((icono)=>{
			icono.classList.remove('container-inputs-correcto');
		})
	}

	
})

// ENVIAR FORMULARIO CON ESCUCHADOR DE EVENTOS