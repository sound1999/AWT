<!DOCTYPE html>
<html>
<head>
<title>String Operations</title>
<style> 
body
{
background-color:pink;
color:blue;
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
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
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
	 <h1>STRING OPERATIONS</h1>
	 <div><h4>Option 1 = Reversing the string</h4>
    	 <h4>Option 2 = Finding the length of the string</h4>
    	 <h4>Option 3 = Substring operations</h4>
         <h4>Option 4 = Converting to uppercase</h4>
	 <h4>Option 5 = Converting to lowercase</h4>
         <h4>Option 6 = Counting the number of words</h4></div>
	<br>
	<form method="post">
		<table border="0">
			<tr>
				<td> <input type="text" name="text"
					value="" placeholder="Enter the String"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="option" value=""
					placeholder="Enter option 1-6 only"/>
				</td>
			</tr>

			<tr>
				<td> <input class="button button2" type="submit" name="submit"
					value="Submit"/>
				</td>
			</tr>
		</table>
	</form>


<?php


if(isset($_POST['submit'])) {

	$a = $_POST['text'];

	$ch = $_POST['option'];

	switch($ch) {
		case 1:	echo strrev($a);
			break;
		case 2:	echo strlen($a);
			break;

		case 3:	echo substr($a,3);
			break;

		case 4:	echo strtoupper($a);
			break;

		case 5:	echo strtolower($a);
			break;

		case 6: echo str_word_count($a);
			break;

		default: echo ("invalid option\n");
			 break;
	}
	
	return 0;
}
?>
</center>
</body>
</html>
