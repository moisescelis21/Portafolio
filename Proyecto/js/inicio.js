const mensaje = document.querySelector('.index-mensaje');

const usuario = document.querySelector('.usuario').value;
const password = document.querySelector('.password').value;

const form = document.getElementById('form');

mensaje.addEventListener('click', hiddenmsg);

function hiddenmsg() {
    mensaje.classList.add('hidden');
}

setTimeout(hiddenmsg, 5000);