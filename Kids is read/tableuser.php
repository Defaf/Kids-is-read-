<html>
    <head>
      <?php include "confing.php";?>
        <title>Control Board</title>
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
          <table class="list_table"  >
            <fieldset>
                 <div class="entry"><br>
                        <center><h2><b>Users Table</b></h2></center>
                          <div class="text">
                            <tr><td  class="braun price">User Name</td>
                            <td  class="braun price">Phone</td>
							<td  class="braun price">Email</td>
                          </div>
                 </div>
            </fieldset>
            <?php
      $title="booklibrary";
      $sql="SELECT * FROM users";
      $result=mysqli_query($comm,$sql);
   if(mysqli_num_rows($result))
   {
      while($rows=mysqli_fetch_assoc($result))
      {
        echo"<tr>";
        echo"<td>".$rows['Username']."</td>";
        echo"<td>".$rows['UserPhone']."</td>"; 
        echo"<td>".$rows['UserEmail']."</td>"; 
        echo"</tr>";
      }
   }else{
       echo"oops!!";
        }
 ?>
            </table>
          </form> 
      </div>
    </body>
</html>