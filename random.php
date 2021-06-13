<html>
<head><title>Random</title>
<style>
p
{
color: hotpink;
font-size: 50px;
position: absolute;
top: 30%;
left: 50%;
transform: translate(-50%, -50%);
}
body
{
background-color: black;
}
</style>
</head>
<body>
<p>Number generated randomly is :  
<?php
    $choice = rand(1, 100);
    echo $choice;
?><br>
Square root is :
<?php
    echo sqrt($choice);
?>
.</p>
</body>
</html>