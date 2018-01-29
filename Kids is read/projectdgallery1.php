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
									
                                       echo '<img src="sharequery.php?DrowID=1" width="100" hight="100">';
                                    ?>			
                                </div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									
                                       echo '<img src="sharequery.php?DrowID=3" width="100" hight="100">';
                                    ?>			
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									
                                       echo '<img src="sharequery.php?DrowID=4" width="100" hight="100">';
                                    ?>			
								</div>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<?php
									
                                       echo '<img src="sharequery.php?DrowID=6" width="100" hight="100">';
                                    ?>			
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