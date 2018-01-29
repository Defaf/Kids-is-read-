<?php include ('confing.php');?>
<html>
<title></title>
<head><?php include "projectheader.php"; ?>
	<link rel="stylesheet" href="css/all.css" />
</head>
<body>
	
<?php
$d='';
$sql="SELECT users.Username,sharestor.names,sharestor.id,sharestor.see FROM users 
INNER JOIN sharestor ON users.UserID=sharestor.userID";
$result=mysqli_query($comm,$sql);
//$result2=mysqli_query($con,$sql2);
echo "<table class='list_table'>";
if(mysqli_num_rows($result)){
while($row=mysqli_fetch_assoc($result)){

	if($row['see']==2){
$d=$row['id'];
	
	echo "<tr><td class='white two'>Name Of Story:".$row['names']."</td></tr>
	<tr><td class='white two'>Name Of writer:". $row['Username'] ."</td></tr>
	<tr><td class='white two'><a href='af.php?id=$d'>READ</a></td></tr>
	<tr><td class='white four'>";
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
	   	echo " <tr><td class='white tow'> " .$rows4['Username']." :".$rows3['comm']."</td></tr>";
	   	break;
}//while
	   }//if=2
	}//whilefirst
	 }//if
	   }//big if
echo"<tr><td><form class='form-newsletter' method='POST'>
Comment:<br>
<input type='text' name='comment' >
<button type='submit' name ='submitcomm' value='submitcomm' class='btn btn-primary btn-block btn-large'>comment</button>
                         </div>
</form></tr></td>
                     </div>
</form>
	</table>";

if(isset($_POST['submitcomm']))
{ 
	global $d;
$comment=$_POST['comment'];
	 $sql="INSERT INTO commments (comm,FileID) VALUES('$comment',$d) ";
 if(mysqli_query($comm,$sql) )
{
$count= mysqli_affected_rows($comm);
echo $count ."successfully " ;
}
else{
   echo "erorr";
}//end else 
}//end if form button



     }//end if see up
     } //end while up
     }//end if result up
          else{
          	echo "dfdf";
          }
			//<td class="white four">$80.50
			//<td class="white last"><div class="row"><a class="btn-delete" href="#">delete</a></div></td>
		
		//</tr>


 
?>
</table>
</body>
<?php include "projectfooter.php"; ?>
</html>
