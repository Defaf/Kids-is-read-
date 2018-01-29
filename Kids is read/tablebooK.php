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
                  
                        <center><h2><b>English Book Table</b></h2></center>
                          <div class="text">
                            <tr><td  class="braun price">BOOK ID</td>
                            <td  class="braun price">BOOK NAME</td>
							<td  class="braun price">EDIT</td>
							<td  class="braun price">DELETE</td></tr>
                          </div>
                 </div>
            </fieldset>
            <?php
      $title="booklibrary";
      $sql="SELECT * FROM booklibrary WHERE BookCategory=1 ";
      $result=mysqli_query($comm,$sql);
   if(mysqli_num_rows($result))
   {
      while($rows=mysqli_fetch_assoc($result))
      {
        echo"<tr>";
        echo"<td><center>".$rows['bookID']."</center></td>";
        $id=$rows['bookID'];
        echo"<td><center>".$rows['Bookname']."</center></td>"; 
        echo"<td><center><a href='editbooklibrary.php?action=edit&ID=$id'>edit</a></center></td>";
        echo"<td><center><a href='editbooklibrary.php?action=delet&ID=$id'>delet</a></center></td>";
        echo"</tr>";
      }
   }
 ?>
            </table>
          </form> 


                <div class="advice-holder">
          <table class="list_table"  >
            <fieldset>
                 <div class="entry"><br>
               
                        <center><h2><b>Arabic Book Table</b></h2></center>
                          <div class="text">
                            <tr><td  class="braun price">BOOK ID</td>
                            <td  class="braun price">BOOK NAME</td>
              <td  class="braun price">EDIT</td>
              <td  class="braun price">DELETE</td></tr>
                          </div>
                 </div>
            </fieldset>
            <?php
      $title="booklibrary";
      $sql="SELECT * FROM booklibrary WHERE BookCategory=2 ";
      $result=mysqli_query($comm,$sql);
   if(mysqli_num_rows($result))
   {
      while($rows=mysqli_fetch_assoc($result))
      {
        echo"<tr>";
        echo"<td><center>".$rows['bookID']."</center></td>";
        $id=$rows['bookID'];
        echo"<td><center>".$rows['Bookname']."</center></td>"; 
        echo"<td><center><a href='editbooklibrary.php?action=edit&ID=$id'>edit</a></center></td>";
        echo"<td><center><a href='editbooklibrary.php?action=delet&ID=$id'>delet</a></center></td>";
        echo"</tr>";
      }
   }else
   {

        echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Empty!!</p>";
    }
 ?>
            </table>
          </form> 
      </div>
    </body>
</html>