<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php include "projectheader.php";
	       include "confing.php" ; ?>
</head>
<body>
	<?php 
$query = "SELECT * FROM products ORDER BY name";
$result = mysqli_query($comm,$query);
?>
			<section class="main">
				<div class="content">
					<div class="box_images">
						<a href="#"><img src="images/Header.gif" alt="" ></a>
					</div>
					<ul class="box_image_list">
						<li><a href="Projectdraw.php"><img src="images/draw2.gif" alt="drawarea" ></a></li>
						<li><a href="home.php"><img src="images/pic_0admin.png" alt="adminarea" ></a></li>
					</ul>
					<div class="clear"></div>
					<section class="container">
						<div class="bottom-slider">
							<a href="#" class="btn-left"></a>
							<div class="slides">
								<p>Last added products</p>
								<ul class="item-list">
								<?php 
								 while ($row=mysqli_fetch_assoc($result)){
								 	?>
									<li>
										<div class="item">
											<div class="image">
											<a href="display_product.php?book=<?php echo $row["id"]?>"><img src="<?php echo $row["photo"];?>"  alt="" />
												<div class="hover">
													<p><?php echo  $row["bookDescription"]?></p>
													<strong><?php echo "{$row["BookPrice"]}&#36;"?></strong>
												</div></a>
											</div>
										</div>
									</li>
								<?php }?>
								</ul>
							</div>
							<a href="#" class="btn-right"></a>
						</div>
					</section>
					<div class="block-advice">
						<div class="advice-holder">
							<p>Complaints </p>
						</div>
						<form  class="form-newsletter" method="POST">
							<fieldset>
								<input type="text" name="text"  />
								<button class="btn black normal" type="submit"  name="send" value="send" />Send</button>
							</fieldset>
						</form>
					</div>
					<a href="sharebook.php">
					<div class="banner_box">
						<p>Take a Part in Kids Read Community </p>
						<span >Sharing Your Story To Publish Your Book</span>
					</div></a>
					<div class="clear"></div>
				</div>
			</section>
			<?php
		 include 'regester.php';
         if(isset($_POST['send'])){
         $TXT=$_POST['text'];
          writ($TXT);
          }
		?>
		</div>
		<?php include "projectfooter.php"; ?>
</body>
</html>