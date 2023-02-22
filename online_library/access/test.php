<?php
include '../connect.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];                                 //Username and password is confirmed in the database
$sql="SELECT * FROM users WHERE the_user = '$n1' and the_password='$n2' "; 
$result = $conn->query($sql);
$count = $result->num_rows; 
if ($count==0){                                //If the input data is wrong
	header('Location:http://localhost/online_library/login.php?');   
	exit();
}
if ($count!==0){                              //If the data are correct
	header('Location:http://localhost/online_library/index.php?');
	session_start();
	$_SESSION['online_library'] =$n1; 
	exit();
}
?>