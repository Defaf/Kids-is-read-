 <html>
 <title></title>
 <head><?php include "confing.php";?>
  <link rel="stylesheet" type="text/css" href="css/all.css" /> 
 <style type="text/css">
 body{
  background-image: url("images/bg_body.gif");
     }
 </style>
 </head>
 <body>
   <div class="block-advice">
      <div class="advice-holder">
          <table class="list_table" >
            <fieldset>
                 <div class="entry"><br>
                        <center><h2><b>Book Table</b></h2></center>
                          <div class="text">
                            <tr><td  class="braun price">BOOK NAME</td>
                            <td  class="braun price">COMMENT</td>
                            <td  class="braun price">CASE</td>
                            <td  class="braun price">EDITE</td>
                            <td  class="braun price">DELETE</td></tr>
                          </div>
                 </div>
            </fieldset>     
   <?php
 $sql="SELECT sharestor.names,commments.comm,commments.comID,commments.seec FROM sharestor INNER JOIN commments ON sharestor.id=commments.FileID";
 $result=mysqli_query($comm,$sql);
if(mysqli_num_rows($result))
{
 while($rows=mysqli_fetch_assoc($result))
{
  echo"<tr>";
  echo"<td><center>".$rows['names']."</center></td>";
  $id=$rows['comID'];
  echo"<td><center>".$rows['comm']."</center></td>"; 
  if($rows['seec']== 1){
  echo"<td></center>NoSee</center></td>";     
  }
  elseif($rows['seec']== 2){
  echo"<td></center>See</center></td>";     
  } 
  echo"<td><center><a href='editcomment.php?action=edit&ID=".$rows['comID']."'>edit</a></center></td>";
  echo"<td><center><a href='editcomment.php?action=delet&ID=".$rows['comID']."'>delete</a></center></td>";
  echo"</tr>";
 }
}
else
{
 echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Empty!!</p>";
}
   ?>
       </table>
 </body>
 </html>