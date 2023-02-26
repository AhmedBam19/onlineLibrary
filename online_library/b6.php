<!DOCTYPE html>
<html>
<head>
	<title>حضارة العرب في الأندلس</title>
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
$contact = new Contact("حضارة العرب في الأندلس","عبدالرحمن البرقوقي","العربية",2020,"مؤسسو هنداوي",106,
	"هذا كتاب وضعته قديما وأسميته حضارة العرب في الأندلس ولقد أشرب قلبي مذ طراءة العمر وريعان الصبى وجن النشاط حب التاريخ الإسلامي عامة وتاريخ هذا الفرع الأندلسي. ");

echo $contact->getInfo();

    ?>
	</center>
	</div>
    <div>
    	<embed src="book/b6.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>