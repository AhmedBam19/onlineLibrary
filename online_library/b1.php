<!DOCTYPE html>
<html>
<head>
	<title>فن اللامبالاة</title>
</head>
<body>
	 <?php
	  include 'list.php';
	  ?>

<center>
	<br><br>

<div style="background:#5F9EA0 ; width: 100%; height: 860px;">
<center><h2><h2></center>
	<div style="text-align:right; float: right;width: 500px;font-size:24px;">
	<br><br><br><br><br><br><br>
		<center>	
<?php

require_once 'Contact.php';
$contact = new Contact("فن اللامبالاة","مارك مانسون","العربية",2016,"منشورات الرمل",272,
	"يقول مانسون : فلنكن صادقين، الشيء سيء وعلينا أن نتعايش مع هذا ولا نتهرب من الحقائق ولا نغلّفها بالسكّر، بل نقولها كما هي جرعة من الحقيقة الفجّة الصادقة المنعشة هي ما ينقصنا اليوم. يتناول الكتاب في فصوله كيفية تغلب الإنسان على عقبات حياته بطريقة منطقية بعيداً عن التهرب والخوف منها. ");
echo $contact->getInfo();

?>
</center>
	</div>
    <div>
    	<embed src="book/b1.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>