<html>
<body>
see your inserted data <?php
$pa=$_POST["password"];
$pas=$_POST["confirm_password"];
if($pa!=$pas)
{
	
	die("password not confirmed...wrong password..again register");
}
$host='localhost';
$user='rahul';
$pass='rahul';
$db='karan';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected sucessfully to database';
echo '             ';
$n=$_POST["name"];
$e=$_POST["email"];
$m=$_POST["mobile"];
$p=$_POST["password"];
$g=$_POST["gender"];
$s=$_POST["stream"];
$d=$_POST["dropdown"];

echo  $n;
echo '           ';
echo  $e;
echo '             ';
echo  $m;
echo '          ';
echo  $p;
echo '             ';
echo $g;
echo '             ';
echo  $s;
echo '             ';
echo  $d;
echo '             ';
$sql="INSERT INTO `detail`(`name`, `email`, `mobile`, `password`, `gender`, `skills`, `stream`) VALUES ('$n','$e','$m','$p','$g','$d','$s')";
$query=mysqli_query($con,$sql);
if($query)
	echo 'inserted all data successfully in database';
echo '             ';

?>
kindly login 
you are now registered sucessfully
<h3><A href = "login.html"> click me to login</A><h3>
</body>
</html>
