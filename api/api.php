<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "leleiot");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$waktuPakan = query("SELECT * FROM waktukasihmakan");

echo json_encode($waktuPakan);
