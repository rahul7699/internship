<?php
session_start();
echo 'page #1';
$host='localhost';
$user='rahul';
$pass='rahul';
$db='karan';

$con=mysqli_connect($host,$user,$pass,$db);
echo 'hello db';
$name=$_POST['name'];
$password=$_POST['password'];
    
        $sql ="SELECT * FROM `detail` where name ='$name' AND password='$password'";
		$query=mysqli_query($con,$sql);
if($query)
	echo ' successfully in database';
$run=mysqli_num_rows($query);
        if($run>0)
        {
			
		    $_SESSION['names']=$name;
			
			echo" <script>window.open('admin.php','_self')</script>";
             
			 
        }
        else
        {
            echo" <script>window.open('error.html','_self')</script>";
        }
    



?>
