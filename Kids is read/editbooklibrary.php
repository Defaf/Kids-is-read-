
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
 <?php
   if($_REQUEST['action'] == 'delet')
  {
   $gId=intval($_GET['ID']);
   if($gId){
 
    $query="delete from booklibrary where BookID='$gId'";
    $delete=mysqli_query($comm,$query);
    if($delete){
        echo "<center><img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Delete Successfully:')</p></center>";
    }
    else {
        echo "<center><img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Not Delet!!</p></center>";
    }
   }
  }
  elseif($_REQUEST['action'] == 'edit'){
      
    $gId=intval($_GET['ID']);
   if($gId){     
 $sql="SELECT * FROM booklibrary WHERE bookID=$gId ";
 $result=mysqli_query($comm,$sql);
if(mysqli_num_rows($result))
{
 $rows=mysqli_fetch_assoc($result);
 $Name=$rows['Bookname'];
 $Price=$rows['BookPrice'];
 $Category=$rows['BookCategory'];
 $Desciription=$rows['BookDesciription'];
 $Year=$rows['BookYear'];
}
else
{
echo"oops!!";
}
    ?>
      <div class="block-advice">
      <div class="advice-holder">
        <!--<p>Join our newsletter</p>-->
        <form class="form-newsletter" method="POST">
          <table class="list_table" >
            <fieldset>
                 <div class="entry"><br>
                        <center><h2><b>Edit Data Book </b></h2></center>
                          <div class="text">
                    <tr><th  class="braun price">NAME</th>
                        <!--<input type="file" name="UploadIm" placeholder="Upload Book Image..
                        <center><p><b>Please Fill The Following Form ...</b></p></center>" /><br>-->
						<?php 
                       echo ' <td><input  type="text" name="bookname" size="30"  value="'.$Name.'" placeholder="Enter Book Name..." /></td>
                    </tr>
                    <tr><th class="braun price">DISCRIPTION</th>
                        <td><input type="text" name="bookDesc" size="50" value="'.$Desciription.'" placeholder="Enter Book Discription..." /><td>
                    </tr>
                    <tr><th  class="braun price">YEAR</th>
                        <td>';?>

                          <select id="bookyear" name="bookyear">
                           <script>
                             var myDate = new Date();
                             var year = myDate.getFullYear();
                             for(var i = 1900; i < year+1; i++){
                                 document.write('<option value="'+i+'">'+i+'</option>');
                                 }
                           </script>
                          </select></td><?php
                   echo '</tr>
                    <tr><th class="braun price">PRICE</th>
                        <td><input type="text" name="bookprice" size="30"  value="'.$Price.'" placeholder="Enter Book Price..." /><td>
                    </tr>

                    <tr><th class="braun price">CATEGORY</th>
                        <td colspan="2">    <select name="bookCategory">  
             <option value="2">Arbic</option>
             <option value="1">English</option>   
             </select> </td>
                    </tr>
                    <tr><td><button class="btn black normal" type="submit" name="SUBMIT">SUBMIT</button></td>
                    </tr>
                            </div>
                            </div>
            </fieldset>
            </table>
            
          </form> 
      </div>
  </div>';
  ?>
   <?php
 if(isset($_POST['SUBMIT'])){
$Bookname=$_POST['bookname'];
$BookPrice=$_POST['bookprice'];
$BooKCat=$_POST['bookCategory'];
$BooKYear=$_POST['bookyear'];
$BooKDes=$_POST['bookDesc'];

$sql="UPDATE booklibrary SET Bookname='$Bookname',BookPrice=$BookPrice,BookCategory=$BooKCat,bookDesciription='$BooKDes',BookYear=$BooKYear WHERE bookID=$gId";
  if(mysqli_query($comm,$sql))
    {
    $count=mysqli_affected_rows($comm);
     echo "<img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Your Updating Has Been done successfully:')</p>";
    }
   else{
    echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Your Updating Is Failed!!</p>";
       }
    }
   }
  }
   ?>
    </body>

</html>