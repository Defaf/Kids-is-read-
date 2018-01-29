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
								<li>Cart</li>
							</ul>
						</div>
					</section>

					<table class="list_table">
						<tr>
							<td class="braun price"></td>
							<td class="braun price"></td>
							<td class="braun price"></td>
							<td class="braun price">Book Discription</td>
							<td class="braun price"></td>
							<td class="braun price"></td>
							<td class="braun price"></td>
						</tr>
							</td>
							<td class="white two"></td>
							<td class="white two"></td>
							<td class="white two"></td>
							<td class="white two"></td>
							<td class="white two"></td>
							<td class="white two"></td>
						</tr>
					</table>
<?php
	$sql = "SELECT * FROM  artwork ORDER BY ArtWork " ;
	$re = mysqli_query($comm,$sql);
	if(mysqli_num_rows($re)){
		while($rows=mysqli_fetch_assoc($re)){
			echo "<tr>";
			echo "<td>". $rows['ArtWork']."</td>";
			echo "<td>". $rows['ArtName']."</td>";
			echo "<td>". $rows['ArtistID'] ."</td>";
			echo "<td>". $rows['Year']."</td>";
		    echo "</tr>";
		}
	}else{ 
			echo "no data has been entered .. ! ";
		}
?>
				</ul>
					<div class="box_sub_total">
						<h4>Subtotal: $380.50</h4>
						<p>+ shippment: $9.99</p>
						<h2>Total to pay: $80.99</h2>
						<a class="btn btn_finalize" href="#">Finalize and pay</a>
					</div>
				</div>
			</section>
		</div>
		<?php include "projectfooter.php"; ?>
</body>
</html>