<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "afeesh_db");

$sql = "SELECT * FROM waktumakan";
$query = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($query)) {
    $item[] = [
        'jam' => $data["jam"],
        'menit' => $data["menit"],
        'detik' => $data["detik"],
        'bobotPakan' => $data["bobotPakan"],
        'kecepatan' => $data["kecepatan"],
    ];
}

$respond = [
    "status" => "OK",
    "data" => $item
];
echo json_encode($respond);

// function query($query)
// {
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_array($result)) {
//         $rows[] = $row;
//     }
//     return $rows;
// }


// echo json_encode($respond);
