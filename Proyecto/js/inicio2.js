const btn = document.querySelector('#btn');
const btn2 = document.querySelector('#btn2');
const sidebar = document.querySelector('.sidebar')

btn.addEventListener('click', abrirMenu);
// btn2.addEventListener('click', abrirMenu);

function abrirMenu(){
    sidebar.classList.toggle('active');
}

window.addEventListener('resize', () =>{
    if(sidebar.classList.contains('active')) sidebar.classList.remove('active');
        })
