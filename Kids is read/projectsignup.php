<html>
<title></title>
<head><link rel="stylesheet" href="css/all.css" /></head>
    <body>
	<?php include "confing.php" ; ?>
	<div class="block-advice">
      <div class="advice-holder">
        <!--<p>Join our newsletter</p>-->
        <form class="form-newsletter" method="POST">
        	 <table class="list_table" >
        	 	 <fieldset>
        	 <div class="entry"><br>
                        <center><h2><b>Add A New Book To DataBase</b></h2></center>
                          <div class="text">
                        <center><p><b>Please Fill The Following Form To Add A New Book To DataBase</b></p></center>
    	<tr><td><input type="text" name="u" placeholder="Enter Username" required="required" /></td></tr>
        <tr><td><input type="password" name="p" placeholder="Enter Password" required="required" /></td></tr>
        <tr><td><input type="text" name="ph" placeholder="Enter Phone" required="required" /></td></tr>
        <tr><td><input type="email" name="e" placeholder="Enter Email" required="required" /></td></tr></td></tr>
        <tr><td><input type="text" name="c" placeholder="Enter City" required="required" /></td></tr>
        <tr><td><input type="text" name="add" placeholder="Enter Address" required="required" /></td></tr>
        <tr><td><br><button type="submit"name="SUBMIT" value="SUBMIT"class="btn btn-primary btn-block btn-large">SUBMIT</button></td></tr>
                         </div>
            </div>
                </fieldset>
           </table>
       </form>
      </div>
       <?php
	if(isset($_POST['SUBMIT'])){
		$Uname= mysqli_real_escape_string ($comm,$_POST['u']);
        #md5 function تستخدم للتشفير تخلي كلمة السر برموز 
        #md5($_POST['password']);
        #SH1(md5(password))
        $Upass= mysqli_real_escape_string ($comm,$_POST['p']); 
        $Upho = $_POST['ph'];
        $Umail= $_POST['e'];
        $Ucit = $_POST['c'];
        $Uadd =$_POST['add'];
        #$Uremem= $_POST['r'];
        #first param names in the DB second param the varible that i make it 
        $sq = "INSERT INTO users (Username , UserPassword, UserPhone , UserEmail , UserCity , UserAddress ) 
                          VALUES ('$Uname' ,   '$Upass'  ,   $Upho   , '$Umail'  ,  '$Ucit' ,  '$Uadd'    )" ;
        	if(mysqli_query($comm,$sq)){
        		$count=mysqli_affected_rows($comm);
        		echo "Insert ".$count ." record";
        	}else{
               # die("<font style="color)
        		echo "Sorry you didn't insert anthing..!";
        	}
	}
    #varchar + string should put in in '' 
?>
    </div> 
</body>
</html>