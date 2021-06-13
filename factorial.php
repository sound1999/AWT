<!DOCTYPE html>
<html>
<head>
<title>FACTORIAL</title>
<style> 
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
p
{
font-size:30px;
background-color:black;
color:white;
}
h3
{
  color:blue;
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
<?php
$msg = '';
$num = '';
	if(isset($_POST['form_submit'])) {
		$num = $_POST['num'];
		$msg = factorial_of_a_number($num);

	}
function factorial_of_a_number($n)
{
	if($n >= 0)
	{
		if($n == 0)
	    {
		   return 1;
	    }
	  	else 
	    {	
		   return $n * factorial_of_a_number($n-1);
	    }
	}
	else
	{
		return 'Invalid!! Insert Positive Ineteger';
	}
}
?>
<p>FACTORIAL NUMBER</p> 
 <form method="post">  
 Enter the Number:  
 <input type="number" name="num">  
 <button class="button button2" type="submit" name="form_submit">Check</button><br><br>
 <?php  echo '<br>Factorial of <b> '. $num . '</b> is <b>' . $msg; ?>  
 </form>  
</center></body>
</html>