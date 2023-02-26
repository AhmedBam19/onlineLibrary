<!DOCTYPE html>
<html>
<head>
	<title>قصص من الحياة</title>
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
$contact = new Contact("قصص من الحياة","علي الطنطاوي","العربية",2011,"دار المنارة",304,
	"هذه قصصٌ من الحياة، سماها مؤلفها كذلك لأن الحياة ألّفتها. وهل تؤلف الحياة قصصاً؟ نعم (كما يقول في المقدمة): إن الحياة تؤلف قصصاً يعجز أبرع أهل الفن عن توهُّم مثلها، ولكنها لا تذيع مؤلفاتها ولا تعلن عنها، فتبقى مخطوطة مخبوءة لا يصل إليها ولا يقرؤها إلا رجل حديد البصر، طويل اليد، ذو جَلَدٍ على البحث وصبرٍ على التنقيب. ولست ذلك الرجل، ولا أنا من عشّاق المخطوطات وروّاد المباحث، ");

echo $contact->getInfo();

?>
	</center>
	</div>
    <div>
    	<embed src="book/b4.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>