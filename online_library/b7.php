<!DOCTYPE html>
<html>
<head>
	<title>الطباعة الاثلاثية الأبعاد</title>
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
$contact = new Contact("الطابعة الثلاثية الأبعاد","هود ليبسن وميلبا كيرمان","العربية",2018,"مؤسسة هنداوي",346,"تحوِّلُ الطابِعةُ الثُّلاثِيةُ الأَبعَادِ المَعلُوماتِ الرَّقمِيةَ إِلى أَجسَامٍ مَادِّية، بِتَنفِيذِ تَعلِيماتٍ مِن مِلفِّ تَصمِيمٍ إِلِكترونيٍّ أو «مُخطَّط». وباتِّباعِ إِرشاداتِ مِلفِّ التَّصمِيم، وباستِخدامِ بَعضِ المَوادِّ الخامِ البَسِيطَة، يَتَحوَّلُ المُخَطَّطُ إِلى مُجسَّم.");

echo $contact->getInfo();

?>
	</center>
	</div>
    <div>
    	<embed src="book/b7.pdf" style="float: left; width: 1000px; height: 800px;"></embed>
    </div>
</div>

</body>
</html>