const nav = document.getElementById('navigation');
const hamburger = nav.getElementsByClassName('hamburger-icon')[0];
const ic = hamburger.getElementsByTagName('span');
const link = document.getElementsByClassName('menu-link')[0];

hamburger.addEventListener('click', event => {

    for (let i = 0; i < ic.length; i++) {
        
        if(i === 0){
            ic[i].classList.toggle('icon-1');
        
        } else if(i === 1){
            ic[i].classList.toggle('icon-2');
        
        } else {
            ic[i].classList.toggle('icon-3');
        }
    }

    link.classList.toggle('slide');

});