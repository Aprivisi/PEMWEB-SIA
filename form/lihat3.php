<html>
<head>
	<title>Tugas III FORM with METHOD</title>
	<link rel="stylesheet" type="text/css" href="style_5.css">
</head>
	<body>
		<h1>Applicant Data Of Student Exchange Registration Form</h1>
		<center><img src="Editted.jpg" width="120px" height="150px"></center><br>
			<?php 
				$day =$_POST["birthdate1"];
				$month =$_POST["birthdate2"];
				$year =$_POST['birthdate3'];
			?>
		<form>
			<input type="text" value="Username : <?php echo $_POST["username"];?>" disabled>
			<input type="text" value="Birthdate: <?php echo $day.'/'.$month.'/'.$year;?>" disabled>
			<input type="text" value="Password : <?php echo $_POST["password"];?>" disabled>
			<input type="text" value="Confirm Password : <?php echo $_POST["password"];?>" disabled >
			<input type="text" value="Email : <?php echo $_POST["email"]; ?>" disabled>
			<input type="text" value="Gender : <?php echo $_POST["Gender"]; ?>" disabled>
			<input type="text" value="Phone Number : <?php echo $_POST["Phone"]; ?>" disabled>
			<input type="text" value="Major : <?php echo $_POST["Study"]; ?>" disabled>
			<input type="text" value="Interest: <?php echo $_POST["interest"]; ?>" disabled>
			<input type="text" value="Address : <?php echo $_POST["address"]; ?>" disabled>
		</form>

		<!-- <form>
		Username : <?php echo $_POST["username"]; ?><br/>
		Birthdate : <?php echo $_POST["birthdate1"] ?><br/>
		Password : <?php echo $_POST["password"]; ?><br/>
		Confirm Password : <?php echo $_POST["password"]; ?><br/>
		Email : <?php echo $_POST["email"]; ?><br/>
		Gender : <?php echo $_POST["Gender"]; ?><br/>
		Phone Number : <?php echo $_POST["Phone"]; ?><br/>
		Major : <?php echo $_POST["Study"]; ?><br/>
		Interest : <?php echo $_POST["interest"]; ?><br/>
		Address : <?php echo $_POST["address"]; ?><br/>
	</form> -->
</body>
</html>