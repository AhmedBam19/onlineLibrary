<!DOCTYPE html>
<html>
<head>
	<title>الأساطير السومرية</title>
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
$contact = new Contact("الأساطير الومرية","الحسيني الحسيني معدي","العربية",2012,"كنوز",256,"اساطير الطوفان _اسطورى انكي _اساطير الخلق السومرية _ملحمة كلكامش _اسطورة انانا وديموزي");

echo $contact->getInfo();

?>
	</center>
	</div>
    <div>
    	<embed src="book/b3.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>