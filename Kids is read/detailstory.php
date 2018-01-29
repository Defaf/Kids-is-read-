<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php include"projectheader.php";
	      include"confing.php";?>
</head>
<body>
			<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="projectHome.php">Home</a></li>
								<li><a href="storytable.php">Stories</a></li>
								<li>Story Details</li>
							</ul>
						</div>
					</section>
					<div class="details-info">
						<div class="slid_box">
							<ul class="bxslider">
							  <li><?php echo '<img src="sharequery.php?DrowID=1" width="500" hight="1500">';?></li>
							</ul>
							<?php
$d='';
$sql="SELECT users.Username,sharestor.names,sharestor.id,sharestor.see FROM users 
INNER JOIN sharestor ON users.UserID=sharestor.userID";
$result=mysqli_query($comm,$sql);
//$result2=mysqli_query($con,$sql2);
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){
	if($row['see']==2){
       $d=$row['id'];
echo
						'</div>
						<div class="description">
							<div class="head">
								<h1 class="title">Story Name: '.$row["names"].'</h1><!--story name-->
								<h2>Writer Name: '.$row["Username"].'</h2><!--writer name-->
								<h3>Click To Read Story: '."<a href='af.php?id=$d'>READ</a>".'</h3><!--link read-->
							</div>
							</div>
							</div>
							</div>';

			$sql2="SELECT sharestor.names,commments.comm,commments.comID,commments.seec FROM sharestor
			 INNER JOIN commments ON sharestor.id=commments.FileID WHERE commments.FileID=$d";

            $sql4="SELECT users.Username,users.UserID,commments.comm,commments.comID,commments.seec FROM users 
            INNER JOIN commments ON users.UserID=commments.ID";

	$result2=mysqli_query($comm,$sql2);
	$result4=mysqli_query($comm,$sql4);
	if(mysqli_num_rows($result2)){
		if(mysqli_num_rows($result4)){
	   while($rows3=mysqli_fetch_assoc($result2)){
	   	if($rows3['seec']==2){
	   	 while($rows4=mysqli_fetch_assoc($result4)){
	   	echo
			'<div id="tabs">
			    <ul>
					<li><a href="#tabs-1">Views Comments</a></li>
					<li><a href="#tabs-2">Add Comments</a></li>
				    </ul>
					<div id="tabs-1">'.$rows4["Username"]." :".$rows3["comm"].'</div>';
	   	break;
}//while
	   }//if=2
	}//whilefirst
	 }//if
	   }//big if
	   echo
								'<div id="tabs-2">
								<form class="form-newsletter" method="POST">
                                      Comment:<br>
                                <input type="text" name="comment" >
                                <button type="submit" name ="submitcomm" value="submitcomm">comment</button>
                               </div>
                                  </form>
                     </div>';
	   if(isset($_POST['submitcomm'])){ 
	global $d;
$comment=$_POST['comment'];
	 $sql="INSERT INTO commments (comm,FileID) VALUES('$comment',$d) ";
 if(mysqli_query($comm,$sql) )
{
$count= mysqli_affected_rows($comm);
echo "<img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Adding A New Comment Has Been Done Successfully:')</p>";
}
else{
   echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Adding Comment Is Failed!!</p>";
}//end else 
}//end if form button

			
								}//end if small
							}//end while
						}//end if 
						 else{
          	               echo "dfdf";
                             }
						echo
                        '</div>
							</div><!-- tabs-->
						</div><!-- description-->
				
						<div class="clear"></div>
					</div><!--detail info -->
				</div><!--content-->
			</section>
		</div>';?>
		<br><br><br><br>
</body>
<?php include"projectfooter.php";?>
</html>