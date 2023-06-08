<?php
require 'function/functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('User baru berhasil ditambahkan !');
            </script>;
        ";
    } else {
        echo mysqli_error($conn);
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
    <title>Registrasi - aFEESH</title>
</head>
<body class="bg-bgColor">
    <div class="container">
        <div class="flex flex-wrap justify-center items-center xl:w-full xl:h-screen">
            <!-- Mobile, sm, md, lg breakpoint -->
            <div class="w-full self-center xl:hidden">
                    <!-- Title Start -->
                    <div class="flex flex-col justify-center items-center">
                        <div class="flex justify-center items-center mt-[86px]">
                            <img class="w-[120px]" src="img/aFEESH-primary.png" alt="Logo Ikan">
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <h1 class="font-bold text-[42px] text-primary">Selamat Datang !</h1>
                            <h3 class="text-base text-primary">Buat akun Anda !</h3>
                            <?php if (isset($error)) : ?>
                                <p class="italic text-red-700 text-center mt-4">Username atau password salah !</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Title End -->

                    <!-- Form Registrasi Start -->
                    <form action="" method="post">
                        <div class="flex justify-center items-start mt-4">
                            <div class="flex flex-col justify-center items-start">
                                <label for="username" class="font-semibold text-[14px] md:text-base text-primary">Username</label>
                                <input type="text" id="username" name="username" placeholder="Masukkan username" class="w-[318px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                            </div>
                        </div>

                        <div class="flex justify-center items-start mt-4">
                            <div class="flex flex-col justify-center items-start">
                                <label for="password" class="font-semibold text-[14px] md:text-base text-primary">Password</label>
                                <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-[318px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                            </div>
                        </div>

                        <div class="flex justify-center items-start mt-4">
                            <div class="flex flex-col justify-center items-start">
                                <label for="password2" class="font-semibold text-[14px] md:text-base text-primary">Konfirmasi Password</label>
                                <input type="password" id="password2" name="password2" placeholder="Masukkan password" class="w-[318px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                            </div>
                        </div>

                        <div class="flex justify-center items-start mt-10">
                            <button class="w-[128px] bg-primary text-white rounded-full p-1 ml-2" type="submit" name="register">Daftar</button>
                        </div>
                    </form>
                    <!-- Form Registrasi End -->

                    <div class="flex justify-center items-start mt-8">
                        <p class="text-[14px]">
                        Sudah punya akun ? <a class="text-[14px] text-primary font-bold" href="login.php">Masuk di sini</a>
                        </p>
                    </div>
            </div>
            <!-- Mobile, sm, md, lg breakpoint -->

            <!-- xl, 2xl breakpoint -->
            <div class="w-[80vw] h-[42rem] rounded-xl shadow-lg hidden xl:flex flex-col bg-white bg-opacity-95 self-center">
                <div class="flex justify-start items-center ml-[36px] mt-[30px]">
                        <img class="w-[80px]" src="img/aFEESH-primary.png" alt="Logo Ikan">
                        <h1 class="text-[32px] font-bold text-primary ml-5">aFEESH</h1>
                </div>

                <!-- Form Registrasi Start -->
                <form class="flex flex-col justify-center items-end mr-[80px] mt-4" action="" method="post">
                    <div class="flex flex-col justify-center items-start">
                        <!-- Title Start -->
                        <div class="flex justify-start items-center">
                                <div class="flex flex-col justify-center items-start">
                                    <div class="flex flex-col justify-center items-start">
                                        <h1 class="font-bold text-[42px] xl:text-[46px] text-primary">Selamat Datang !</h1>
                                        <h3 class="text-base xl:text-[20px] text-primary">Buat akun Anda !</h3>
                                        <?php if (isset($error)) : ?>
                                            <p class="italic text-red-700">Username atau password salah !</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                        <!-- Title End -->

                        <div class="flex flex-col justify-center items-center mt-[46px]">
                                <div class="flex justify-center items-center">
                                    <div class="flex flex-col justify-center items-start">
                                        <label for="username" class="font-semibold text-[14px] xl:text-[16px] md:text-base text-primary pb-2">Username</label>
                                        <input type="text" id="username" name="username" placeholder="Masukkan username" class="w-[435px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                                    </div>
                                </div>
            
                                <div class="flex justify-center items-center mt-4">
                                    <div class="flex flex-col justify-center items-start">
                                        <label for="password" class="font-semibold text-[14px] xl:text-[16px] md:text-base text-primary pb-2">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-[435px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center mt-4">
                                    <div class="flex flex-col justify-center items-start">
                                        <label for="password2" class="font-semibold text-[14px] xl:text-[16px] md:text-base text-primary pb-2">Konfirmasi Password</label>
                                        <input type="password" id="password2" name="password2" placeholder="Masukkan password" class="w-[435px] px-3 py-2 shadow border border-primary border-opacity-60 rounded-md block text-sm" required>
                                    </div>
                                </div>
            
                                <div class="flex justify-center items-center mt-10">
                                    <button class="w-[156px] bg-primary text-white font-semibold text-[20px] rounded-full p-1 ml-2" type="submit" name="register">Daftar</button>
                                </div>
            
                                <div class="flex justify-center items-center mt-8">
                                    <p class="text-[14px] xl:text-[16px]">
                                        Sudah punya akun ? <a class="text-[14px] xl:text-[16px] text-primary font-bold" href="login.php">Masuk di sini</a>
                                    </p>
                                </div>
                        </div>
                    </div>
                </form>
                <!-- Form Registrasi End -->
            </div>
            <!-- xl, 2xl breakpoint -->
        </div>
    </div>
</body>
</html>