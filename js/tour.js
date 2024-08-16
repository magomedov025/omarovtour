let tourOneDay = document.querySelector('.tour_odnodnev'),
    tourTwoPlusDay = document.querySelector('.tour_mnogodnev'),
    buttonOneDay = document.getElementById('buttonOneDay'),
    buttonTwoPlusDay = document.getElementById('buttonTwoPlusDay');

buttonOneDay.addEventListener('click', () => {
    buttonOneDay.classList.add('active')
    buttonTwoPlusDay.classList.remove('active')
    tourOneDay.classList.add('active')
    tourTwoPlusDay.classList.remove('active')
})

buttonTwoPlusDay.addEventListener('click', () => {
    buttonTwoPlusDay.classList.add('active')
    buttonOneDay.classList.remove('active')
    tourOneDay.classList.remove('active')
    tourTwoPlusDay.classList.add('active')
})

let header = document.querySelector('header');

window.addEventListener('scroll', (e) => {
    if(scrollY > 50){
        header.style.background = '#000000' 
    } else {
        header.style.background = 'none' 
    }
})