<?php
include ('confing.php');
$Id=intval($_GET['id']);
if($Id){
$sql="SELECT * FROM sharestor where id='$Id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

//$d=$row['id'];


$file =$row['content'] ;
$filename = $row['FileName'];
 
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
 
@readfile($file);
}
?>