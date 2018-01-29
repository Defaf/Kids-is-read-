<?php
// connect to database
include 'db_connect.php';
?>
<html lang="en">
<title></title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<title>KidsRead</title>
	<link rel="stylesheet" href="css/fancySelect.css" />
	<link rel="stylesheet" href="css/uniform.css" />
	<link rel="stylesheet" href="css/jquery.bxslider.css" />
	<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/all.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="css/screen.css" />
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<div class="header-holder">
				<header id="header">
					<span class="logo"><a href="index.html">Bambino</a></span>
					<div class="tools-nav_holder">
						<ul class="tools-nav">
							<li><a href="#">My account</a></li>
							<li class="login"><a href="#">Logout</a></li>
						</ul>
						<div class="checkout">
							<?php
								// count products in cart
								$cart_count=count($_SESSION['cart_items']);
							?>   
							<span><?php echo $cart_count; ?> Cart </span>
							<a href="cart.php" class="btn btn_checkout" <?php echo $cart_count==0? "disabled" : ""; ?>>view carts</a>
						</div>
							
					</div>
					<div class="clear"></div>
					<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul class="navi">
							<li class="searc_li" >
								<div  class="ul_search li">
									<a class="search" href="#"><span>search</span></a>
									<form method="get" class="searchform" action="#">
										<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
										<input type="submit" class="submit" value=""  />
										<div class="clear"></div>
									</form>
								</div >
							</li>
							<li><a href="projectHome.php">Home</a></li>
							<li><a href="productt.php">Books</a></li>
						</ul>
						<div  class="ul_search">
							<a class="search" href="#"><span>search</span></a>
							<form method="get" class="searchform" action="#">
								<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
								<input type="submit" class="submit" value=""  />
							</form>
						</div >
					</nav>
				</header>
			</div>
</body>
</html>