const buttonElement = document.querySelector('.menuToggle');

buttonElement.addEventListener('click', function (event) {
    let expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);
    event.preventDefault();
});

let burger = document.querySelector('.dashboard'),
    menu = document.querySelector('header'),
    container_content = document.querySelector('.container_content')
    nav = document.querySelector('.header_menu');
burger.addEventListener('click', function (){
    menu.classList.toggle('click');
    container_content.classList.toggle('click');
    nav.classList.toggle('click');
});

