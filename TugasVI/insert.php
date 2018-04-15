<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$edit = $_POST['edit'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $city  . "|F|".
        $edit  . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";
