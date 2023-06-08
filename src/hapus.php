<?php
session_start();
require '../function/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = '../settings.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = '../settings.php';
            </script>
        ";
}
