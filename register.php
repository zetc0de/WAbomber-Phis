<?php

$id = $_POST["paket_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$kode = $_POST["kode"];
$telp = $_POST["no_telpon"];
$sudah = $_POST["sudah"];

$content = "Nama : $name | Email : $email | No : $telp\n";
$file = "save.txt";
file_put_contents($file, $content . PHP_EOL, FILE_APPEND);
// fclose($saved);
?>
