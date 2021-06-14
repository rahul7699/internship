<?php
$host='localhost';
$user='rahul';
$pass='rahul';
$db='karan';

$con=mysqli_connect($host,$user,$pass,$db);
echo 'hello db';
$name=$_POST['name'];
$mobile=$_POST['mobile'];
    
        $sql ="SELECT * FROM `detail` where name ='$name' AND mobile='$mobile'";
		$query=mysqli_query($con,$sql);
if($query)
	echo ' successfully in database';
$run=mysqli_num_rows($query);
        if($run>0)
        {
             
			 $row=mysqli_fetch_assoc($query);
			 $password=$row['password'];
			 $email=$row['email'];
			 echo'kindly login again with     ' ;
			 echo $password;
			 
			 

			 
        }
        else
        {
            echo" <script>window.open('error.html','_self')</script>";
        }
    



?>