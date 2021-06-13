<!DOCTYPE html>
<html>
<head>
<title>Palindrome</title>
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
<p>CHECK IF THE NUMBER IS PALINDROME OR NOT!!</p>
<form method="post">
  <label for="fname">Enter a Number:</label>
  <input type="text" id="num" name="num">
  <button class="button button2" type="submit">Check</button> 
</form>

<?php   
$reverse = '';
$num = '';
$sum = 0;
$m = 0;
$temp = '';
    if($_POST)  
    {  
        $num = $_POST['num']; 
        $temp = $num;
        $reverse = strrev($num);  
        if($num == $reverse){  
            echo  "The number $num is Palindrome";     
        }else{  
            echo  "The number $num is not a Palindrome";   
        }  
        while($num > 0)
        {
            $m = $num % 10;
            $sum  = $sum + $m;
            $num = $num / 10;  
        }
	echo "<br>Reverse of $temp is $reverse <br>";
	echo "Sum of $temp is $sum";
       
}     
?> 
</body>
</html>