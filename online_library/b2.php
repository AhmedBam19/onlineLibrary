<!DOCTYPE html>
<html>
<head>
	<title>الاشباح المشاغبة</title>
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
$contact = new Contact("الاشباح المشاغبة","راجي عنايت","العربية",1995,"دار الشروق",112,"في بعض الأحيان كانت أجراس التليفونات تدق جميعها في نفس الوقت، دون أن يكون هناك أى متكلم على الجانب الآخر منها. وخلال أحاديث العمل التليفونية، كان المتحدث يسمع أصوات طقطقة وتكتكة تشتت فكره. 

قدم مدیر المكتب شكوی لی شرکة التلیفونات. فأوفدت الشركة بعض مهندسيها لإصلاح الخلل إلا أنهم لم يكتشفوا أى خلل في الأجهزة أو التوصيلات. وكل ما قالوه عند انصرافهم هو أن الخطوط التليفونية للمكتب في أحسن حال.
");

echo $contact->getInfo();

?>
	</center>
	</div>
    <div>
    	<embed src="book/b2.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>