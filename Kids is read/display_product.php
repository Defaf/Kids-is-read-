<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <?php 
    include 'confing.php';
    include "projectheader.php";
	#session_start();
	 ?>
</head>
<?php 
$book_id=$_GET['book'];
$query = "SELECT * FROM products WHERE id ={$book_id}";
       $result = mysqli_query($comm,$query);
       /* mysqli_stmt_execute($result);*/
  
?>
<body>		
	<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="index.html">Home</a></li>
								<li>Product page</li>
							</ul>
						</div>
					</section>
					<?php 
					while ($row =mysqli_fetch_assoc($result)){
						?>
					<div class="details-info">
						<div class="slid_box" style="width: 48%;">
							<div style="max-width: 100%;" class="bx-wrapper">
							<div style="width: 100%; overflow: hidden; position: relative; height: 400px;" class="bx-viewport">
							<ul class="bxslider">
							
							  <li><img src="<?php echo $row["photo"]?>" /></li>
							  
							</ul>
							</div>
							</div>
						</div>
						<div class="description">
							<div class="head">
								
								<h1 class="title"><?php echo $row["name"]?></h1>
								
								<h2><?php echo "{$row["price"]}&#36;"?></h2>
							</div>
							<div id="tabs">
								<ul>
									<li><a href="#tabs-1">Product information</a></li>
									
								</ul>
								<div id="tabs-1"><?php echo  $row["bookDescription"]?></div>
							</div>
								<?php }?>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</section>
		</div>
		<?php include "projectfooter.php"; ?>
</body>
</html>