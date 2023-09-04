const select = document.querySelector('#select');
const avatar = document.querySelector('.avatar');
const avatarSelect = document.querySelector('.avatar__selection');
const avatars = document.querySelectorAll('.avatar__options');
const inputRadio = document.getElementsByName("avatar");
const closeSelect = document.querySelector('#close')






const changeAvatar = (e) => {
    console.log(e.target.id)
    switch (e.target.id) {
        case "1":
            console.log('DX')
            avatar.src = "img/useravatar/1.png"
            break;
        case "2":
            console.log('DX')
            avatar.src = "img/useravatar/2.png"
            break;
        case "3":
            console.log('DX')
            avatar.src = "img/useravatar/3.png"
            break;
        case "4":
            avatar.src = "img/useravatar/4.png"
            break;
        case "5":
            avatar.src = "img/useravatar/5.png"
            break;
        case "6":
            avatar.src = "img/useravatar/6.png"
            break;
        case "7":
            avatar.src = "img/useravatar/7.png"
            break;
        case "8":
            avatar.src = "img/useravatar/8.png"
            break;
        case "9":
            avatar.src = "img/useravatar/9.png";
            break
        default:
            avatar.src = "img/useravatar/1.png"
            break;
    }
}


inputRadio.forEach(input => {
    input.addEventListener('click', changeAvatar)
});





const openAvatars = () => {
    avatarSelect.classList.toggle('active')
}

const closeAvatars = () => {
    avatarSelect.classList.remove('active')
}
select.addEventListener('click', openAvatars)
closeSelect.addEventListener('click', closeAvatars)

// avatarSelect.addEventListener('blur', openAvatars)