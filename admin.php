<html>
<body>

welcome
<?php
session_start();
echo 'wewlc page #2 ';
$value=$_SESSION['names'];

echo $value;
echo "Hello you are sucessfully logged in WELCOME"; 
echo "want to logout";
?>
<a href="logout.php">LOGOUT HERE </a>
</body>
</html>
