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
          <table class="list_table" >
            <fieldset>
                 <div class="entry"><br>
                        <center><h2><b>Book Table</b></h2></center>
                          <div class="text">
                            <tr><td  class="braun price">BOOK ID</td>
                            <td  class="braun price">BOOK NAME</td>
                            <td  class="braun price">BOOK CASE</td>
                            <td  class="braun price">USER NAME</td>
                            <td  class="braun price">EDITE</td>
                            <td  class="braun price">DELETE</td></tr>
                          </div>
                 </div>
            </fieldset>
             <?php
 $sql="SELECT users.Username,sharestor.names,sharestor.id,sharestor.see FROM users INNER JOIN sharestor ON users.userID=sharestor.userID";
 $result=mysqli_query($comm,$sql);
if(mysqli_num_rows($result))
  {
    while($rows=mysqli_fetch_assoc($result))
          {
            echo"<tr>";
            echo"<td><center>".$rows['id']."</center></td>";
            $id=$rows['id'];
            echo"<td><center>".$rows['names']."</center></td>"; 
            if($rows['see']== 1)
              {
               echo"<td><center>NoSee</center></td>";     
              }elseif($rows['see']== 2)
                     {
                      echo"<td><center>See</center></td>";     
                    } 
            echo"<td><center>".$rows['Username']."</center></td>";
            echo"<td><center><a href='edituserstory.php?action=edit&ID=$id'>edit</a></center></td>";
            echo"<td><center><a href='edituserstory.php?action=delet&ID=$id'>delete</a></center></td>";
            echo"</tr>";
         }
  }else{
        echo"oops!!";
      }
   ?>
          </table>
        </div>
    </body>
</html>



