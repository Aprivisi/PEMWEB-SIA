<?php
include ("connect.php");
?>

<!DOCTYPE html>
<html>
<body>
<div id="art-main">
	<form  class="register" method='post' action="insert.php" enctype="multipart/form-data">
	<h1>Phonebook</h1>
		<fieldset class="row1">
        	<p>
					<?php
					echo "<center>";
					echo "<table border=1>";
						$sql= "SELECT id, nama, email, tel "
							. "FROM bukutelepon";
						$res = mysqli_query($link, $sql);
							echo "  <td>No</td><td>Nama</td>";
							echo "  <td>Email</td><td>No Telepon</td>";
							echo "  <td>City</td>";
							echo "	<td>Action</td>";
							echo "</tr>";
						while ($baris = mysqli_fetch_array($res)) {
							$id=$baris['id'];
							echo "<tr>";
							echo "<td>" . $id . "</td>";
							echo "<td>" . $baris['nama'] . "</td>";
							echo "<td>" . $baris['email'] . "</td>";
							echo "<td>" . $baris['tel'] . "</td>";
							echo "<td>" . $baris['city'] . "</td>";
							echo '  <td><a href="hapus-data.php?id='.$id.'">Delete</a>| 
										<a href="edit-data.php?id='.$id.'">Update</a> </td>';
							echo "</tr>";
						}
					echo "</table>";
					echo '<br><a href="form.html"><< Isi data</a>';						
					 ?>
			</p>
		</fieldset>	</form>
</body>
</html>
