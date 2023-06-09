<?php
// Ambil data dari post
$suhu = $_POST["suhu"];
$ph = $_POST["ph"];

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "afeesh_db");

// Ambil data dari database
$queryAmbil = "SELECT * FROM datakolam ORDER BY id DESC LIMIT 1";
$queryAmbilSend = mysqli_query($conn, $queryAmbil);

while ($data = mysqli_fetch_array($queryAmbilSend)) {
    $item[] = [
        'jumlah' => $data["jumlah"],
        'ukuran' => $data["ukuran"],
        'beratIkan' => $data["beratIkan"],
        'tanggalTebar' => $data["tanggalTebar"],
        'tanggalMenguras' => $data["tanggalMenguras"],
        'tanggalPindah' => $data["tanggalPindah"],
    ];
}

$jumlah = $item[0]["jumlah"];
$ukuran = $item[0]["ukuran"];
$beratIkan = $item[0]["beratIkan"];
$tanggalTebar = $item[0]["tanggalTebar"];
$tanggalMenguras = $item[0]["tanggalMenguras"];
$tanggalPindah = $item[0]["tanggalPindah"];

$queryPost = "INSERT INTO datakolam (jumlah, ukuran, beratIkan, suhu, ph, tanggalTebar, tanggalMenguras, tanggalPindah)
                VALUES
                ('$jumlah', '$ukuran', '$beratIkan', '$suhu', '$ph', '$tanggalTebar', '$tanggalMenguras', '$tanggalPindah')";

mysqli_query($conn, $queryPost);
?>