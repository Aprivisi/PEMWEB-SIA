<!DOCTYPE HTML>
<html>
<head>
	<title>Simple Register Form</title>
</head>
<body>

<form action="lihat3.php" method="POST">
	<h1>Student Exchange Registration Form</h1>
	<table>
		<tr>
			<td>
				Name: 
			</td>
			<td>
				<input type="text" placeholder="Name" name="username">
			</td>
		</tr>
		
		<tr>
			<td>
				Birthdate:
			</td>
			<td>
				<input type="number" placeholder="DD" name="birthdate1" style="width: 50px">/
				<input type="number" placeholder="MM" name="birthdate2" style="width: 50px">/
				<input type="number" placeholder="YY" name="birthdate3" style="width: 50px">
			</td>
		</tr>

		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="Password" placeholder="Password" name="password"> 
			</td>
		</tr>
		
		<tr>
			<td>
				Confirm Password:
			</td>
			<td>
				<input type="Password" placeholder="Confirm Password" name="password">
			</td>
		</tr>

		<tr>
			<td>
				Email :
			</td>
			<td>
				<input type="text" placeholder="Email" name="email">
			</td>
		</tr>
		<tr>
		</tr>

		<tr>
			<td>
				Gender :
			</td>
			<td>
				<input type="radio" name="Gender" value="male">Male
				<input type="radio" name="Gender" value="female">Female
			</td>
		</tr>
		
		<tr>
			<td>
				Phone Number :
			</td>
			<td>
				<select>
					<option>+62</option>
					<option>+63</option>
					<option>+64</option>
					<option>+65</option>
					<option>+66</option>
				</select>
				<input type="Phone" placeholder="8****" name="Phone">
			</td>
		</tr>

		<tr>
			<td>
			Major:
			</td>
			<td>
				<select placeholder="Major" name="Study">
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="Electrical Engineering">Electrical Engineering</option>
					<option value="Communication Science">Communication Science</option>
					<option value="Psychology">Psychology</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				<p>Choose your Interest:</p>
			</td>
			<td>
				<input type="checkbox" value="Public Health" name="interest"><label>Public Health</label>
				<input type="checkbox" value="Culute" name="interest"><label>Culture</label><br>
				<input type="checkbox" value="Environmental Health" name="interest"><label>Environmental Health</label>
				<input type="checkbox" value="Education" name="interest"><label>Education</label>
			</td>
		</tr>

		<tr>
			<td>
				Address:
			</td>
			<td>
				<textarea placeholder="Address" name="address" cols="40" rows="7"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="Submit" value="Submit" name="">
			</td>
		</tr>

	</table>
	</form>
</body>
</html>

