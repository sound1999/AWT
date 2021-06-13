<html>
<head>
<title>Student Application Form</title>
<style>
body
{
background-color:pink;
}
th
{
background-color:black;
color:yellow;
font-size:30px;
}
table
{
	background-color: black;
	color: white;
}
.error {color: #FF0000;}
</style>
</head>
<body><b><br>
<form action="Student_8.php" method="POST" enctype="multipart/form-data">
<table align="center" border="1">
		<tr>
			<th colspan="2">STUDENT APPLICATION FORM</th>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="fname" size="50" required></td>
		</tr>
		<tr>
			<td>Middle Name:</td>
			<td><input type="text" name="mname" size="50" required></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="lname" size="50" required></td>
		</tr>
		<tr>
			<td>Student photo:</td>
			<td><input type="file" name="file" required></td>
		</tr>
		<tr>
			<td>Father Name:</td>
			<td><input type="text" name="faname" size="50" required></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" size="50" required></td>
		</tr>
		<tr>
			<td>Contact Number:</td>
			<td><input type="tel" maxlength="10" name="phone" size="50" required></td>
		</tr>
		<tr>
			<td>Email ID:</td>
			<td><input type="email" name="email" size="50" required></td>
		</tr>
		<tr>
			<td>Date of Birth:</td>
			<td><input type="date" name="dob" size="50" required></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="text" name="gender" size="50" required></td>
		</tr>
		<tr>
			<td>Percentage in Degree:</td>
			<td><input type="text" name="per" size="50" required></td>
		</tr>
		<tr>
			<td>Hobbies:</td>
			<td>
				<input type="checkbox" name="hobby[]" value="Photography">Photography<br>
				<input type="checkbox" name="hobby[]" value="Gardening">Gardening<br>
				<input type="checkbox" name="hobby[]" value="Painting">Painting<br>
				<input type="checkbox" name="hobby[]" value="Dancing">Dancing
			</td>
		</tr>
		<tr>
			<td>Institution Studied:</td>
			<td><input type="text" name="college" size="50" required></td>
		</tr>
		<tr>
			<td>Course Studied:</td>
			<td>
				<input type="radio" value="B.C.A" name="studied">B.C.A<br>
				<input type="radio" value="B.Sc" name="studied">B.Sc<br>
				<input type="radio" value="B.Com" name="studied">B.Com<br>
				<input type="radio" value="B.E" name="studied">B.E
			</td>
		</tr>
		<tr>
			<td>Course Offered:</td>
			<td><select name="course">
  						<option value="M.C.A">M.C.A</option>
  						<option value="M.B.A">M.B.A</option>
  						<option value="M.Tech">M.Tech</option>
  						<option value="M.Sc">M.Sc</option>
			</select></td>
		</tr>
		<tr><td colspan="2" align="center"> <input type="submit" name="submit" value="SUBMIT"> <input type="reset" value="RESET"></td></tr>
</table>
</form>

</b></body>
</html>