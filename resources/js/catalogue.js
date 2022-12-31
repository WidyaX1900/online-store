const hamburger = document.getElementById('hamburger');
const sideBar = document.getElementsByClassName('sidebar')[0];
const closeButton = document.getElementsByClassName('close-button')[0];

hamburger.addEventListener("click", event => {
    sideBar.classList.toggle('slide');        
});

closeButton.addEventListener("click", event => {
    sideBar.classList.toggle('slide');      
});