<html>
<head><link rel="stylesheet" href="css/all.css" /></head>
<body>
	<?php
	include "confing.php" ; 
  include "pro.php";
	if(!logdein()){
		header("location:projectlogin.php");
	}
	?>
  <br><br><br><br><br><br><br><br>
  <center>
     <form  action="logout.php" class="form-newsletter">
        	 <table class="list_table" >
        	 	 <fieldset>
        	 <div class="entry"><br>
                        <center><h2><b>WELCOME</b></h2></center>
                          <div class="text">
                        <center><p><b><?php echo $_SESSION['Username']."<br>"; ?> Have a nice time</b></p></center>
                        <a href="projectHome.php">go to home page</a>
                        <tr><td> <br><button type="submit" name="LOG OUT" value="LOG OUT" />LOG OUT</button></td></tr>
                          </div>
            </div>
                </fieldset>
           </table>
         </form>
           </center>
           <br><br><br><br><br><br><br><br><br><br>
</body>
</html>