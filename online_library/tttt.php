<<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<?php

require_once 'Contact.php';
$contact = new Contact("","","",,"",,"");

echo $contact->getInfo();

?>
</body>
</html>
