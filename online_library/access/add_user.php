<?php
include '../connect.php';

$the_user=$_GET['the_user'];
$sql="SELECT * FROM users WHERE the_user = '$the_user' "; //Check if the name is repeated in the database
$result = $conn->query($sql);
$count= $result->num_rows;

         if ($count==1) {
    header('Location:http://localhost/online_library/sign_up.php?re=1'); //If the username was used
    exit();
         }

$the_password=$_GET['the_password'];
$reset_password=$_GET['reset_password'];
                                                        //If password does not match password confirmation 
if($the_password !== $reset_password){
	header('Location:http://localhost/online_library/sign_up.php?re=2'); 
	exit();
}
                                                      //Save user name and password in database
$sql="INSERT INTO users (the_user, the_password)
VALUES('$the_user','$the_password')";

$result2 = $conn->query($sql);
header('Location:http://localhost/online_library/login.php?re=');
?>