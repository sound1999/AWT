<!DOCTYPE html>
<html>
<head>
<title>Arithmetic Operations</title>
<style> 
body
{
background-color:powderblue;
color:blue;
font-size: 20px;
}
h1
{
font-size:30px;
background-color:black;
color:white;
}
h4
{
font-size:18px;
color:red;
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
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
div
{
font-size:16px;
text-align:left;
float:left;
}
</style>
</head>

<body><center>
	<h1> ARITHMETIC OPERATIONS </h1>
	 <div><h4>Option + = Addition</h4>
    	 <h4>Option - = Subtraction</h4>
    	 <h4>Option * = Multiplication</h4>
         <h4>Option / = Division</h4></div>
	<br>
	<form method="post">
		<table border="0">
			<tr>
				<td> <input type="text" name="num1" value="" placeholder="Enter value 1"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="num2" value="" placeholder="Enter value 2"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="option" value="" placeholder="Enter option +,-,*,/ only"/>
				</td>
			</tr>

			<tr>
				<td> <input class="button button2" type="submit" name="submit" value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
<br>
<?php
if(isset($_POST['submit'])) {

	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];

	switch($ch) {
		case '+':	$r = $a + $b;
				echo " Addition of $a and $b = " . $r ;
				break;

		case '-':	$r = $a - $b;
				echo " Subtraction of $a and $b = " . $r ;
				break;

		case '*':	$r = $a * $b;
				echo " Multiplication of $a and $b = " . $r ;
				break;

		case '/': 	$r = $a / $b;
			  	echo " Division of $a and $b = " . $r ;
			  	break;

		default: 	echo ("invalid option\n");
			 	break;
	}
	return 0;
}
?>
</center>
</body>
</html>
