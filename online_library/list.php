<!DOCTYPE html>
<html>
<head>
	
</head>

<body>

	<?php          //We call a file 
	include 'css.css';
	?>

<div style="width: 100%; position: fixed; top: 0;">
<ul>
	<li><a href="index.php">الرئيسية</a></li>
	<li><a href="about.php">حول</a></li>
	<li><a href="index.php.#d1">فريق العمل</a></li>
	
<?php
session_start();
if (!isset($_SESSION['online_library'])) {       //Make sure if you don't log in these icons will be placed
				
?>
        <li><a href="nobook.php">الكتب</a></li>
	    <li style="float: right;"><a href="login.php">تسجيل الدخول</a></li>
	    
<?php
        }
?>
<?php
if (isset($_SESSION['online_library'])) {    //Check if login these icons are placed
	$n1=$_SESSION['online_library'];
	include 'connect.php';
	$sql="SELECT * FROM users WHERE the_user = '$n1' ";  //Searches for username in the database
    $result = $conn->query($sql);	
    while($row = $result->fetch_assoc()){       
    $the_user=$row['the_user'];                 //Printing Username
   	}	
?>
        <li><a href="book.php">الكتب</a></li>
	    <li style="float: right;"><a href="login.php">تسجيل خروج</a></li>
	    <li style="float: right; color: green; font-size: 25px;"><br><?php echo $the_user; ?></a></li>
	    <li style="float: right;"><a href="menu.php"><img src="img/lines.png" style="width: 20px; height: 20px;"></a></li>
<?php
}
?>
</ul>
</div>	


</body>
</html>