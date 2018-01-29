<html>
    <head>
        <?php include "confing.php";
              include "pro.php" ;?>
        <title>Control Board</title>
        <link rel="stylesheet" type="text/css"href="css/all.css" />  
    <style type="text/css">
    body{
        background-image: url("images/bg_body.gif");
        }
    </style>
    </head>
    <body>
        <?php
 if(isset($_POST['submit'])){
        $password=mysqli_real_escape_string($comm,$_POST['Pass']);
    if(logdein()){
        echo  $password;
        $username=$_SESSION['Username'];
            if(!empty($password)) {
        $sql="SELECT * FROM  users WHERE AD_or_Us=1 AND  Username='$username'";
        $result=mysqli_query($comm, $sql);
        $row=mysqli_fetch_assoc($result);
        $PASSWORD=$row['UserPassword'];
        $Admin=$row['AD_or_Us'];
        echo $PASSWORD;
        echo "your admin".$Admin;
        if($password==$PASSWORD){
            $loginok=TRUE;
           }else{
            $loginok=FALSE;
           }  
        if($loginok==TRUE && $Admin==1)
        {
            header('location:index.php');
        }else
            echo "<p style='color:red;' >Password Is Not Same Or You Are Not Admin</p>";
        }
    else{
        echo "<p style='color:red;' > Enter password</p>";
        }
    }
    else{
        echo "<p style='color:red;' > regester </p>";
    }}
        ?>
    	<br><br><br><br><br><br><br><br><br><br><br>
        <center><div class="entry">
           <h2>Welcome to Admin Controller</h2>
			<div class="text">
				<center><p >Please Enter Your PassWord To Check Your Identity.. </p></center>
		    </div>
		</div>
				<form action="home.php" class="form-newsletter" method="POST">
							<fieldset>
                                <input type="password" name="Pass" placeholder="Enter Your Password"/><br>
                                <br><br><button type="submit" name="submit" value="submit" />Check</button>
							</fieldset>
						</form>
			</center>
            <br><br><br><br><br><br><br><br><br>
    </body>
</html>
