const arrowLeft = document.querySelector('#arrow-left');
const sidebarHidden = document.querySelector('#sidebar-hidden');
const hamburgerMenu = document.querySelector('#hamburger-menu');
const headerActive = document.querySelector('#header-active');
const sidebarBlackScreen = document.querySelector('#sidebar-black-screen');

arrowLeft.addEventListener('click', () => {
    arrowLeft.classList.toggle('arrow-left-active');
    sidebarHidden.classList.toggle('hidden');
    sidebarBlackScreen.classList.toggle('hidden');
})

hamburgerMenu.addEventListener('click', () => {
    sidebarHidden.classList.remove('hidden');
    sidebarHidden.classList.add('flex');
    sidebarBlackScreen.classList.toggle('hidden');
})

sidebarBlackScreen.addEventListener('click', () => {
    arrowLeft.classList.toggle('arrow-left-active');
    sidebarHidden.classList.toggle('hidden');
    sidebarBlackScreen.classList.toggle('hidden');
})