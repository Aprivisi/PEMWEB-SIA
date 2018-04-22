<?php 
include "connect.php";
$id = $_GET['id'];

$sql = "select*from bukutelepon where id='$id'";
$res = mysqli_query($link, $sql);
$baris = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<body>
<div id="art-main">
	<form  class="register" method='post' action="proses-edit.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<h1>Phonebook</h1>
	<h2>Edit Biodata</h2>
		<fieldset class="row1">
			<legend>Account Details</legend>
        	<p>
            	<label>Nama</label><br>
            	<input type="text" name="nama" required="required" value="<?php echo $baris['nama']; ?>">
			</p>
			<p>
        		<label>Email</label><br>
            	<input type="email" name="email" required="required" value="<?php echo $baris['email'] ?>">
			</p>
			<p>
            	<label>Nomor Telepon</label><br>
            	<input type="text" name="tel" required="required" value="<?php echo $baris['tel'] ?>">
			</p>
			<p>
            	<label>City</label><br>
            	<input type="text" name="tel" required="required" value="<?php echo $baris['tel'] ?>">
			</p>
		</fieldset>
			<div><button class="button" type="submit" value="submit" name="submit">Edit &raquo; </button></div>
	</form>		
</body>
</html>

