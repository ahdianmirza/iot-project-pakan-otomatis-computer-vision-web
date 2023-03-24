<?php
require '../function/functions.php';

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // cek data berhasil ditambah atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../view/settings.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = '../view/settings.php';
            </script>
        ";
    }
}
