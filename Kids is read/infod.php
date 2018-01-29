<html>
<head>
<?php include "projectheader.php"; 
	      include "confing.php";?>
</head>
<body>
	<?php 
	$sql="SELECT users.Username,sharedrow.DrowName,sharedrow.DrowID,sharedrow.content FROM users 
          INNER JOIN sharedrow ON users.UserID=sharedrow.userID";
          $result=mysqli_query($comm,$sql);
          echo "<table>";
      if(mysqli_num_rows($result)){
         while($row=mysqli_fetch_assoc($result)){
         	$d=$row['DrowID'];
         	echo          
				'<span class="name">'."Name Of Story:".$row['DrowName'].'</span>'.
				'<span>'."Name Of writer:". $row['Username'] .'</span>'.
				'<span>'.'<img src="sharequery.php?DrowID=$d" width="200" hight="100">'.'</span>'.
				'</div>'.
				'</li>';
				'<li>'.
				'<div class="item">'.
				'<div class="image">'.
				'</div>'.    
					'</div>'.
						'</li>';
					}//end while
					}//end if


	?>
	
			</section>
		</div>
   <?php include "projectfooter.php"; ?> 
</body>
</html>