const arrowLeft = document.querySelector('#arrow-left');
const sidebarHidden = document.querySelector('#sidebar-hidden');
const hamburgerMenu = document.querySelector('#hamburger-menu');
const headerActive = document.querySelector('#header-active');
const sidebarBlackScreen = document.querySelector('#sidebar-black-screen');
const modal = document.querySelector('.modal');
const showModal = document.querySelectorAll('.show-modal');
const closeModal = document.querySelectorAll('.close-modal')

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

showModal.forEach(show => {
    show.addEventListener('click', () => {
        modal.classList.toggle('hidden');
    })
})

closeModal.forEach(close => {
    close.addEventListener('click', () => {
        modal.classList.toggle('hidden');
    })
})