<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<center>

    <?php
    include 'css.css';
    session_start();
    session_unset();
	?>

<div style="background: #778899; width: 100%; height: 900px;">
    <br><br>
    <h2>تسجيل الدخول</h2>   <?php                                //Data written by user goes to test file ?>
        <form style="width: 500px;" action="access/test.php" method="post">
        	<div>
        		<label class="f1">اسم المستخدم</label>
        		<input class="f2" type="" name="n1">
        	</div><br>
        	<div>
        		<label class="f1">كلمة المرور</label>
        		<input class="f2" type="password" name="n2">
        	</div>
        	<div>
        		<input style="width:100%;" type="submit" name="" value="موافق">
        	</div>	
        </form>
<a href="sign_up.php?re=">ليس لدي حساب</a>	
</div>
</center>
</body>
</html>