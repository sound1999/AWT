<html>
<head>
<title>EMPLOYEE DETAILS</title>
<script type="text/javascript">
function findselected(val) { 
    var cat = val;
   if (cat == "part_time") {
      document.getElementById("hour").disabled = false;
   } else {
     document.getElementById("hour").disabled=true;
   }
} 
</script> 
<style>
body
{
    background-color:black;
}
th
{
    background-color:blue;
    color: yellow;
    font-size: 25px;
}
table
{
    background-color:pink;
    color: blue;
}
</style>
</head>
<body>

<br><br><br>
<form  action="Employee.php" method="POST" enctype="multipart/form-data">
<table align="center" border="2">
		<tr>
			<th colspan="2">EMPLOYEE DETAILS</th>
		</tr>
<tr>
	<td>Emp image:</td>
	<td><input type="file" name="file"></td>
</tr>
<tr>
	<td>Emp No:</td>
	<td><input type="text" name="eno" size="30" required></td>
</tr>
<tr>
	<td>First Name:</td>
	<td><input type="text" name="fname" size="30" required></td>
</tr>
<tr>
	<td>Last Name:</td>
	<td><input type="text" name="lname" size="30" required></td>
</tr>
<tr>
	<td>Address:</td>
	<td><input type="text" name="addr" size="30" required></td>
</tr>
<tr>
	<td>Gender:</td>
	<td><input type="text" name="gender" size="30" required></td>
</tr>
<tr>
	<td>Designation:</td>
	<td><input type="text" name="desg" size="30" required></td>
</tr>
<tr>
	<td>Phone-Number:</td>
	<td><input type="text" name="phone" size="30" required></td>
</tr>
<tr>
	<td>Emp Category:</td>
	<td><input type="radio" name="cat" id="cat" value="part_time"  onChange="findselected(this.value)"/>Part Time
                    <input type="radio" name="cat"  id="cat" value="full_time"  onChange="findselected(this.value)" />Full Time
                    <input type="radio" name="cat"  id="cat" value="contract"   onChange="findselected(this.value)"/>Contract</td>
</tr>
<tr>
	<td>Number of hours:</td>
	<td><input type="text" name="hour" id="hour" size="30" required></td>
</tr>
<tr>
	<td>Basic Salary:</td>
	<td><input type="text" name="sal" size="30" required></td>
</tr>
<tr><td colspan="2" align="center"> <input type="submit" name="submit" value="SUBMIT"> <input type="reset" value="RESET"></td></tr>
</table>
</form>
<br><br><br>
<center>	
<?php
if(isset($_POST['submit'])) 
{
	$eno = $_POST['eno'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$gender = $_POST['gender'];
	$desg = $_POST['desg'];
	$phone = $_POST['phone'];
	$cat = $_POST['cat'];
	$hour = $_POST['hour'];
	$sal = $_POST['sal'];
        $basic = $sal;
        $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($cat == 'part_time')
        {
            $da= $basic * 0;
            $hra= $basic * 0;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross + ($hour * 100); 
	    }
	elseif ($cat == 'full_time')
        {
            
            if($basic < 1000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic < 5000 and $basic >=1000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 5000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
	elseif ($cat == 'contract')
        {
            
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            elseif($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            elseif($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }
	
	if($cat == 'part_time'){
		echo "<table border=\"2\"><tr><th colspan=\"3\">Employee Details</th></tr>";
		echo "<tr><td rowspan=\"14\">";
		$filepath = "upload/" . $_FILES["file"]["name"];
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=200 width=300 />";
		}
		else
		{
			echo "Error !!";
		}
		echo "</td><td>Employee Number:</td><td>$eno</td></tr>";
		echo "<tr><td>Name:</td><td>  $fname.$lname</td></tr>";
		echo "<tr><td>Address:</td><td> $addr</td></tr>";
		echo "<tr><td>Gender:</td><td> $gender</td></tr>";
		echo "<tr><td>Designation:</td><td> $desg </td></tr>";
		echo "<tr><td>Phone Number:</td><td> $phone </td></tr>";
		echo "<tr><td>Category:</td><td>";
		if(isset($cat)) {
		$selected = $cat;
		echo "$selected";
		 }		
		 echo "</td></tr>";
		 echo "<tr><td>Hour:</td><td> $hour</td></tr>";
		 echo "<tr><td>Basic Salary:</td><td> $sal</td></tr>";
		 echo "<tr><td>Net Salary:</td><td> $salary</td></tr>";     
        }
        elseif($cat == 'full_time'){
		echo "<table border=\"2\"><tr><th colspan=\"3\">Employee Details</th></tr>";
		echo "<tr><td rowspan=\"14\">";
        $filepath = "upload/" . $_FILES["file"]["name"];
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=200 width=300 />";
		}
		else
		{
			echo "Error !!";
		}
        echo "</td><td>Employee Number:</td><td>$eno</td></tr>";
		echo "<tr><td>Name:</td><td>  $fname.$lname</td></tr>";
		echo "<tr><td>Address:</td><td> $addr</td></tr>";
		echo "<tr><td>Gender:</td><td> $gender</td></tr>";
		echo "<tr><td>Designation:</td><td> $desg </td></tr>";
		echo "<tr><td>Phone Number:</td><td> $phone </td></tr>";
		echo "<tr><td>Category:</td><td>";
			if(isset($cat)) {
			$selected = $cat;
			echo "$selected";
			}		
		echo "</td></tr>";
		echo "<tr><td>Hour:</td><td> $hour</td></tr>";
		echo "<tr><td>Basic Salary:</td><td> $sal</td></tr>";
		echo "<tr><td>DA:</td><td> $da</td></tr>";      
		echo "<tr><td>HRA:</td><td> $hra</td></tr>"; 
		echo "<tr><td>Tax:</td><td> $tax</td></tr>"; 
		echo "<tr><td>Gross Salary:</td><td> $gross</td></tr>"; 
		echo "<tr><td>Net Salary:</td><td> $salary</td></tr>";       
        }
        elseif($cat == 'contract'){
		echo "<table border=\"2\"><tr><th colspan=\"3\">Employee Details</th></tr>";
		echo "<tr><td rowspan=\"14\">";
        $filepath = "upload/" . $_FILES["file"]["name"];
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=200 width=300 />";
		}
		else
		{
			echo "Error !!";
		}
        echo "</td><td>Employee Number:</td><td>$eno</td></tr>";
		echo "<tr><td>Name:</td><td>  $fname.$lname</td></tr>";
		echo "<tr><td>Address:</td><td> $addr</td></tr>";
		echo "<tr><td>Gender:</td><td> $gender</td></tr>";
		echo "<tr><td>Designation:</td><td> $desg </td></tr>";
		echo "<tr><td>Phone Number:</td><td> $phone </td></tr>";
		echo "<tr><td>Category:</td><td>";
			if(isset($cat)) {
			$selected = $cat;
			echo "$selected";
			}		
		echo "</td></tr>";
		echo "<tr><td>Hour:</td><td> $hour</td></tr>";
		echo "<tr><td>Basic Salary:</td><td> $sal</td></tr>";
        echo "<tr><td>DA:</td><td> $da</td></tr>";      
        echo "<tr><td>HRA:</td><td> $hra</td></tr>"; 
        echo "<tr><td>Tax:</td><td> $tax</td></tr>"; 
        echo "<tr><td>Gross Salary:</td><td> $gross</td></tr>"; 
        echo "<tr><td>Net Salary:</td><td> $salary</td></tr>";       
        }     		
}  
?>
</center>
</body>
</html>
