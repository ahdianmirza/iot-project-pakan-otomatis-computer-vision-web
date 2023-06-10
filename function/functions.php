<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "afeesh_db");
date_default_timezone_set("Asia/Jakarta");

if (!$conn) {
    echo "Koneksi Gagal";
    exit();
}

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

    // Ambil data
    $jumlah = htmlspecialchars($data["jumlah"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $beratIkan = htmlspecialchars($data["beratIkan"]);
    $tanggalTebar = htmlspecialchars($data["tanggalTebar"]);
    $tanggalMenguras = htmlspecialchars($data["tanggalMenguras"]);
    $tanggalPindah = htmlspecialchars($data["tanggalPindah"]);
    $created = date('Y-m-d H:i:s');

    // ambil data database
    $queryAmbil = "SELECT * FROM datakolam ORDER BY id DESC LIMIT 1";
    $queryAmbilSend = mysqli_query($conn, $queryAmbil);

    while ($data = mysqli_fetch_array($queryAmbilSend)) {
        $item[] = [
            'suhu' => $data["suhu"],
            'ph' => $data["ph"]
        ];
    }

    $suhu = $item[0]["suhu"];
    $ph = $item[0]["ph"];

    // query insert data
    $query = "INSERT INTO datakolam (jumlah, ukuran, beratIkan, suhu, ph, tanggalTebar, tanggalMenguras, tanggalPindah, created)
                VALUES
                ('$jumlah', '$ukuran', '$beratIkan', '$suhu', '$ph', '$tanggalTebar', '$tanggalMenguras', '$tanggalPindah', '$created')";
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
    $bobotPakan = htmlspecialchars($data["bobotPakan"]);
    $kecepatan = 50;
    $created = date('Y-m-d H:i:s');
    $modified = date('Y-m-d H:i:s');

    // cek data angka atau bukan
    if (!is_numeric($jam)) {
        echo "
            <script>
                alert('Format data jam salah!' + typeof($jam));
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    if (!is_numeric($menit)) {
        echo "
            <script>
                alert('Format data menit salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    if (!is_numeric($bobotPakan)) {
        echo "
            <script>
                alert('Format data bobot pakan salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    // cek data jam
    if ($jam > 24) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    if ($menit > 60) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    if ($jam < 0) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    if ($menit < 0) {
        echo "
            <script>
                alert('Format data salah!');
                document.location.href = './settings.php';
            </script>
        ";
        die;
    }

    // Cek data yang sama di database
    $queryDataSama = mysqli_query($conn, "SELECT * FROM waktumakan WHERE jam = '$jam' AND menit = $menit");
    $cekDataSama = mysqli_num_rows($queryDataSama);

    if ($cekDataSama == 0) {
        // query insert data
        $query = "INSERT INTO waktumakan (jam, menit, detik, bobotPakan, kecepatan, created, modified)
                    VALUES
                    ('$jam', '$menit', '$detik', '$bobotPakan', '$kecepatan', '$created', '$modified')";
        mysqli_query($conn, $query);
    } else {
        echo "
            <script>
                alert('Data sudah tersedia');
                document.location.href = '../settings.php';
            </script>
        ";
        die;
    }

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM waktumakan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $jam = htmlspecialchars($data["jam"]);
    $menit = htmlspecialchars($data["menit"]);
    $bobotPakan = htmlspecialchars($data["bobotPakan"]);
    $modified = date('Y-m-d H:i:s');

    $query = "UPDATE waktumakan SET
                jam = $jam,
                menit = $menit,
                bobotPakan = $bobotPakan,
                modified = '$modified'
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah terdaftar !');
            </script>
        ";
        return false;
    }

    // Cek konfirmasi password
    if ($password != $password2) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai !');
            </script>
        ";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke dalam database
    mysqli_query($conn, "INSERT INTO user (username, password)
                            VALUES
                            ('$username', '$password')");

    return mysqli_affected_rows($conn);
}
