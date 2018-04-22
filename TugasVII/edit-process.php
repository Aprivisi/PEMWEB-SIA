<?php
include "connect.php";

$id= $_POST['id'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$city= $_POST['city'];

//update data di database sesuai user_id
$sql = "UPDATE bukutelepon set nama='$nama', email='$email', tel='$tel', city='$city'  where id='$id'";
$res = mysqli_query($link, $sql);
if($sql){
echo "<script> alert ('Edit Berhasil') </script>";
    header('refresh:1;url=tampil-data.php');
}
?>