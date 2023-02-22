<!DOCTYPE html>
<html>
<head>
	<title>تغير كلمة المرور</title>
</head>
<body>
<center>

    <?php
    include 'css.css';
    include 'list.php';
    
	?>
    
<div style="background: #778899; width: 100%; height: 900px;">
    <br><br>
    <h2>تغير كلمة المرور</h2>
        <form style="width: 500px;" action="access/change.php" method="post">
            <div>
                <?php 
                   $re=$_GET['re'];                     //If the user enters wrong information
                   if ($re==1) {
                      echo "كلمة المرور القديمة خاطئه";   
                   }
                   if ($re==2) {
                      echo "كلمة المرور غير متطابقة"; 
                   }
                   
                 ?>
            </div>
        	<div>       <?php                                   //Data written by user goes to change file ?>   
        		<label class="f1">كلمة المرور القديمة</label>
        		<input class="f2" type="" name="n1">
        	</div><br>
        	<div>
        		<label class="f1">كلمة المرور الجديده</label>
        		<input class="f2" type="" name="n2">
        	</div>
            <div>
                <label class="f1">تأكيد كلمة المرور</label>
                <input class="f2" type="" name="n3">
            </div>
        	<div>
        		<input style="width:100%;" type="submit" name="" value="موافق">
        	</div>	
            
        </form>
</div>
</center>
</body>
</html>