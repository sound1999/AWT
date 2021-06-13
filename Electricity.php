<html>
<head>
<title>Electricity Bill</title>
<style> 
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
h1
{
font-size:30px;
background-color:black;
color:white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body><center>
	
		<h1>Electricity Bill</h1>

		<form action="" method="post">
		Enter Previous Reading:
            	<input type="number" name="units" required><br><br>
		Enter Current Reading:
            	<input type="number" name="units2" required><br><br>
            	<button class="button button2" type="submit" name="submit" id="unit-submit" value="Submit">Compute</button>
		</form>
<?php
if(isset($_POST['submit']))
{
	$p_read=$_POST['units'];
	$c_read=$_POST['units2'];
	$amt;
	if($p_read>$c_read)
	{
		echo "Previous reading must be less than current reading";
	}
	else
	{
		$units=$c_read-$p_read;
		if($units<100)
			$amt=$units*3;
		else if($units>=100&&$units<200)
			$amt=$units*4;
		else if($units>=200&&$units<300)
			$amt=$units*5;
		else
			$amt=$units*6;
		echo "Electricity bill: ".$amt;

	}
}
?>
</center></body>
</html>
