<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styling Tailwind CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Dashboard - AFEESH</title>
</head>

<body class="bg-bgColor">
    <!-- Sidebar Section Start -->
    <section class="absolute top-0 left-0 flex items-center" id="sidebar">
        <div class="container">
            <div id="sidebar-hidden" class="hidden lg:flex flex-col bg-primary w-[40vw] md:w-[17vw] h-[100vh] fixed z-10 rounded-tr-[32px] rounded-br-[32px]">
                <div class="flex justify-end items-center mt-5 md:mt-0 mr-4">
                    <button id="arrow-left" name="arrow-left" type="button" class="text-white w-8 h-8 md:hidden">
                        <svg class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.26 15.53L9.73999 12L13.26 8.47" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <a href="index.php" class="flex justify-center items-center mb-12 mt-8">
                    <img src="img/fish.png" alt="Logo Ikan" class="w-[30px] h-[30px]">
                    <h3 class="ml-4 font-bold text-white text-[18px] md:text-[20px]">AFEESH</h3>
                </a>

                <!-- Menu -->
                <div class="flex flex-col justify-between items-center h-screen">
                    <!-- Menu Atas -->
                    <div>
                        <ul>
                            <li class="flex flex-col py-[25px]">
                                <a href="" class="flex flex-row items-center text-white">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] mr-4">
                                        <svg class="fill-current w-current h-current w-current h-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18C12.75 18.41 12.41 18.75 12 18.75Z" />
                                            <path d="M17.6 22.56H6.40002C4.58002 22.56 2.92002 21.16 2.62002 19.37L1.29002 11.4C1.07002 10.16 1.68002 8.57 2.67002 7.78L9.60002 2.23C10.94 1.15 13.05 1.16 14.4 2.24L21.33 7.78C22.31 8.57 22.91 10.16 22.71 11.4L21.38 19.36C21.08 21.13 19.38 22.56 17.6 22.56ZM11.99 2.93C11.46 2.93 10.93 3.09 10.54 3.4L3.61002 8.96C3.05002 9.41 2.65002 10.45 2.77002 11.16L4.10002 19.12C4.28002 20.17 5.33002 21.06 6.40002 21.06H17.6C18.67 21.06 19.72 20.17 19.9 19.11L21.23 11.15C21.34 10.45 20.94 9.39 20.39 8.95L13.46 3.41C13.06 3.09 12.52 2.93 11.99 2.93Z" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-white text-[14px]">Dashboard</h3>
                                </a>
                            </li>
                            <li class="flex flex-col py-[25px] group">
                                <a href="" class="flex flex-row items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.32 12C20.92 12 22 11 21.04 7.72C20.39 5.51 18.49 3.61 16.28 2.96C13 2 12 3.08 12 5.68V8.56C12 11 13 12 15 12H18.32Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20 14.7C19.5339 17.0141 18.186 19.0561 16.2414 20.3942C14.2967 21.7323 11.9078 22.2616 9.58001 21.87C5.79001 21.26 2.74 18.21 2.12 14.42C1.73276 12.0983 2.26019 9.71681 3.59155 7.77571C4.92291 5.83461 6.95461 4.48489 9.26001 4.00999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px]">
                                        Graphics</h3>
                                </a>
                            </li>
                            <li class="flex flex-col py-[25px] group">
                                <a href="data.php" class="flex flex-row items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 8.25V18C20 21 18.21 22 16 22H8C5.79 22 4 21 4 18V8.25C4 5 5.79 4.25 8 4.25C8 4.87 8.25 5.43 8.66 5.84C9.07 6.25 9.63 6.5 10.25 6.5H13.75C14.99 6.5 16 5.49 16 4.25C18.21 4.25 20 5 20 8.25Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 13H12M8 17H16M16 4.25C16 5.49 14.99 6.5 13.75 6.5H10.25C9.63 6.5 9.07 6.25 8.66 5.84C8.25 5.43 8 4.87 8 4.25C8 3.01 9.01 2 10.25 2H13.75C14.37 2 14.93 2.25 15.34 2.66C15.75 3.07 16 3.63 16 4.25Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px]">
                                        Data</h3>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Menu Bawah -->
                    <div>
                        <ul>
                            <li class="flex flex-col py-[25px] group">
                                <a href="settings.php" class="flex flex-row items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="fill-current w-current h-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                            <path d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2Z" />
                                            <path d="M15.58 13.4C14.9174 13.4 14.2698 13.2035 13.7189 12.8354C13.1679 12.4673 12.7386 11.9441 12.485 11.332C12.2315 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9265 6.76437C15.5763 6.63511 16.2499 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.42001 19.25C8.01001 19.25 7.67001 18.91 7.67001 18.5V16.55C7.67001 16.14 8.01001 15.8 8.42001 15.8C8.83001 15.8 9.17001 16.14 9.17001 16.55V18.5C9.17001 18.91 8.84001 19.25 8.42001 19.25ZM8.42001 10.15C8.01001 10.15 7.67001 9.81 7.67001 9.4V5.5C7.67001 5.09 8.01001 4.75 8.42001 4.75C8.83001 4.75 9.17001 5.09 9.17001 5.5V9.4C9.17001 9.81 8.84001 10.15 8.42001 10.15Z" />
                                            <path d="M8.42001 17.302C7.98008 17.302 7.54446 17.2153 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8275 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0764 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6886 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px]">
                                        Settings</h3>
                                </a>
                            </li>
                            <li class="flex flex-col py-[25px] group mb-14">
                                <a href="" class="flex flex-row items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.1 16.46C14.79 20.06 12.94 21.53 8.89 21.53H8.76C4.29 21.53 2.5 19.74 2.5 15.27V8.75C2.5 4.28 4.29 2.49 8.76 2.49H8.89C12.91 2.49 14.76 3.94 15.09 7.48M9 12.02L20.38 12.02M18.15 15.37L21.5 12.02L18.15 8.67" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px]">
                                        Logout</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar Black Screen -->
            <div id="sidebar-black-screen" class="hidden ml-[38vw] w-[62vw] bg-primary opacity-40 h-[100vh] fixed z-45"></div>
        </div>
    </section>
    <!-- Sidebar Section End -->

    <!-- Header Section Start -->
    <section class="absolute top-0 left-0 w-full flex item-center bg-white shadow-lg" id="header">
        <div class="container">
            <div class="flex item-center overflow-hidden justify-between z-10 h-[68px]">
                <!-- Hamburger Menu Start -->
                <div id="header-active" class="flex justify-center items-center text-xs md:ml-[17vw] pl-4 md:pl-0">
                    <button id="hamburger-menu" name="hamburger-menu" type="button" class="text-textColor mr-4 md:hidden">
                        <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7H21M3 12H21M3 17H21" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <!-- Hamburger Menu End -->

                <!-- Notif & Profil Start -->
                <div class="flex justify-center items-center md:mr-16">
                    <a href="" class="w-5 h-5 text-[#CCCCCC] mr-4">
                        <svg class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.02 2.91C8.71003 2.91 6.02003 5.6 6.02003 8.91V11.8C6.02003 12.41 5.76003 13.34 5.45003 13.86L4.30003 15.77C3.59003 16.95 4.08003 18.26 5.38003 18.7C9.69003 20.14 14.34 20.14 18.65 18.7C19.86 18.3 20.39 16.87 19.73 15.77L18.58 13.86C18.28 13.34 18.02 12.41 18.02 11.8V8.91C18.02 5.61 15.32 2.91 12.02 2.91Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                            <path d="M13.87 3.2C12.6607 2.85559 11.3793 2.85559 10.17 3.2C10.46 2.46 11.18 1.94 12.02 1.94C12.86 1.94 13.58 2.46 13.87 3.2V3.2Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.02 19.06C15.02 20.71 13.67 22.06 12.02 22.06C11.2 22.06 10.44 21.72 9.90002 21.18C9.33818 20.6173 9.02181 19.8552 9.02002 19.06" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>
                    </a>

                    <div class="mr-4 md:mr-3">
                        <img src="img/profil.jpg" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-full" alt="Profil">
                    </div>
                    <div class="hidden md:block">
                        <h3 class="font-semibold text-base">Admin Lele</h3>
                        <h4 class="font-light text-[#cccccc] text-[14px]">lele@gmail.com</h4>
                    </div>
                </div>
                <!-- Notif & Profil End -->
            </div>
        </div>
    </section>
    <!-- Header Section End -->

    <!-- Content Section Start -->
    <section id="dashboard">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center">
                    <!-- Judul Section -->
                    <div class="mt-[72px] pt-4 pb-2 ml-2 lg:ml-[19vw] mb-4 md:mb-7">
                        <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Dashboard</h1>
                    </div>

                    <!-- Layout Dashboard Start -->
                    <main class="lg:ml-[15vw] flex flex-col justify-center items-center">
                        <div id="dashboard-layout" class="flex flex-col lg:flex-row">
                            <div>
                                <!-- Kotak Kolam -->
                                <div id="box-kolam" class="w-[95vw] md:w-[328px] md:h-[480px] bg-white md:mr-0 md:ml-16 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Kolam 1</h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern0)" />
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_226_127" transform="scale(0.00195312)" />
                                                    </pattern>
                                                    <image id="image0_226_127" width="512" height="512" xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <h3 class="font-bold text-[16px] md:text-[24px] text-textColor">Lele</h3>
                                    </div>

                                    <div class="flex flex-col justify-center items-center">
                                        <!-- Statistik Ikan -->
                                        <div id="statistik-ikan" class="flex w-3/4 mt-4 md:mt-6 justify-between items-center">
                                            <div class="flex flex-col justify-center items-center">
                                                <h3 class="font-medium text-[14px] md:text-base">Jumlah</h3>
                                                <p class="font-semibold text-[14px] md:text-base">100 ekor</p>
                                            </div>
                                            <div class="flex flex-col justify-center items-center">
                                                <h3 class="font-medium text-[14px] md:text-base">Ukuran</h3>
                                                <p class="font-semibold text-[14px] md:text-base">8 cm</p>
                                            </div>
                                            <div class="flex flex-col justify-center items-center">
                                                <h3 class="font-medium text-[14px] md:text-base">Berat</h3>
                                                <p class="font-semibold text-[14px] md:text-base">10 gram</p>
                                            </div>
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="mt-4 md:mt-6 flex flex-col justify-center items-center">
                                            <table>
                                                <tr class="mb-2">
                                                    <td class="font-semibold text-[14px] md:text-base">Tanggal Tebar</td>
                                                    <td class="font-semibold text-[14px] px-2 md:text-base">:</td>
                                                    <td class="font-medium text-[14px] md:text-base">01-05-2023</td>
                                                </tr>
                                                <tr class="mb-2">
                                                    <td class="font-semibold text-[14px] md:text-base">Tanggal Menguras</td>
                                                    <td class="font-semibold text-[14px] px-2 md:text-base">:</td>
                                                    <td class="font-medium text-[14px] md:text-base">01-05-2023</td>
                                                </tr>
                                                <tr class="mb-2">
                                                    <td class="font-semibold text-[14px] md:text-base">Tanggal Pindah</td>
                                                    <td class="font-semibold text-[14px] px-2 md:text-base">:</td>
                                                    <td class="font-medium text-[14px] md:text-base">01-05-2023</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- Indikator -->
                                        <div class="mt-4 md:mt-32 flex flex-col justify-center items-center">
                                            <table>
                                                <tr class="mb-2">
                                                    <td class="font-semibold text-[14px] md:text-base">Status Ikan</td>
                                                    <td class="font-semibold text-[14px] px-2 md:text-base">:</td>
                                                    <td class="flex items-center font-medium text-[14px] md:text-base">
                                                        Cukup
                                                        <div class="w-[10px] h-[10px] rounded-full bg-[#F48F18] ml-2"></div>
                                                    </td>
                                                </tr>
                                                <tr class="mb-2">
                                                    <td class="font-semibold text-[14px] md:text-base">Update Time</td>
                                                    <td class="font-semibold text-[14px] px-2 md:text-base">:</td>
                                                    <td class="font-medium text-[13px] md:text-base">01-05-2023 23:59:00
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="md:flex md:flex-wrap md:gap-y-6">
                                <!-- Kotak Makanan -->
                                <div id="box-makanan" class="w-[95vw] md:w-[328px] mt-6 md:mt-0 bg-white md:mr-0 md:ml-6 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Stok Makanan
                                        </h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6">
                                            <img src="img/fish-eggs3.png" alt="Makanan">
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <h3 class="font-bold text-[16px] md:text-[24px] text-textColor">1000 gram</h3>
                                    </div>

                                    <div class="mt-2">
                                        <div class="w-full h-10 border border-slate-500"></div>
                                    </div>
                                </div>

                                <!-- Suhu -->
                                <div id="box-suhu" class="w-[95vw] md:w-[328px] mt-6 md:mt-0 bg-white md:mr-0 md:ml-6 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Suhu</h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6">
                                            <img src="img/thermometer1.png" alt="Suhu">
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <h3 class="font-bold text-[16px] md:text-[24px] text-textColor">34°C</h3>
                                    </div>

                                    <div class="mt-2">
                                        <div class="w-full h-10 border border-slate-500"></div>
                                    </div>
                                </div>

                                <!-- pH -->
                                <div id="box-ph" class="w-[95vw] md:w-[328px] mt-6 md:mt-0 bg-white md:mr-0 md:ml-6 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">pH</h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6">
                                            <img src="img/ph2.png" alt="pH">
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <h3 class="font-bold text-[16px] md:text-[24px] text-textColor">7 pH</h3>
                                    </div>

                                    <div class="mt-2">
                                        <div class="w-full h-10 border border-slate-500"></div>
                                    </div>
                                </div>

                                <!-- Catatan -->
                                <div id="box-catatan" class="w-[95vw] md:w-[328px] mt-6 md:mt-0 bg-white md:mr-0 md:ml-6 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Catatan</h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6 text-[#cccccc]">
                                            <svg viewBox="0 0 24 24" class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H14C14.41 1.25 14.75 1.59 14.75 2C14.75 2.41 14.41 2.75 14 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V10C21.25 9.59 21.59 9.25 22 9.25C22.41 9.25 22.75 9.59 22.75 10V15C22.75 20.43 20.43 22.75 15 22.75Z" />
                                                <path d="M22 10.748H18C14.58 10.748 13.25 9.418 13.25 5.998V1.998C13.25 1.698 13.43 1.418 13.71 1.308C13.99 1.188 14.31 1.258 14.53 1.468L22.53 9.468C22.6343 9.57307 22.7052 9.70662 22.7338 9.85185C22.7624 9.99709 22.7474 10.1475 22.6908 10.2843C22.6342 10.4211 22.5384 10.5381 22.4155 10.6206C22.2926 10.7031 22.148 10.7474 22 10.748ZM14.75 3.808V5.998C14.75 8.578 15.42 9.248 18 9.248H20.19L14.75 3.808Z" />
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="mt-2">
                                        <p class="font-bold text-[16px] md:text-[24px] text-center text-textColor">Ikan
                                            kurang
                                            tercukupi
                                            makanannya. Tambahin dong makannya !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- Layout Dashboard End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Content Section End -->

    <!-- Footer Section Start -->
    <footer id="footer">
        <div class="container">
            <div class="my-4 overflow-hidden">
                <p class="font-light text-center text-[10px] md:text-[14px]">© 2023 Copyright || Created by
                    Kelompok 9 IoT
                    || SV IPB</p>
            </div>
        </div>
    </footer>
    <!-- Footer Section Start -->

    <script src="script/script-dashboard.js"></script>
</body>

</html>