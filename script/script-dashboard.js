const arrowLeft = document.querySelector('#arrow-left');
const sidebarHidden = document.querySelector('#sidebar-hidden');
const hamburgerMenu = document.querySelector('#hamburger-menu');
const headerActive = document.querySelector('#header-active');
const boxKolam = document.querySelector('#box-kolam');
const statistikIkan = document.querySelector('#statistik-ikan');
const boxMakanan = document.querySelector('#box-makanan');
const boxSuhu = document.querySelector('#box-suhu');
const boxPh = document.querySelector('#box-ph');
const boxCatatan = document.querySelector('#box-catatan');
const dashboardLayout = document.querySelector('#dashboard-layout');
const main = document.querySelector('main');

arrowLeft.addEventListener('click', () => {
    // arrowLeft.classList.toggle('arrow-left-active');
    sidebarHidden.classList.toggle('sidebar-hidden-active');
    hamburgerMenu.classList.toggle('hidden');
    dashboardLayout.classList.toggle('items-center');
    headerActive.classList.toggle('ml-[20vw]');
    main.classList.toggle('ml-[20vw]');
    boxKolam.classList.toggle('w-[73vw]');
    boxKolam.classList.toggle('w-[85vw]');
    statistikIkan.classList.toggle('justify-between');
    statistikIkan.classList.toggle('justify-evenly');
    boxMakanan.classList.toggle('w-[73vw]');
    boxMakanan.classList.toggle('w-[85vw]');
    boxSuhu.classList.toggle('w-[73vw]');
    boxSuhu.classList.toggle('w-[85vw]');
    boxPh.classList.toggle('w-[73vw]');
    boxPh.classList.toggle('w-[85vw]');
    boxCatatan.classList.toggle('w-[73vw]');
    boxCatatan.classList.toggle('w-[85vw]');
})

hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle('hidden');
    sidebarHidden.classList.toggle('sidebar-hidden-active');
    dashboardLayout.classList.toggle('items-center');
    headerActive.classList.toggle('ml-[20vw]');
    main.classList.toggle('ml-[20vw]');
    boxKolam.classList.toggle('w-[73vw]');
    boxKolam.classList.toggle('w-[85vw]');
    statistikIkan.classList.toggle('justify-between');
    statistikIkan.classList.toggle('justify-evenly');
    boxMakanan.classList.toggle('w-[73vw]');
    boxMakanan.classList.toggle('w-[85vw]');
    boxSuhu.classList.toggle('w-[73vw]');
    boxSuhu.classList.toggle('w-[85vw]');
    boxPh.classList.toggle('w-[73vw]');
    boxPh.classList.toggle('w-[85vw]');
    boxCatatan.classList.toggle('w-[73vw]');
    boxCatatan.classList.toggle('w-[85vw]');
})