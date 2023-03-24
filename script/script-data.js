const arrowLeft = document.querySelector('#arrow-left');
const sidebarHidden = document.querySelector('#sidebar-hidden');
const hamburgerMenu = document.querySelector('#hamburger-menu');
const headerActive = document.querySelector('#header-active');
const boxData = document.querySelector('#box-data');
const boxTabelData = document.querySelector('#box-tabel-data');
const tabel = document.querySelector('#tabel');
const dashboardLayout = document.querySelector('#dashboard-layout');
const main = document.querySelector('main');

arrowLeft.addEventListener('click', () => {
    // arrowLeft.classList.toggle('arrow-left-active');
    sidebarHidden.classList.toggle('sidebar-hidden-active');
    hamburgerMenu.classList.toggle('hidden');
    dashboardLayout.classList.toggle('items-center');
    headerActive.classList.toggle('ml-[20vw]');
    main.classList.toggle('ml-[20vw]');
    boxData.classList.toggle('w-[73vw]');
    boxData.classList.toggle('w-[85vw]');
    boxTabelData.classList.toggle('w-[73vw]');
    boxTabelData.classList.toggle('w-[85vw]');
})

hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle('hidden');
    sidebarHidden.classList.toggle('sidebar-hidden-active');
    dashboardLayout.classList.toggle('items-center');
    headerActive.classList.toggle('ml-[20vw]');
    main.classList.toggle('ml-[20vw]');
    boxData.classList.toggle('w-[73vw]');
    boxData.classList.toggle('w-[85vw]');
    boxTabelData.classList.toggle('w-[73vw]');
    boxTabelData.classList.toggle('w-[85vw]');
})