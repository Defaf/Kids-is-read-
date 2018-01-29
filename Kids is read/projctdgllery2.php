<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php include "projectheader.php"; 
	      include "confing.php";?>
</head>
<body>
			<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="projectHome.php">Home</a></li>
								<li>Draw Gallery</li>
							</ul>
						</div>
					</section>
					<div class="entry">
					<center><h2>Draw Gallery</h2></center>
				</div><br>

					<ul class="item-product">
						<li>
							<div class="item">
								<div class="image">
									<?php
									$sql4="SELECT users.Username,users.UserID,sharedrow.DrowID,sharedrow.DrowName FROM 
									users INNER JOIN sharedrow ON users.UserID=sharedrow.DrowID";
								$result4=mysqli_query($comm,$sql4);
	               				if(mysqli_num_rows($result4)){
								   	 $rows4=mysqli_fetch_assoc($result4);
                                       echo '<img src="sharequery.php?DrowID=1" width="100" hight="100">'.'<br>'.
                                       "<span>".$rows4['DrowName']."</span>";
                                   } ?>			
                                </div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									$sql="SELECT users.Username,users.UserID,sharedrow.DrowID,sharedrow.DrowName FROM 
									users INNER JOIN sharedrow ON users.UserID=sharedrow.DrowID";
								$result=mysqli_query($comm,$sql);
	               				if(mysqli_num_rows($result)){
								   	 $rows4=mysqli_fetch_assoc($result);
                                       echo '<img src="sharequery.php?DrowID=3" width="100" hight="100">'.'<br>'.
                                       "<span>".$rows4['DrowName']."</span>";
                                   } ?>			
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									$sql1="SELECT users.Username,users.UserID,sharedrow.DrowID,sharedrow.DrowName FROM 
									users INNER JOIN sharedrow ON users.UserID=sharedrow.DrowID";

								$result1=mysqli_query($comm,$sql1);
	
	               				if(mysqli_num_rows($result1)){
							  
										   
								   	 $rows4=mysqli_fetch_assoc($result1);

                                       echo '<img src="sharequery.php?DrowID=4" width="100" hight="100">'.'<br>'.
                                       "<span>".$rows4['DrowName']."</span>";
                                   } ?>			
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									$sql2="SELECT users.Username,users.UserID,sharedrow.DrowID,sharedrow.DrowName FROM 
									users INNER JOIN sharedrow ON users.UserID=sharedrow.DrowID";

								$result2=mysqli_query($comm,$sql2);
	               				if(mysqli_num_rows($result2)){
								   	 $rows4=mysqli_fetch_assoc($result2);
                                       echo '<img src="sharequery.php?DrowID=6" width="100" hight="100">'.'<br>'.
                                       "<span>".$rows4['DrowName']."</span>";
                                   } ?>			
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
                                       echo '<img src="sharequery.php?DrowID=8" width="100" hight="100">';
                                    ?>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
                                       echo '<img src="sharequery.php?DrowID=9" width="100" hight="100">';
                                    ?>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
                                       echo '<img src="sharequery.php?DrowID=10" width="100" hight="100">';
                                    ?>
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
                                       echo '<img src="sharequery.php?DrowID=11" width="100" hight="100">';
                                    ?>
								</div>
							</div>
						</li>
					</ul>
					
					<div class="top-bar top-bar-add">
						<ul class="paging">
							<li class="prev"><a href="#">prev</a></li>
							<li class="active"><a href="projectdgallery1.php">1</a></li>
							<li class="next"><a href="#">next</a></li>
						</ul>
					</div>
				</div>
			</section>
		</div>
</body>
<?php include "projectfooter.php"; ?>
</html>