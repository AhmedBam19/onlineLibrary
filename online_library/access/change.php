<?php
include '../connect.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

session_start();
$the_user=$_SESSION['online_library'];
                                             //Username is confirmed in the database
$sql="SELECT * FROM users WHERE the_user = '$the_user' ";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
    $the_password=$row['the_password'];
   	}	
                            //If the password registered in the database is not the same as the password entered
if ($n1 !== $the_password){
	header('Location:http://localhost/online_library/change_pass.php?re=1');
	exit();
}
if ($n3 !== $n2){                                  //If a new password does not match password confirmation 
	header('Location:http://localhost/online_library/change_pass.php?re=1');
	exit();
}

$sql = "UPDATE users SET the_password='$n3' where the_user='$the_user' ";
$result = $conn->query($sql);                          //The password in the database is modified
header('Location:http://localhost/online_library/menu.php');
?>