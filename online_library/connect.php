<?php  //Connectivity between web and database.
$servername = 'localhost';
$username = 'rout';
$password = '';
$dbname = 'online_library';
$conn=new mysqli($servername,$username,$password,$dbname);
$conn->set_charset('utf8');

?>