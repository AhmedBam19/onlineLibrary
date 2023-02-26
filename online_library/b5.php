<!DOCTYPE html>
<html>
<head>
	<title>الف ليلة وليلة</title>
</head>
<body>
	 <?php
	  include 'list.php'; 
	?>

<center>
	<br><br>

<div style="background:#5F9EA0 ; width: 100%; height: 100%;">
<center><h2><h2></center>
	<div style="text-align:right; float: right;width: 500px;font-size:24px;">
		<br><br><br><br><br><br><br>
		<center>
		<?php

require_once 'Contact.php';
$contact = new Contact("الف ليلة وليلة","اميرة عبدالصادق","العربية",2011,"مؤسسة هنداوي",70,"الف ليلة وليلة هو كتاب يتضمّن مجموعة من القصص التي وردت في غرب وجنوب آسيا بالإضافة إلى الحكايات الشعبية التي جُمِعت وتُرجمت إلى العربية خلال العصر الذهبي للإسلام.");

echo $contact->getInfo();

?>
	</center>
	</div>
    <div>
    	<embed src="book/b5.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>