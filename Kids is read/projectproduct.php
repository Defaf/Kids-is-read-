<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php include "projectheader.php"; ?>
</head>
<body>	
			<section class="main">
				<div class="content">
					<section class="bar">
						<div class="bar-frame">
							<ul class="breadcrumbs">
								<li><a href="index.html">Home</a></li>
								<li>Product results</li>
							</ul>
						</div>
					</section>
					<div class="top-bar">
						<form class="form-sort" action="#">
							<fieldset>
								<div class="row">
									<label for="sort">Sort by :</label>
									<select id="sort">
										<option>price</option>
										<option>price</option>
									</select>
								</div>
								<div class="row">
									<label for="page">Products per page:</label>
									<select id="page">
										<option>8</option>
										<option>8</option>
									</select>
								</div>
								<div class="row">
									<label for="page">Type of product:</label>
									<select id="page">
										<option>Boxed</option>
										<option>Boxed</option>
									</select>
								</div>
							</fieldset>
						</form>
						<ul class="paging">
							<li class="prev"><a href="#">prev</a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next"><a href="#">next</a></li>
						</ul>
					</div>
					<ul class="item-product">
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_05.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$65.00</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_06.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$49.99</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_07.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$20.00</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_08.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$59.99</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_09.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$15.99</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_10.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$9.99</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="product.html"><img src="images/pic_11.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$80.00</span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
									<a href="#"><img src="images/pic_12.png"  alt="" /></a>
								</div>
								<span class="name"><a href="product.html">Lorem ipsum dolor</a></span>
								<span>$49.99</span>
							</div>
						</li>
					</ul>
					<div class="top-bar top-bar-add">
						<ul class="paging">
							<li class="prev"><a href="#">prev</a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next"><a href="#">next</a></li>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<?php include "projectfooter.php"; ?>
</body>
</html>