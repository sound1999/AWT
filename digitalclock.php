<html>
<head>
<title>Digital Clock</title>
<meta http-equiv="refresh" content="1" />
<style>
p
{
color: blue;
font-size: 120px;
position: absolute;
top: 30%;
left: 50%;
transform: translate(-50%, -50%);
}
body
{
background-color: powderblue;
}
</style>
</head>
<body>
<p> <?php 
date_default_timezone_set("Asia/Kolkata");
echo date("h : i : s A");
?> </p>
</body>
</html>

