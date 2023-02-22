<!DOCTYPE html>
<html>
<head>
	<title>تسجيل مستخدم جديد</title>
</head>

<body>
<center>

    <?php
    include 'css.css';
	include 'list.php';
	$re=$_GET['re'];
	
	?>

<div style="background: #778899; width: 100%; height: 900px;">
    <br><br><br><br>
   
    <h2>تسجيل مسخدم جديد</h2>
        <form style="width: 500px;" method="get" action="access/add_user.php">
        	<div>
                <?php                               //If the user enters wrong information
                   $re=$_GET['re'];
                   if ($re==1) {
                      echo "جرب اسم مستخدم ثاني"; 
                      
                   }
                   if ($re==2) {
                      echo "كلمة المرور غير متطابقين"; 
                   }
                 ?>
            </div>
        	<div> <?php                                        //Data written by user goes to add user file   ?>
        		<label class="f1">اسم المستخدم</label>
        		<input class="f2" type="" name="the_user" placeholder="اسم المستخدم">
        	</div><br>
        	<div>
        		<label class="f1">كلمة المرور</label>
        		<input class="f2" type="password" name="the_password" placeholder="كلمة المرور">
        	</div><br>
        	<div>
        		<label class="f1">اعادة كلمة المرور</label>
        		<input class="f2" type="password" name="reset_password" placeholder="اعادة كلمة المرور">
        	</div>
        	<div>
        		<input style="width:100%;" type="submit" name="" value="موافق">
        	</div>	
        </form>	
</div>
</center>
</body>
</html>