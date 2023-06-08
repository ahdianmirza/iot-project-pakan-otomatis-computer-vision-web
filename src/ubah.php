<?php
session_start();
require '../function/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

// Ambil data dari url
$id = $_GET["id"];

// Query data waktu pakan berdasarkan id
$waktuPakan = queryWaktuMakan("SELECT * FROM waktumakan WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = '../settings.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = '../settings.php';
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
    <link rel="stylesheet" href="../style.css">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="img/aFEESH_favicon.ico" type="image/x-icon">
    <title>Ubah Data - aFEESH</title>
</head>

<body class="bg-bgColor">
    <div class=" h-screen w-full flex left-0 top-0 justify-center items-center bg-black bg-opacity-40">
        <!-- Modal -->
        <div class="bg-white rounded shadow-lg w-[90vw] md:w-[60vw] lg:w-[50vw] xl:w-[50vw] 2xl:w-[50vw]">
            <!-- Modal Header -->
            <div class="border-b px-4 py-4 flex justify-between items-center">
                <h3 class="text-base font-bold">Ubah Data</h3>
                <a href="../settings.php" class="text-black text-base font-bold">X</a>
            </div>

            <!-- Modal Body -->
            <div class="flex items-center justify-center md:justify-start p-4 modal">
                <form class="flex flex-col w-full" action="" method="post">
                    <ul>
                        <input type="hidden" name="id" value="<?= $waktuPakan["id"]; ?>">
                        <li>
                            <!-- Waktu Pakan -->
                            <label for="waktu" class="flex flex-col">
                                <h3 class="font-semibold text-[14px] md:text-base">Waktu
                                    Pakan :
                                </h3>
                                <div class="flex items-center mt-2">
                                    <div
                                        class="flex justify-center items-center w-[38px] h-[34px] border border-[#cccccc] rounded-lg p-1">
                                        <span>
                                            <img src="../img/clock.png" alt="Jam">
                                        </span>
                                    </div>
                                    <input type="number" id="jam" value="<?= $waktuPakan["jam"]; ?>" name="jam"
                                        placeholder="Masukkan jam"
                                        class="px-3 py-2 shadow border border-[#cccccc] rounded-full w-1/2 block text-sm ml-2"
                                        required>
                                    <input type="number" id="menit" value="<?= $waktuPakan["menit"]; ?>" name="menit"
                                        placeholder="Masukkan menit"
                                        class="px-3 py-2 shadow border border-[#cccccc] rounded-full w-1/2 block text-sm ml-2"
                                        required>
                                </div>
                            </label>
                        </li>
                        <li>
                            <!-- Bobot Pakan -->
                            <label for="bobot" class="flex flex-col justify-center mt-4">
                                <h3 class="font-semibold text-[14px] md:text-base">Bobot
                                    Pakan :
                                </h3>
                                <div class="flex justify-center items-center mt-2">
                                    <div
                                        class="flex justify-center items-center w-[38px] h-[34px] border border-[#cccccc] rounded-lg p-1">
                                        <span>
                                            <img src="../img/bobot.png" alt="Bobot">
                                        </span>
                                    </div>
                                    <input type="number" id="bobotPakan" value="<?= $waktuPakan["bobotPakan"]; ?>"
                                        name="bobotPakan" placeholder="Masukkan bobot pakan"
                                        class="px-3 py-2 shadow border border-[#cccccc] rounded-full w-full block text-sm ml-2"
                                        required>
                                </div>
                            </label>
                        </li>
                    </ul>

                    <div class="flex justify-center items-center mt-2 gap-x-2">
                        <a href="../settings.php" type="button"
                            class="w-full flex justify-center items-center font-semibold h-9 bg-[#FF5789] text-white rounded-full my-3">Batal</a>
                        <button type="submit" name="submit"
                            class="w-full h-9 bg-primary text-white rounded-full my-3">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Section End -->
</body>

</html>