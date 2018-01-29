<html lang="en">
<head>
    <?php include "confing.php";
          include "pro.php";?>
<title>Control Board</title>
    <link rel="stylesheet" type="text/css" href="css/all.css" /> 
 <style type="text/css">
 body{
  background-image: url("images/bg_body.gif");
     }
     .error {color: #FF0000;}
 </style> 
</head>
    <body>
       <?php 
   $nameErr= $descErr =$pricErr="";
   $Name = $Des = $pric="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //check book name
  if (empty($_POST["bookname"])) {
    $nameErr = "<div align='center'>"."*Name is required"."</div>";
  } else {
    $Name = test_input($_POST["bookname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $nameErr = "<div align='center'>"."*Only letters and white space allowed"."</div>"; 
    }
  }

  // check the book description
  if (empty($_POST["bookDesc"])) {
     $Des = "<div align='center'>"."*Description is required"."</div>";;
   }

   //checkk book price
   if (empty($_POST["bookprice"])) {
    $pricErr = "<div align='center'>"."*Price is required"."</div>";
  } else {
    $pric = test_input($_POST["bookprice"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$pric)) {
      $pricErr = "<div align='center'>"."*Only numbers are allowed"."</div>"; 
    }
  }
}
  function test_input($data){
    $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  ?>
      <br>
      <center>
        <form class="form-newsletter" method="POST">
          <table class="list_table" >
            <fieldset>
                 <div class="entry"><br>
                        <h2><b>Add A New Book To DataBase</b></h2>
                          <div class="text">
                        <p><b>Please Fill The Following Form To Add A New Book To DataBase</b></p>
                    <tr><th  class="braun price">NAME</th>
                        <td><input  type="text" name="bookname" size="30"  placeholder="Enter Book Name..." >
                        <span class="error"><?php echo $nameErr;?></span></td>
                    </tr>
                    <tr><th class="braun price">DISCRIPTION</th>
                        <td><textarea name="bookDesc" rows="3" cols="54" placeholder="Enter Book Discription..." ></textarea>
                           <span class="error"><?php echo $Des;?></span><td>
                    </tr>
                    <tr><th class="braun price">PRICE</th>
                        <td><input type="text" name="bookprice" size="30" placeholder="Enter Book Price..." >
                           <span class="error"><?php echo $pricErr;?></span><td>
                    </tr>
                    <tr><th class="braun price">IMAGE</th>
                        <td><input type="file" name="bookimge" id="bookimge" ><td>
                    </tr>
                    <tr><th  class="braun price">YEAR</th>
                        <td>
                          <select id="bookyear" name="bookyear">
                           <script>
                             var myDate = new Date();
                             var year = myDate.getFullYear();
                             for(var i = 1900; i < year+1; i++){
                                 document.write('<option value="'+i+'">'+i+'</option>');
                                 }
                           </script>
                          </select>
                        </td>
                    </tr>
                    <tr><th class="braun price">CATEGORY</th>
                        <td colspan="2">    
                          <select name='bookCategory'>  
                             <option value='2'>Arbic</option>
                             <option value='1'>English</option>   
                          </select> 
                        </td>
                    </tr>
                    <tr><td><br><button type="submit" name="SUBMIT" value="SUBMIT" />Add</button></td>
                    </tr>
                          </div>
                      </div>
            </fieldset>
            </table>
      <?php
        if(isset($_POST['SUBMIT'])){
           $Bookname=mysqli_real_escape_string ($comm,$_POST['bookname']);
           $BookPrice=mysqli_real_escape_string ($comm,$_POST['bookprice']);
           $BooKCat=$_POST['bookCategory'];
           $BooKYear=$_POST['bookyear'];
           $BooKDes=mysqli_real_escape_string($comm,$_POST['bookDesc']);
           $BooKImg=$_POST['bookimge'];
           $sql="INSERT INTO booklibrary (Bookname,BookPrice,BookCategory,BookDesciription,BookYear,imge) 
                                  VALUES ('$Bookname',$BookPrice,$BooKCat,'$BooKDes',$BooKYear,'$BooKImg')";
        if(mysqli_query($comm,$sql)){
          $count=mysqli_affected_rows($comm);
          echo "<img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Your Adding For New Book Has Been done successfully:')</p>";
          }else{
          echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Your Adding For New Book Has Been Failed!!</p>";
          }
       }
   ?>
      </form> 
    </center>
          <?php include "prof.php";?>
    </body>
</html>