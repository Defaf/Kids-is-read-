<?php
   include ('confing.php');
   $Id=intval($_GET['DrowID']);
   if($Id){
     $sql="SELECT * FROM sharedrow where DrowID='$Id'  ";
     $result=mysqli_query($comm,$sql);
     $row=mysqli_fetch_assoc($result);
     header('Contanete:$row[type]');
     echo $row['content'];
  }
  
?>
