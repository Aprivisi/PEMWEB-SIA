<?php
$file = "data.txt";
$data = file_get_contents($file);
function update($name, $email, $phone, $city)
{
    $data = $nama . "|F|" . $email . "|F|" . $phone . "|F|" . $city;
    return $data;
}
$rowdel = $_GET['row'];
$baris = explode("[R]", $data);
$data2 = "";
for($i = 0; $i<count($baris)-1; $i++) {
    $kolom = explode("|F|", $baris[$i]);
    if($i == $rowdel) {
?>
<?php
}
$2 .= $baris[$i] . "[R]";
}
if (isset($_POST['submit'])) {
file_put_contents($file, $data2);
header('location:baca.php');
}
?>
