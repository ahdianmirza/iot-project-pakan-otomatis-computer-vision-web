<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "leleiot");
date_default_timezone_set("Asia/Jakarta");

function queryWaktuMakan($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function queryDataKolam($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahDataKolam($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $jumlah = htmlspecialchars($data["jumlah"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $berat = htmlspecialchars($data["berat"]);
    $tanggalTebar = htmlspecialchars($data["tanggalTebar"]);
    $tanggalMenguras = htmlspecialchars($data["tanggalMenguras"]);
    $tanggalPindah = htmlspecialchars($data["tanggalPindah"]);
    // $kecepatan = 50;
    // $created = date('Y-m-d H:i:s');
    // $modified = null;

    // query insert data
    $query = "INSERT INTO datakolam 
                VALUES
                ('', '$jumlah', '$ukuran', '$berat', '$tanggalTebar', '$tanggalMenguras', '$tanggalPindah')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahWaktuMakan($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $jam = htmlspecialchars($data["jam"]);
    $menit = htmlspecialchars($data["menit"]);
    $detik = 0;
    $lamaPakan = htmlspecialchars($data["lamaPakan"]);
    $kecepatan = 50;
    $created = date('Y-m-d H:i:s');
    $modified = null;

    // cek data angka atau bukan
    if (!is_numeric($jam)) {
        echo "
            <script>
                alert('Format data salah!' + typeof($jam));
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    if (!is_numeric($menit)) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    if (!is_numeric($lamaPakan)) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    // cek data jam
    if ($jam > 24) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    if ($menit > 60) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    if ($jam < 0) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    if ($menit < 0) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = '../view/settings.php';
            </script>
        ";
        die;
    }

    // query insert data
    $query = "INSERT INTO waktukasihmakan 
                VALUES
                ('', '$jam', '$menit', '$detik', '$lamaPakan', '$kecepatan', '$created', '$modified')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM waktukasihmakan WHERE id = $id");

    return mysqli_affected_rows($conn);
}
