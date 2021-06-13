<!DOCTYPE html>
<html>
<head>
<title>FIBONACCI</title>
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
<p>FIBONACCI SERIES</p> 
 <form method="post">  
 Enter the Number:  
   <input type="number" name="num">  
   <button class="button button2" type="submit" name="submit">Check</button>   
  </form> 

 <?php   
 

  $num = $_POST['num'];
  $s; 
  $arr=array(); 
  echo "<h3>Fibonacci series are:</h3>";  
  echo " ";  
  
  function series($num){  
      if($num == 0){  
      return 0;  
      }else if( $num == 1){  
  return 1;  
  }  else {  
  return (series($num-1) + series($num-2));  
  }   
  }  
   
  for ($i = 0; $i < $num; $i++){  
  
  $s=series($i);
  echo "$s ";
  $arr[$i]=$s;
     
  }  
  
  echo "<h3>Prime numbers are:</h3>";
  for($i=3;$i<count($arr);$i++)
  {
    $c=$arr[$i];
    $b=prime($c);
    if($b==1)
    echo $c." ";
  }
  function prime($x)
  {
  
  for($n=2;$n<$x;$n++)
  {
    
    if($x%$n==0)
    {
      return 0;
    }
  }
  return 1;
  }

?> 
</body>
</html> 