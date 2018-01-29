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
  <?php
  if($_REQUEST['action'] == 'delet')
  {
   $gId=intval($_GET['ID']);
   if($gId){
   $query="DELETE FROM  commments WHERE comID='$gId'";
   $delete=mysqli_query($comm,$query);
    if($delete){
      echo "done delete";
    }
    else{
      echo "not done";
    }
   }
  }
  elseif($_REQUEST['action'] == 'edit'){
      
    $gId=intval($_GET['ID']);
   if($gId){ 

 $sql="SELECT * FROM commments WHERE comID='$gId'";
 $result=mysqli_query($comm,$sql);
if(mysqli_num_rows($result))
{
 $rows=mysqli_fetch_assoc($result);
 $Name=$rows['comm'];
 $See=$rows['seec'];



echo '
        <div class="block-advice">
      <div class="advice-holder">
        <!--<p>Join our newsletter</p>-->
        <form class="form-newsletter" method="POST">
          <table class="list_table" >
            <fieldset>
                 <div class="entry"><br>
                        <center><h2><b>Edit Data Book </b></h2></center>
                          <div class="text">
                        <center><p><b>Please Fill The Following Form ...</b></p></center>
                    <tr><th  class="braun price">COMMENT</th>
                        <!--<input type="file" name="UploadIm" placeholder="Upload Book Image.." /><br>-->
 
     

         <td>
         <input type="text" name="bookname" value="'.$Name.'" size="30"/>      
         </td>
         </tr>  
         <tr> <tr><th  class="braun price">CATOGARY</th>
         <td>
             <select name="see" > ';
         if($See==1)
         {
          echo ' <option value="1">NoSee</option>
             <option value="2">See</option>';
         }
         else{
            echo ' <option value="2">See</option>
             <option value="1">NoSee</option>';    
         }
         echo '    </select>      

         </td></tr>  
                    </tr>
                    <tr><td><button class="btn black normal" type="submit" name="SUBMIT"value="Subscribe">SUBMIT</button></td>
                    </tr>
                            </div>
                            </div>
            </fieldset>
            </table>
            
          </form> 
      </div>
  </div>'; 
 if(isset($_POST['SUBMIT'])){
$commn=$_POST['bookname'];
$commSee=$_POST['see'];
echo $gId;
 $sqlC="UPDATE commments SET comm='$commn',seec=$commSee WHERE comID=$gId";
  if(mysqli_query($comm,$sqlC))
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
}
else
{
echo"oops!!";
}
   ?>

    </body>
 </html>   
 

