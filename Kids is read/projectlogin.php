<html>
<title></title>
<head>
	<link rel="stylesheet" href="css/all.css" /></head>
<body>
	<?php include "confing.php" ;
	      include "pro.php";
	if(logdein() == TRUE){
		header("location:userarea.php");// i need it in next every page 
	}
	if(isset($_POST['login'])){
		//get data 
	$Uname = $_POST['u'];
	$Upass = $_POST['p'];
	#$Uremem = $_POST['r'];
	if(!empty($Uname) && !empty($Upass)){
		$sql = "SELECT * FROM  users WHERE Username = '$Uname' ";
	$re = mysqli_query($comm,$sql);//perform query
	while($rows=mysqli_fetch_assoc($re)){
		$DB_pass = $rows['UserPassword'];
		if($DB_pass == $Upass){
			$login = TRUE ; 
		}else {
			$login = FALSE ;
		}
		if($login == TRUE){
			if(isset($Uremem)){
				//first arg ay name youwant to put it 
				setcookie('Username' ,$Uname , time()+3600 ); 
			}else{
				//if he didn't put remember me 
				$_SESSION['Username'] = $Uname ;
			    header("location:userarea.php");
			    exit();
			}
		}else {
			echo "not correct..";
		}
	}//end while 
}else {
	echo "PLEASE ENTER USER NAME OR PASSWORD..!";
}
}
	 ?>
	 <br><br><br><br><br>
	 <center>
        <form action="projectlogin.php" class="form-newsletter" method="POST">
        	 <table class="list_table" >
        	 	 <fieldset>
        	 <div class="entry"><br>
                       <h2><b>LOG IN</b></h2>
                          <div class="text">
                        <p><b>To Access To Your Account And </b></p>
    	                <tr><td><input type="text" name="u" placeholder="Enter Username" required="required" /></td></tr>
                        <tr><td><input type="password" name="p" placeholder="Enter Password" required="required" /></td></tr>

                        <tr><td><button type="submit" name ="login" value="login" >LOG IN</button><br>
                         <a href="REGESTERPROGECTLAST.php">New Register</a></td>
                        </tr>

                         </div>

            </div>
                </fieldset>
           </table>
       </form>
       </center>
       <br><br><br><br><br><br><br><br><br>
</body>
</html>