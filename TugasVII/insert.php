<?php

include "connect.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$city  = $_POST['city'];

$sql = "INSERT INTO bukutelepon (nama, email, tel, city) "
     . "VALUES ('$nama','$email','$tel','$city')";

/* eksekusi query SQL */

$res = mysqli_query($link, $sql);
if($res) echo "Data berhasil disimpan.";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);
