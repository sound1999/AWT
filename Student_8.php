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
<body>
<br><br><br>

<center>

<?php
if(isset($_POST['submit'])) 
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$faname =  $_POST['faname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$per = $_POST['per'];
$hobby = $_POST['hobby'];
$college = $_POST['college'];
$studied = $_POST['studied'];
$course = $_POST["course"];
if($course == 'M.C.A')
{
	if($per <= 70 )
	{
		echo '<script>alert("Percentage in Degree should be 70% and above")</script>';
		exit();
	}
	elseif($studied != 'B.C.A' and $studied != 'B.Sc')
	{
		echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
		exit();
	}
	else
	{
		echo '<script>alert("Registration Successful ");</script>';
	}	
}


elseif($course == 'M.Tech')
{
	if($per <=70)
	{
		echo '<script>alert("Percentage in Degree should be 70% and above")</script>';
		exit();
	}
	elseif($studied != 'B.E')
	{
		echo '<script>alert("Course Studied should be B.E "); </script>';
		exit();
	}
	else
	{
		echo '<script>alert("Registration Successful ");</script>';
	}	
	
}

elseif($course == 'M.Sc')
{
	if($per <= 40)
	{
		echo '<script>alert("Percentage in Degree should be 40% and above")</script>';
		exit();
	}
	elseif($studied != 'B.C.A' and $studied != 'B.Sc')
	{
		echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
		exit();
	}
	else
	{
		echo '<script>alert("Registration Successful ");</script>';
	}	
}

elseif($course == 'M.B.A')
{
	if($per <= 60)
	{
		echo '<script>alert("Percentage in Degree should be 60% and above "); </script>';
		exit();
		/*header("Location: http://localhost/AWT/Student.php");*/
	}
	else
	{
		echo '<script>alert("Registration Successful ");</script>';
	}
	
}
else
{
	echo '<script>alert("Registration Successful ");</script>';
}

echo "<table border=\"2\"><tr><th colspan=\"3\">Student Application</th></tr>";
echo "<tr><td rowspan=\"14\">";
		$filepath = "image/" . $_FILES["file"]["name"];
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=200 width=300 />";
		}
		else
		{
			echo "Error !!";
		}
echo "</td><td>Name:</td><td>  $fname.$mname.$lname</td></tr>";
echo "<tr><td>Father Name:</td><td> $faname</td></tr>";
echo "<tr><td>Address:</td><td> $address</td></tr>";
echo "<tr><td>Phone Number:</td><td> $phone</td></tr>";
echo "<tr><td>Email ID:</td><td>	$email</td></tr>";
echo "<tr><td>Date of Birth:</td><td> $dob</td></tr>";
echo "<tr><td>Gender:</td><td> $gender</td></tr>";
echo "<tr><td>Percentage:</td><td> $per </td></tr>";
echo "<tr><td>Hobbies:</td><td>";	 
		if(!empty($hobby)){
		foreach($hobby as $selected){
		echo "$selected";
		}
		} 
echo "</td></tr>";
echo "<tr><td>Institution Studied:</td><td> $college</td></tr>";
echo "<tr><td>Course Studied:</td><td> $studied</td></tr>";
echo "<tr><td>Course Selected:</td><td>";
    		if(isset($course)) {
        	$selected = $course;
        	echo "$selected";
 		}		
}  
?>
</center>
</body>
</html>

