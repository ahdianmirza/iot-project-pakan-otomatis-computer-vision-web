<?php
session_start();
require 'function/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$waktuPakan = queryWaktuMakan("SELECT * FROM waktumakan ORDER BY created ASC, modified ASC");
$dataKolam = queryDataKolam("SELECT * FROM datakolam");
json_encode($waktuPakan);

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // cek data berhasil ditambah atau tidak
    if (tambahWaktuMakan($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = './settings.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = './settings.php';
            </script>
        ";
    }
}
?>

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
    <link rel="icon" href="img/aFEESH_favicon.ico" type="image/x-icon">
    <title>Data - AFEESH</title>
</head>

<body class="bg-bgColor">
    <!-- Sidebar Section Start -->
    <section class="absolute top-0 left-0 flex items-center" id="sidebar">
        <div class="container">
            <div id="sidebar-hidden" class="hidden lg:flex flex-col bg-primary w-[40vw] md:w-[25vw] lg:w-[20vw] xl:w-[17vw] 2xl:w-[15vw] h-[100vh] fixed z-10 rounded-tr-[32px] rounded-br-[32px]">
                <div class="flex justify-end items-center mt-5 lg:mt-0 mr-4">
                    <button id="arrow-left" name="arrow-left" type="button" class="text-white w-8 h-8 lg:hidden">
                        <svg class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.26 15.53L9.73999 12L13.26 8.47" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <a href="index.php" class="flex justify-center items-center mb-12 mt-8">
                    <img src="img/aFEESH-putih.png" alt="Logo Ikan" class="w-[45px] 2xl:w-[60px]">
                    <h3 class="ml-2 font-bold text-white text-[18px] md:text-[20px] 2xl:text-2xl">aFEESH</h3>
                </a>

                <!-- Menu -->
                <div class="flex flex-col justify-between items-center h-screen">
                    <!-- Menu Atas -->
                    <div>
                        <ul>
                            <li class="flex flex-col py-[25px] group">
                                <a href="index.php" class="flex items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] mr-4 text-lightGray group-hover:text-white">
                                        <svg class="fill-current w-current h-current w-current h-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V15C11.25 14.59 11.59 14.25 12 14.25C12.41 14.25 12.75 14.59 12.75 15V18C12.75 18.41 12.41 18.75 12 18.75Z" />
                                            <path d="M17.6 22.56H6.40002C4.58002 22.56 2.92002 21.16 2.62002 19.37L1.29002 11.4C1.07002 10.16 1.68002 8.57 2.67002 7.78L9.60002 2.23C10.94 1.15 13.05 1.16 14.4 2.24L21.33 7.78C22.31 8.57 22.91 10.16 22.71 11.4L21.38 19.36C21.08 21.13 19.38 22.56 17.6 22.56ZM11.99 2.93C11.46 2.93 10.93 3.09 10.54 3.4L3.61002 8.96C3.05002 9.41 2.65002 10.45 2.77002 11.16L4.10002 19.12C4.28002 20.17 5.33002 21.06 6.40002 21.06H17.6C18.67 21.06 19.72 20.17 19.9 19.11L21.23 11.15C21.34 10.45 20.94 9.39 20.39 8.95L13.46 3.41C13.06 3.09 12.52 2.93 11.99 2.93Z" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Dashboard</h3>
                                </a>
                            </li>
                            <!-- <li class="flex flex-col py-[25px] group">
                                <a href="" class="flex items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.32 12C20.92 12 22 11 21.04 7.72C20.39 5.51 18.49 3.61 16.28 2.96C13 2 12 3.08 12 5.68V8.56C12 11 13 12 15 12H18.32Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20 14.7C19.5339 17.0141 18.186 19.0561 16.2414 20.3942C14.2967 21.7323 11.9078 22.2616 9.58001 21.87C5.79001 21.26 2.74 18.21 2.12 14.42C1.73276 12.0983 2.26019 9.71681 3.59155 7.77571C4.92291 5.83461 6.95461 4.48489 9.26001 4.00999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Graphics</h3>
                                </a>
                            </li> -->
                            <li class="flex flex-col py-[25px]">
                                <a href="data.php" class="flex items-center text-white">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] mr-4">
                                        <svg class="stroke-current w-current h-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 8.25V18C20 21 18.21 22 16 22H8C5.79 22 4 21 4 18V8.25C4 5 5.79 4.25 8 4.25C8 4.87 8.25 5.43 8.66 5.84C9.07 6.25 9.63 6.5 10.25 6.5H13.75C14.99 6.5 16 5.49 16 4.25C18.21 4.25 20 5 20 8.25Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 13H12M8 17H16M16 4.25C16 5.49 14.99 6.5 13.75 6.5H10.25C9.63 6.5 9.07 6.25 8.66 5.84C8.25 5.43 8 4.87 8 4.25C8 3.01 9.01 2 10.25 2H13.75C14.37 2 14.93 2.25 15.34 2.66C15.75 3.07 16 3.63 16 4.25Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-[14px] 2xl:text-base">
                                        Data</h3>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Menu Bawah -->
                    <div>
                        <ul>
                            <li class="flex flex-col py-[25px] group">
                                <a href="settings.php" class="flex items-center">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="fill-current w-current h-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                            <path d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2Z" />
                                            <path d="M15.58 13.4C14.9174 13.4 14.2698 13.2035 13.7189 12.8354C13.1679 12.4673 12.7386 11.9441 12.485 11.332C12.2315 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9265 6.76437C15.5763 6.63511 16.2499 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.42001 19.25C8.01001 19.25 7.67001 18.91 7.67001 18.5V16.55C7.67001 16.14 8.01001 15.8 8.42001 15.8C8.83001 15.8 9.17001 16.14 9.17001 16.55V18.5C9.17001 18.91 8.84001 19.25 8.42001 19.25ZM8.42001 10.15C8.01001 10.15 7.67001 9.81 7.67001 9.4V5.5C7.67001 5.09 8.01001 4.75 8.42001 4.75C8.83001 4.75 9.17001 5.09 9.17001 5.5V9.4C9.17001 9.81 8.84001 10.15 8.42001 10.15Z" />
                                            <path d="M8.42001 17.302C7.98008 17.302 7.54446 17.2153 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8275 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0764 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6886 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Settings</h3>
                                </a>
                            </li>
                            <li class="flex flex-col py-[25px] group mb-14">
                                <a href="logout.php" class="flex items-center" onclick="return confirm('Apakah Anda yakin untuk keluar ?')">
                                    <div class="w-[20px] h-[20px] md:w-[24px] md:h-[24px] 2xl:w-[26px] 2xl:h-[26px] text-lightGray group-hover:text-white mr-4">
                                        <svg class="stroke-current w-current h-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.1 16.46C14.79 20.06 12.94 21.53 8.89 21.53H8.76C4.29 21.53 2.5 19.74 2.5 15.27V8.75C2.5 4.28 4.29 2.49 8.76 2.49H8.89C12.91 2.49 14.76 3.94 15.09 7.48M9 12.02L20.38 12.02M18.15 15.37L21.5 12.02L18.15 8.67" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <h3 class="font-medium text-lightGray group-hover:text-white text-[14px] 2xl:text-base">
                                        Logout</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar Black Screen -->
            <div id="sidebar-black-screen" class="hidden ml-[32vw] md:ml-[20vw] w-[70vw] md:w-[80vw] bg-primary opacity-40 h-[100vh] fixed z-45">
            </div>
        </div>
    </section>
    <!-- Sidebar Section End -->

    <!-- Header Section Start -->
    <section class="absolute top-0 left-0 w-full flex item-center bg-white shadow-lg" id="header">
        <div class="container">
            <div class="flex item-center overflow-hidden justify-between z-10 h-[68px]">
                <!-- Hamburger Menu Start -->
                <div id="header-active" class="flex justify-center items-center text-xs pl-4 md:pl-0 md:ml-8">
                    <button id="hamburger-menu" name="hamburger-menu" type="button" class="text-textColor lg:hidden">
                        <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7H21M3 12H21M3 17H21" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <!-- Hamburger Menu End -->

                <!-- Notif & Profil Start -->
                <div class="flex justify-center items-center md:mr-8 xl:mr-8">
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
    <section id="data">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center">
                    <!-- Judul Section -->
                    <div class="mt-[72px] pt-4 ml-4 mb-4 md:mb-7 lg:ml-[15rem] 2xl:ml-[16rem]">
                        <h1 class="font-extrabold text-textColor text-[24px] md:text-[32px]">Data</h1>
                    </div>

                    <!-- Layout Data Start -->
                    <main class="lg:ml-[15rem] flex flex-col justify-center items-center">
                        <div id="dashboard-layout" class="flex flex-col">
                            <div class="flex flex-col justify-center items-center">
                                <!-- Kotak Tabel Data Kolam -->
                                <div id="box-tabel-data" class="w-[95vw] lg:w-[74vw] xl:w-[78vw] mt-4 bg-white p-4 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Tabel Data Kolam
                                        </h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6 text-[#cccccc]">
                                            <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 9H8.25M15.75 15H8.25M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>

                                    <!-- Tabel Data Kolam -->
                                    <div class="flex justify-center mt-4 overflow-x-scroll rounded-lg shadow">
                                        <table id="tabel" class="border border-solid text-xs w-full md:text-[14px] md:w-full">
                                            <thead class="bg-[#F9FBFC]">
                                                <tr>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Jumlah
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Ukuran
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Berat Ikan
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Berat Pakan
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Suhu
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Ph
                                                    </th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Tanggal
                                                        Tebar</th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Tanggal
                                                        Menguras</th>
                                                    <th class="px-1 py-2 border-b-2 border-[#CCCCCC] text-slate-700">
                                                        Tanggal
                                                        Pindah</th>
                                                </tr>
                                            </thead>
                                            <!-- Table Manual -->
                                            <tbody>
                                                <?php if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM datakolam")) > 0) : ?>
                                                    <?php foreach ($dataKolam as $data) : ?>
                                                        <tr>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $data["jumlah"] . " Ekor"; ?></td>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $data["ukuran"] . " cm"; ?></td>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $data["beratIkan"] . " gram"; ?></td>

                                                            <!-- Tampilan beratPakan Start -->
                                                            <?php if ($data["beratPakan"] === null) : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= "- gram"; ?></td>
                                                            <?php else : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= $data["beratPakan"] . " gram"; ?></td>
                                                            <?php endif; ?>
                                                            <!-- Tampilan beratPakan End -->

                                                            <!-- Tampilan suhu Start -->
                                                            <?php if ($data["suhu"] === null) : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= "-°C"; ?></td>
                                                            <?php else : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= $data["suhu"] . "°C"; ?></td>
                                                            <?php endif; ?>
                                                            <!-- Tampilan suhu End -->

                                                            <!-- Tampilan ph Start -->
                                                            <?php if ($data["ph"] === null) : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= "- pH"; ?></td>
                                                            <?php else : ?>
                                                                <td class="py-2 full-w text-center">
                                                                    <?= $data["ph"] . " pH"; ?></td>
                                                            <?php endif; ?>
                                                            <!-- Tampilan ph End -->

                                                            <!-- Tampilan tanggalTebar Start -->
                                                            <?php
                                                            $tanggalTebarparse = date_parse($data["tanggalTebar"]);

                                                            if ($tanggalTebarparse["day"] < 10 && $tanggalTebarparse["month"] < 10) {
                                                                $tanggalTebarConcat = "0" . $tanggalTebarparse["day"] . "-" . "0" . $tanggalTebarparse["month"] . "-" . $tanggalTebarparse["year"];
                                                            } elseif ($tanggalTebarparse["day"] < 10) {
                                                                $tanggalTebarConcat = "0" . $tanggalTebarparse["day"] . "-" . $tanggalTebarparse["month"] . "-" . $tanggalTebarparse["year"];
                                                            } elseif ($tanggalTebarparse["month"] < 10) {
                                                                $tanggalTebarConcat = $tanggalTebarparse["day"] . "-0" . $tanggalTebarparse["month"] . "-" . $tanggalTebarparse["year"];
                                                            } else {
                                                                $tanggalTebarConcat = $tanggalTebarparse["day"] . "-" . $tanggalTebarparse["month"] . "-" . $tanggalTebarparse["year"];
                                                            }
                                                            ?>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $tanggalTebarConcat; ?></td>
                                                            <!-- Tampilan tanggalTebar End -->

                                                            <!-- Tampilan tanggalMenguras Start -->
                                                            <?php
                                                            $tanggalMengurasparse = date_parse($data["tanggalMenguras"]);

                                                            if ($tanggalMengurasparse["day"] < 10 && $tanggalMengurasparse["month"] < 10) {
                                                                $tanggalMengurasConcat = "0" . $tanggalMengurasparse["day"] . "-" . "0" . $tanggalMengurasparse["month"] . "-" . $tanggalMengurasparse["year"];
                                                            } elseif ($tanggalMengurasparse["day"] < 10) {
                                                                $tanggalMengurasConcat = "0" . $tanggalMengurasparse["day"] . "-" . $tanggalMengurasparse["month"] . "-" . $tanggalMengurasparse["year"];
                                                            } elseif ($tanggalMengurasparse["month"] < 10) {
                                                                $tanggalMengurasConcat = $tanggalMengurasparse["day"] . "-0" . $tanggalMengurasparse["month"] . "-" . $tanggalMengurasparse["year"];
                                                            } else {
                                                                $tanggalMengurasConcat = $tanggalMengurasparse["day"] . "-" . $tanggalMengurasparse["month"] . "-" . $tanggalMengurasparse["year"];
                                                            }
                                                            ?>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $tanggalMengurasConcat; ?></td>
                                                            <!-- Tampilan tanggalMenguras End -->

                                                            <!-- Tampilan tanggalPindah Start -->
                                                            <?php
                                                            $tanggalPindahparse = date_parse($data["tanggalPindah"]);

                                                            if ($tanggalPindahparse["day"] < 10 && $tanggalPindahparse["month"] < 10) {
                                                                $tanggalPindahConcat = "0" . $tanggalPindahparse["day"] . "-" . "0" . $tanggalPindahparse["month"] . "-" . $tanggalPindahparse["year"];
                                                            } elseif ($tanggalPindahparse["day"] < 10) {
                                                                $tanggalPindahConcat = "0" . $tanggalPindahparse["day"] . "-" . $tanggalPindahparse["month"] . "-" . $tanggalPindahparse["year"];
                                                            } elseif ($tanggalPindahparse["month"] < 10) {
                                                                $tanggalPindahConcat = $tanggalPindahparse["day"] . "-0" . $tanggalPindahparse["month"] . "-" . $tanggalPindahparse["year"];
                                                            } else {
                                                                $tanggalPindahConcat = $tanggalPindahparse["day"] . "-" . $tanggalPindahparse["month"] . "-" . $tanggalPindahparse["year"];
                                                            }
                                                            ?>
                                                            <td class="py-2 full-w text-center">
                                                                <?= $tanggalPindahConcat; ?></td>
                                                            <!-- Tampilan tanggalPindah End -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6" class="p-1 text-center">Tidak ada data yang tersedia
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                            <!-- Table Manual -->
                                        </table>
                                    </div>
                                </div>

                                <div id="box-tabel-data" class="w-[95vw] lg:w-[74vw] xl:w-[78vw] mt-4 bg-white p-4 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h4 class="font-medium text-[14px] md:text-base text-[#cccccc]">Tabel Waktu
                                            Pakan
                                        </h4>
                                        <span class="w-5 h-5 md:w-6 md:h-6 text-[#cccccc]">
                                            <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 9H8.25M15.75 15H8.25M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>

                                    <!-- Tabel Waktu Pakan -->
                                    <div class="flex justify-center items-center mt-4 w-full overflow-x-scroll md:overflow-auto rounded-lg shadow">
                                        <table id="tabel" class="table-auto border border-solid text-xs md:text-[14px] w-full">
                                            <thead class="bg-[#F9FBFC]">
                                                <tr>
                                                    <th class="p-2 border-b-2 border-[#CCCCCC] text-slate-700">Dibuat
                                                    </th>
                                                    <th class="p-2 border-b-2 border-[#CCCCCC] text-slate-700">Terakhir
                                                        Diubah</th>
                                                    <th class="p-2 border-b-2 border-[#CCCCCC] text-slate-700">Waktu
                                                        Pakan</th>
                                                    <th class="p-2 border-b-2 border-[#CCCCCC] text-slate-700">Bobot
                                                    </th>
                                                    <th class="p-2 border-b-2 border-[#CCCCCC] text-slate-700">Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM waktumakan")) > 0) : ?>
                                                    <?php foreach ($waktuPakan as $data) : ?>
                                                        <tr>
                                                            <!-- Tampilan waktu created Start -->
                                                            <?php
                                                            $createdParse = date_parse($data["created"]);

                                                            if ($createdParse["day"] < 10 && $createdParse["month"] < 10) {
                                                                $createdConcat = "0" . $createdParse["day"] . "-" . "0" . $createdParse["month"] . "-" . $createdParse["year"] . " " . $createdParse["hour"] . ":" . $createdParse["minute"] . ":" . $createdParse["second"];
                                                            } elseif ($createdParse["day"] < 10) {
                                                                $createdConcat = "0" . $createdParse["day"] . "-" . $createdParse["month"] . "-" . $createdParse["year"] . " " . $createdParse["hour"] . ":" . $createdParse["minute"] . ":" . $createdParse["second"];
                                                            } elseif ($createdParse["month"] < 10) {
                                                                $createdConcat = $createdParse["day"] . "-0" . $createdParse["month"] . "-" . $createdParse["year"] . " " . $createdParse["hour"] . ":" . $createdParse["minute"] . ":" . $createdParse["second"];
                                                            } else {
                                                                $createdConcat = $createdParse["day"] . "-" . $createdParse["month"] . "-" . $createdParse["year"] . " " . $createdParse["hour"] . ":" . $createdParse["minute"] . ":" . $createdParse["second"];
                                                            }
                                                            ?>
                                                            <td class="p-1 full-w text-center">
                                                                <?= $createdConcat; ?></td>
                                                            <!-- Tampilan waktu created End -->

                                                            <!-- Tampilan waktu modified Start -->
                                                            <?php
                                                            $modifiedParse = date_parse($data["modified"]);

                                                            if ($modifiedParse["day"] < 10 && $modifiedParse["month"] < 10) {
                                                                $modifiedConcat = "0" . $modifiedParse["day"] . "-" . "0" . $modifiedParse["month"] . "-" . $modifiedParse["year"] . " " . $modifiedParse["hour"] . ":" . $modifiedParse["minute"] . ":" . $modifiedParse["second"];
                                                            } elseif ($modifiedParse["day"] < 10) {
                                                                $modifiedConcat = "0" . $modifiedParse["day"] . "-" . $modifiedParse["month"] . "-" . $modifiedParse["year"] . " " . $modifiedParse["hour"] . ":" . $modifiedParse["minute"] . ":" . $modifiedParse["second"];
                                                            } elseif ($modifiedParse["month"] < 10) {
                                                                $modifiedConcat = $modifiedParse["day"] . "-0" . $modifiedParse["month"] . "-" . $modifiedParse["year"] . " " . $modifiedParse["hour"] . ":" . $modifiedParse["minute"] . ":" . $modifiedParse["second"];
                                                            } else {
                                                                $modifiedConcat = $modifiedParse["day"] . "-" . $modifiedParse["month"] . "-" . $modifiedParse["year"] . " " . $modifiedParse["hour"] . ":" . $modifiedParse["minute"] . ":" . $modifiedParse["second"];
                                                            }
                                                            ?>
                                                            <td class="p-1 full-w text-center"><?= $modifiedConcat; ?>
                                                            </td>
                                                            <!-- Tampilan waktu modified End -->

                                                            <?php if ($data["jam"] < 10 && $data["menit"] < 10) : ?>
                                                                <td class="p-1 full-w text-center">
                                                                    <?= 0 . $data["jam"] . " : " . 0 . $data["menit"] . " WIB"; ?>
                                                                </td>
                                                            <?php elseif ($data["jam"] < 10) : ?>
                                                                <td class="p-1 full-w text-center">
                                                                    <?= 0 . $data["jam"] . " : " . $data["menit"] . " WIB"; ?>
                                                                </td>
                                                            <?php elseif ($data["menit"] < 10) : ?>
                                                                <td class="p-1 full-w text-center">
                                                                    <?= $data["jam"] . " : " . 0 . $data["menit"] . " WIB"; ?>
                                                                </td>
                                                            <?php else : ?>
                                                                <td class="p-1 full-w text-center">
                                                                    <?= $data["jam"] . " : " . $data["menit"] . " WIB"; ?>
                                                                </td>
                                                            <?php endif; ?>
                                                            <td class="p-1 full-w text-center">
                                                                <?= $data["bobotPakan"] / 1000 . " gram"; ?></td>
                                                            <td class="p-1 full-w">
                                                                <div class="flex flex-col md:flex-row md:justify-center items-center">
                                                                    <div class="flex justify-center items-center py-1">
                                                                        <button class="bg-[#01B58D] px-3 py-1 rounded text-white mr-1 show-modal font-semibold">Selesai</button>
                                                                        <!-- <a href="./src/hapus.php?id=<?= $data["id"]; ?>"
                                                                    onclick="return confirm('Apakah Anda yakin untuk menghapus waktu ini ?')"
                                                                    class="px-3 py-1 mr-1 lg:mr-0 rounded text-white bg-[#FF5789] font-semibold">Hapus</a> -->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="5" class="p-1 text-center">Tidak ada data yang tersedia
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- Layout Data End -->
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

    <script src="script/script-data.js"></script>
</body>

</html>