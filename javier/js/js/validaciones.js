//inicializamos las escuchas al cargar la pagina

//nuestras variables globales

var nombre_paciente;
function inicio_form_formulario()

{

	//inicializacion agregar
 	nombre_paciente=document.getElementById('nombre_paciente');
	apellido_paciente=document.getElementById('apellido_paciente');
	cedula_paciente=document.getElementById('cedula_paciente');
	direccion_paciente=document.getElementById('direccion_paciente');
 	nombre_paciente.addEventListener('input', validar_nombre_paciente, false);
 	apellido_paciente.addEventListener('input', validar_apellido_paciente, false);
 	cedula_paciente.addEventListener('input', validar_cedula_paciente, false);
 	direccion_paciente.addEventListener('input', validar_direccion_paciente, false);
 	document.FormAgregar.addEventListener("invalid", validar_form_paciente, true);
 	document.getElementById("enviar_form_paciente").addEventListener("click", enviar_formulario_paciente, false);
 	document.FormAgregar.addEventListener("input", validar_form_paciente_tiemporeal, false);

 	//inicializacion editar
 	nombre_paciente_editar=document.getElementById('nombre_paciente_editar');
	apellido_paciente_editar=document.getElementById('apellido_paciente_editar');
	cedula_paciente_editar=document.getElementById('cedula_paciente_editar');
	direccion_paciente_editar=document.getElementById('direccion_paciente_editar');
 	nombre_paciente_editar.addEventListener('input', validar_nombre_paciente_editar, false);
 	apellido_paciente_editar.addEventListener('input', validar_apellido_paciente_editar, false);
 	cedula_paciente_editar.addEventListener('input', validar_cedula_paciente_editar, false);
 	direccion_paciente_editar.addEventListener('input', validar_direccion_paciente_editar, false);
 	document.EditarPaciente.addEventListener("invalid", validar_form_paciente_editar, true);
 	document.getElementById("enviar_form_paciente_editar").addEventListener("click", enviar_formulario_paciente_editar, false);
 	document.EditarPaciente.addEventListener("input", validar_form_paciente_editar_tiemporeal, false);

 	//salida medicamento
 	medicamento_salida = document.getElementById("medicamento_salida");
 	cantidad_salida1 = document.getElementById("cantidad_salida1");
 	medicamento_salida.addEventListener('input', validar_salida_uno, false);
 	cantidad_salida1.addEventListener('input', validar_salida_uno, false);

 	medicamento_salida2 = document.getElementById("medicamento_salida2");
 	cantidad_salida2 = document.getElementById("cantidad_salida2");
	medicamento_salida2.addEventListener('input', validar_salida_dos, false);
 	cantidad_salida2.addEventListener('input', validar_salida_dos, false);

 	medicamento_salida3 = document.getElementById("medicamento_salida3");
 	cantidad_salida3 = document.getElementById("cantidad_salida3");
	medicamento_salida3.addEventListener('input', validar_salida_tres, false);
 	cantidad_salida3.addEventListener('input', validar_salida_tres, false);

 	medicamento_salida4 = document.getElementById("medicamento_salida4");
 	cantidad_salida4 = document.getElementById("cantidad_salida4");
	medicamento_salida4.addEventListener('input', validar_salida_cuatro, false);
 	cantidad_salida4.addEventListener('input', validar_salida_cuatro, false);

 	medicamento_salida5 = document.getElementById("medicamento_salida5");
 	cantidad_salida5 = document.getElementById("cantidad_salida5");
	medicamento_salida5.addEventListener('input', validar_salida_cinco, false);
 	cantidad_salida5.addEventListener('input', validar_salida_cinco, false);
}

function validar_form_paciente(e)
{
	var elemento = e.target;
	elemento.classList.add("uk-form-danger") ;

}

function enviar_formulario_paciente()
{
	nombre_paciente=document.getElementById('nombre_paciente');
	apellido_paciente=document.getElementById('apellido_paciente');
	cedula_paciente=document.getElementById('cedula_paciente');
	direccion_paciente=document.getElementById('direccion_paciente');
	var correcto = document.FormAgregar.checkValidity();
	if(correcto == true)
	{
		document.FormAgregar.submit();
	}
	//desde aqui se comprobara todos los campos vacios
	else if(nombre_paciente.validity.valueMissing==true || nombre_paciente.validity.patternMismatch==true){
		alert("Por favor rellene el campo nombre");
	}else 
	if(apellido_paciente.validity.valueMissing==true || apellido_paciente.validity.patternMismatch==true){
		alert("Por favor rellene el campo apellido");
	}else if(cedula_paciente.validity.valueMissing==true || cedula_paciente.validity.patternMismatch==true){
		alert("Por favor rellene el campo cédula ");	
	}else if(direccion_paciente.validity.valueMissing==true|| direccion_paciente.validity.patternMismatch==true){
		alert("Por favor rellene el campo dirección");
	}
}

function validar_form_paciente_tiemporeal(e)
{
	var elemento = e.target;
	
	if(elemento.validity.valid == true)
	{
		elemento.classList.remove("uk-form-danger");
		elemento.classList.add("uk-form-success");
		
		
	}else{
		elemento.classList.remove("uk-form-success");
		elemento.classList.add("uk-form-danger");

	}

}

function validar_nombre_paciente()
{
	if(nombre_paciente.value.length < 3){
		nombre_paciente.setCustomValidity("Este campo debe tener más de 3 carateres");
	}else{
		nombre_paciente.setCustomValidity("");
	}

	if(/^[A-Za-zÁ-Ź-á-ź ]{3,60}$/.test(nombre_paciente.value)) {
		nombre_paciente.classList.remove("uk-form-danger");
		nombre_paciente.classList.add("uk-form-success");
		nombre_paciente.setCustomValidity("");
	}else{
		nombre_paciente.classList.remove("uk-form-success");
		nombre_paciente.classList.add("uk-form-danger");
		nombre_paciente.setCustomValidity("No se aceptan carateres simbolico &%$, solo letras.");
	}
}

function validar_apellido_paciente()
{
	if(apellido_paciente.value.length < 3){
		apellido_paciente.setCustomValidity("Este campo debe tener más de 3 carateres");
	}else{
		apellido_paciente.setCustomValidity("");
	}

	if(/^[A-Za-zÁ-Ź-á-ź ]{3,60}$/.test(apellido_paciente.value)) {
		apellido_paciente.classList.remove("uk-form-danger");
		apellido_paciente.classList.add("uk-form-success");
		apellido_paciente.setCustomValidity("");
	}else{
		apellido_paciente.classList.remove("uk-form-success");
		apellido_paciente.classList.add("uk-form-danger");
		apellido_paciente.setCustomValidity("No se aceptan carateres simbolico &%$, solo letras.");
	}
}

function validar_cedula_paciente()
{
	if(cedula_paciente.value.length <6 || cedula_paciente.value.length > 8){
		cedula_paciente.setCustomValidity("Este campo debe tener más de 6 números y menos de 9 números. siguiendo el siguiente formato: 12345678");
		cedula_paciente.classList.remove("uk-form-success");
		cedula_paciente.classList.add("uk-form-danger");
	}else{
		cedula_paciente.setCustomValidity("");
		cedula_paciente.classList.remove("uk-form-danger");
		cedula_paciente.classList.add("uk-form-success");
		
	}
}

function validar_direccion_paciente()
{
	if(direccion_paciente.value.length <6){
		direccion_paciente.setCustomValidity("Este campo debe tener más de 6 carateres");
		direccion_paciente.classList.remove("uk-form-success");
		direccion_paciente.classList.add("uk-form-danger");
	}else{
		direccion_paciente.setCustomValidity("");
		direccion_paciente.classList.remove("uk-form-danger");
		direccion_paciente.classList.add("uk-form-success");
	}
}



//validarmos el formulario de editar


function validar_form_paciente_editar(e)
{
	var elemento = e.target;
	elemento.classList.add("uk-form-danger") ;

}

function enviar_formulario_paciente_editar()
{
	nombre_paciente_editar=document.getElementById('nombre_paciente_editar');
	apellido_paciente_editar=document.getElementById('apellido_paciente_editar');
	cedula_paciente_editar=document.getElementById('cedula_paciente_editar');
	direccion_paciente_editar=document.getElementById('direccion_paciente_editar');
	var correcto = document.EditarPaciente.checkValidity();
	if(correcto == true)
	{
		document.EditarPaciente.submit();
	}
	//desde aqui se comprobara todos los campos vacios
	else if(nombre_paciente_editar.validity.valueMissing==true || nombre_paciente_editar.validity.patternMismatch==true){
		alert("Por favor rellene el campo nombre");
	}else 
	if(apellido_paciente_editar.validity.valueMissing==true || apellido_paciente_editar.validity.patternMismatch==true){
		alert("Por favor rellene el campo apellido");
	}else if(cedula_paciente_editar.validity.valueMissing==true || cedula_paciente_editar.validity.patternMismatch==true){
		alert("Por favor rellene el campo cédula ");	
	}else if(direccion_paciente_editar.validity.valueMissing==true|| direccion_paciente_editar.validity.patternMismatch==true){
		alert("Por favor rellene el campo dirección");
	}
}

function validar_form_paciente_editar_tiemporeal(e)
{
	var elemento = e.target;
	
	if(elemento.validity.valid == true)
	{
		elemento.classList.remove("uk-form-danger");
		elemento.classList.add("uk-form-success");
		
		
	}else{
		elemento.classList.remove("uk-form-success");
		elemento.classList.add("uk-form-danger");

	}

}

function validar_nombre_paciente_editar()
{
	if(nombre_paciente_editar.value.length < 3){
		nombre_paciente_editar.setCustomValidity("Este campo debe tener más de 3 carateres");
	}else{
		nombre_paciente_editar.setCustomValidity("");
	}

	if(/^[A-Za-zÁ-Ź-á-ź ]{3,60}$/.test(nombre_paciente_editar.value)) {
		nombre_paciente_editar.classList.remove("uk-form-danger");
		nombre_paciente_editar.classList.add("uk-form-success");
		nombre_paciente_editar.setCustomValidity("");
	}else{
		nombre_paciente_editar.classList.remove("uk-form-success");
		nombre_paciente_editar.classList.add("uk-form-danger");
		nombre_paciente_editar.setCustomValidity("No se aceptan carateres simbolico &%$, solo letras.");
	}
}

function validar_apellido_paciente_editar()
{
	if(apellido_paciente_editar.value.length < 3){
		apellido_paciente_editar.setCustomValidity("Este campo debe tener más de 3 carateres");
	}else{
		apellido_paciente_editar.setCustomValidity("");
	}

	if(/^[A-Za-zÁ-Ź-á-ź ]{3,60}$/.test(apellido_paciente.value)) {
		apellido_paciente_editar.classList.remove("uk-form-danger");
		apellido_paciente_editar.classList.add("uk-form-success");
		apellido_paciente_editar.setCustomValidity("");
	}else{
		apellido_paciente_editar.classList.remove("uk-form-success");
		apellido_paciente_editar.classList.add("uk-form-danger");
		apellido_paciente_editar.setCustomValidity("No se aceptan carateres simbolico &%$, solo letras.");
	}
}

function validar_cedula_paciente_editar()
{
	if(cedula_paciente_editar.value.length <6 || cedula_paciente.value.length > 8){
		cedula_paciente_editar.setCustomValidity("Este campo debe tener más de 6 números y menos de 9 números. siguiendo el siguiente formato: 12345678");
		cedula_paciente_editar.classList.remove("uk-form-success");
		cedula_paciente_editar.classList.add("uk-form-danger");
	}else{
		cedula_paciente_editar.setCustomValidity("");
		cedula_paciente_editar.classList.remove("uk-form-danger");
		cedula_paciente_editar.classList.add("uk-form-success");
		
	}
}

function validar_direccion_paciente_editar()
{
	if(direccion_paciente_editar.value.length <6){
		direccion_paciente_editar.setCustomValidity("Este campo debe tener más de 6 carateres");
		direccion_paciente_editar.classList.remove("uk-form-success");
		direccion_paciente_editar.classList.add("uk-form-danger");
	}else{
		direccion_paciente_editar.setCustomValidity("");
		direccion_paciente_editar.classList.remove("uk-form-danger");
		direccion_paciente_editar.classList.add("uk-form-success");
	}
}


//salida medicamento
function validar_salida_uno()
{
	if(medicamento_salida.value.length == 0)
	{
		medicamento_salida.setCustomValidity("Este campo no puede contener 0");
		medicamento_salida.classList.remove("uk-form-success");
		medicamento_salida.classList.add("uk-form-danger");
	}else{
		medicamento_salida.setCustomValidity("");
		medicamento_salida.classList.remove("uk-form-danger");
		medicamento_salida.classList.add("uk-form-success");
	}

	if(cantidad_salida1.value == 0)
	{
		cantidad_salida1.setCustomValidity("Este campo no puede contener 0");
		cantidad_salida1.classList.remove("uk-form-success");
		cantidad_salida1.classList.add("uk-form-danger");
	}else{
		cantidad_salida1.setCustomValidity("");
		cantidad_salida1.classList.remove("uk-form-danger");
		cantidad_salida1.classList.add("uk-form-success");
	}
}

function validar_salida_dos()
{
	if(cantidad_salida2.value.length >=1)
	{
		if(medicamento_salida2.value == 0)
		{
			medicamento_salida2.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida2.classList.remove("uk-form-success");
			medicamento_salida2.classList.add("uk-form-danger");
		}else{
			medicamento_salida2.setCustomValidity("");
			medicamento_salida2.classList.remove("uk-form-danger");
			medicamento_salida2.classList.add("uk-form-success");
		}

		if(cantidad_salida2.value == 0)
		{
			cantidad_salida2.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida2.classList.remove("uk-form-success");
			cantidad_salida2.classList.add("uk-form-danger");
		}else{
			cantidad_salida2.setCustomValidity("");
			cantidad_salida2.classList.remove("uk-form-danger");
			cantidad_salida2.classList.add("uk-form-success");
		}
	}else if(medicamento_salida2.value.length >= 1)
	{
		if(medicamento_salida2.value == 0)
		{
			medicamento_salida2.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida2.classList.remove("uk-form-success");
			medicamento_salida2.classList.add("uk-form-danger");
		}else{
			medicamento_salida2.setCustomValidity("");
			medicamento_salida2.classList.remove("uk-form-danger");
			medicamento_salida2.classList.add("uk-form-success");
		}

		if(cantidad_salida2.value == 0)
		{
			cantidad_salida2.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida2.classList.remove("uk-form-success");
			cantidad_salida2.classList.add("uk-form-danger");
		}else{
			cantidad_salida2.setCustomValidity("");
			cantidad_salida2.classList.remove("uk-form-danger");
			cantidad_salida2.classList.add("uk-form-success");
		}
	}else{
		medicamento_salida2.setCustomValidity("");
		cantidad_salida2.setCustomValidity("");
		medicamento_salida2.classList.remove("uk-form-success");
		medicamento_salida2.classList.remove("uk-form-danger");
		cantidad_salida2.classList.remove("uk-form-success");
		cantidad_salida2.classList.remove("uk-form-danger");
	}
}


function validar_salida_tres()
{
	if(cantidad_salida3.value.length >=1)
	{
		if(medicamento_salida3.value == 0)
		{
			medicamento_salida3.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida3.classList.remove("uk-form-success");
			medicamento_salida3.classList.add("uk-form-danger");
		}else{
			medicamento_salida3.setCustomValidity("");
			medicamento_salida3.classList.remove("uk-form-danger");
			medicamento_salida3.classList.add("uk-form-success");
		}

		if(cantidad_salida3.value == 0)
		{
			cantidad_salida3.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida3.classList.remove("uk-form-success");
			cantidad_salida3.classList.add("uk-form-danger");
		}else{
			cantidad_salida3.setCustomValidity("");
			cantidad_salida3.classList.remove("uk-form-danger");
			cantidad_salida3.classList.add("uk-form-success");
		}
	}else if(medicamento_salida3.value.length >= 1)
	{
		if(medicamento_salida3.value == 0)
		{
			medicamento_salida3.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida3.classList.remove("uk-form-success");
			medicamento_salida3.classList.add("uk-form-danger");
		}else{
			medicamento_salida3.setCustomValidity("");
			medicamento_salida3.classList.remove("uk-form-danger");
			medicamento_salida3.classList.add("uk-form-success");
		}

		if(cantidad_salida3.value == 0)
		{
			cantidad_salida3.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida3.classList.remove("uk-form-success");
			cantidad_salida3.classList.add("uk-form-danger");
		}else{
			cantidad_salida3.setCustomValidity("");
			cantidad_salida3.classList.remove("uk-form-danger");
			cantidad_salida3.classList.add("uk-form-success");
		}
	}else{
		cantidad_salida3.setCustomValidity("");
		medicamento_salida3.setCustomValidity("");
		medicamento_salida3.classList.remove("uk-form-success");
		medicamento_salida3.classList.remove("uk-form-danger");
		cantidad_salida3.classList.remove("uk-form-success");
		cantidad_salida3.classList.remove("uk-form-danger");
	}
}


function validar_salida_cuatro()
{
	if(cantidad_salida4.value.length >=1)
	{
		if(medicamento_salida4.value == 0)
		{
			medicamento_salida4.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida4.classList.remove("uk-form-success");
			medicamento_salida4.classList.add("uk-form-danger");
		}else{
			medicamento_salida4.setCustomValidity("");
			medicamento_salida4.classList.remove("uk-form-danger");
			medicamento_salida4.classList.add("uk-form-success");
		}

		if(cantidad_salida4.value == 0)
		{
			cantidad_salida4.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida4.classList.remove("uk-form-success");
			cantidad_salida4.classList.add("uk-form-danger");
		}else{
			cantidad_salida4.setCustomValidity("");
			cantidad_salida4.classList.remove("uk-form-danger");
			cantidad_salida4.classList.add("uk-form-success");
		}
	}else if(medicamento_salida4.value.length >= 1)
	{
		if(medicamento_salida4.value == 0)
		{
			medicamento_salida4.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida4.classList.remove("uk-form-success");
			medicamento_salida4.classList.add("uk-form-danger");
		}else{
			medicamento_salida4.setCustomValidity("");
			medicamento_salida4.classList.remove("uk-form-danger");
			medicamento_salida4.classList.add("uk-form-success");
		}

		if(cantidad_salida4.value == 0)
		{
			cantidad_salida4.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida4.classList.remove("uk-form-success");
			cantidad_salida4.classList.add("uk-form-danger");
		}else{
			cantidad_salida4.setCustomValidity("");
			cantidad_salida4.classList.remove("uk-form-danger");
			cantidad_salida4.classList.add("uk-form-success");
		}
	}else{
		medicamento_salida4.setCustomValidity("");
		cantidad_salida4.setCustomValidity("");
		medicamento_salida4.classList.remove("uk-form-success");
		medicamento_salida4.classList.remove("uk-form-danger");
		cantidad_salida4.classList.remove("uk-form-success");
		cantidad_salida4.classList.remove("uk-form-danger");
	}
}

function validar_salida_cinco()
{
	if(cantidad_salida5.value.length >=1)
	{
		if(medicamento_salida5.value == 0)
		{
			medicamento_salida5.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida5.classList.remove("uk-form-success");
			medicamento_salida5.classList.add("uk-form-danger");
		}else{
			medicamento_salida5.setCustomValidity("");
			medicamento_salida5.classList.remove("uk-form-danger");
			medicamento_salida5.classList.add("uk-form-success");
		}

		if(cantidad_salida5.value == 0)
		{
			cantidad_salida5.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida5.classList.remove("uk-form-success");
			cantidad_salida5.classList.add("uk-form-danger");
		}else{
			cantidad_salida5.setCustomValidity("");
			cantidad_salida5.classList.remove("uk-form-danger");
			cantidad_salida5.classList.add("uk-form-success");
		}
	}else if(medicamento_salida5.value.length >= 1)
	{
		if(medicamento_salida5.value == 0)
		{
			medicamento_salida5.setCustomValidity("Este campo no puede contener 0");
			medicamento_salida5.classList.remove("uk-form-success");
			medicamento_salida5.classList.add("uk-form-danger");
		}else{
			medicamento_salida5.setCustomValidity("");
			medicamento_salida5.classList.remove("uk-form-danger");
			medicamento_salida5.classList.add("uk-form-success");
		}

		if(cantidad_salida5.value == 0)
		{
			cantidad_salida5.setCustomValidity("Este campo no puede contener 0");
			cantidad_salida5.classList.remove("uk-form-success");
			cantidad_salida5.classList.add("uk-form-danger");
		}else{
			cantidad_salida5.setCustomValidity("");
			cantidad_salida5.classList.remove("uk-form-danger");
			cantidad_salida5.classList.add("uk-form-success");
		}
	}else{
		medicamento_salida5.setCustomValidity("");
		cantidad_salida5.setCustomValidity("");
		medicamento_salida5.classList.remove("uk-form-success");
		medicamento_salida5.classList.remove("uk-form-danger");
		cantidad_salida5.classList.remove("uk-form-success");
		cantidad_salida5.classList.remove("uk-form-danger");
	}
}
window.addEventListener("load",inicio_form_formulario, false);