<?php
// set sebagai format json
header("Content-Type: application/json; charset=UTF-8");

// ambil parameter yang dikirim lewat ajax
$param = json_decode($_POST["param"], false);

// buat koneksi mysql
$conn = new mysqli("localhost", "root", "qweasd", "web_magelang");

// eskekusi query untuk mengambil data berdasarkan parameter
$result = $conn->query("SELECT * FROM " . $param->table . " LIMIT " . $param->limit);

// output data sebagai format array assosiative
$output = $result->fetch_all(MYSQLI_ASSOC);

// tampilkan data output sebagai format json
echo json_encode($output);
