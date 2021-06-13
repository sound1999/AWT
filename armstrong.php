<!DOCTYPE html>
<html>
<head>
<title>Armstrong</title>
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
<p>CHECK IF THE NUMBER IS ARMSTRONG OR NOT!!</p> 
 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <button class="button button2" type="submit">Check</button>   
  </form>  

<?php  
 if($_POST)  
 {   
  $number = $_POST['number'];  
  $a = $number;  
  $sum  = 0;  
  while( $a != 0 )  
  {  
   $rem   = $a % 10;  
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $a   = $a / 10;  
  }  
  if( $number == $sum )  
  {  
   echo "Yes $number is an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
 }  
?>  

</body>  
</html>     