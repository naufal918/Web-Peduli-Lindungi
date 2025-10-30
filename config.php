<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "webpeduli";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}


function isi_data($data)
{
    global $conn;

    $nik = $data["nik"];
    $nama = $data["nama"];

    $res_nik = mysqli_query($conn, "SELECT nik FROM data_sudah_vaksin WHERE nik = '$nik'");
    if (mysqli_fetch_assoc($res_nik)) {
        echo "Data Sudah Ada";
        return false;
    }

    mysqli_query($conn, "INSERT INTO data_sudah_vaksin VALUES('', '$nik', '$nama')");

    return mysqli_affected_rows($conn);
}
