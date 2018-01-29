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
   $query="DELETE FROM sharestor WHERE id='$gId'";
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

    function test_input($data)  { 
      global $comm;
    $data = mysqli_real_escape_string($comm,$data);
      return $data;
}
      
    $gId=intval($_GET['ID']);
   if($gId){      
 $sql="SELECT * FROM sharestor WHERE id=$gId ";
 $result=mysqli_query($comm,$sql);
if(mysqli_num_rows($result))
{
 $rows=mysqli_fetch_assoc($result);
 $Name=$rows['names'];
 $See=$rows['see'];
}
else
{
echo"oops!!";
}
  $TRUE=0;
    if  (empty($_POST["bookname"])) {
        $nameErr  = "Name is  required";  
    } else  { 
        $name =test_input($_POST["bookname"]);
        //  check if  name  only  contains  letters and whitespace
        if (!preg_match("/^\w*$/",$name)) {
            $nameErr  = "Only letters and white space allowed";   
        } 
      $TRUE++;  
    }

      if($TRUE==1)
  {
     if(isset($_POST['SUBMIT'])){

$Bookname=mysqli_real_escape_string($comm,$_POST['bookname']);
$BookSee=mysqli_real_escape_string($comm,$_POST['see']);
 $sql="UPDATE sharestor SET names='$Bookname',see=$BookSee WHERE id=$gId";
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


      <div class="block-advice">
      <div class="advice-holder">
        <!--<p>Join our newsletter</p>-->
        <form class="form-newsletter"  method="POST">
          <table class="list_table" >
        <fieldset>
	 <div class="entry"><br>
         <center><h2><b>Edit date story</b></h2></center>
           <div class="text">
      <center><p><b>Please Fill The Following Form </b></p></center>
         <tr><th  class="braun price">NAME</th>       
         <td>
		 <?php 
		  echo '
         <input type="text" name="bookname" value="'.$Name.'" size="30" placeholder="Edit Book Name..."/></td></tr>
		  <tr><th    class="braun price">FILE</th>
		  <td   class="white three" ><a href="af.php?id='.$_GET['ID'].'">READ</a></td>
         </tr>  
         <tr><th  class="braun price">Category</th>
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
                 
                    <tr><td><button class="btn black normal" type="submit" name="SUBMIT" >SUBMIT</button></td>
                    </tr>
      </tr>                            </div>
                            </div>
            </fieldset>
            </table>
            
          </form> 
      </div>
  </div> '; 
}?>



 </body>
 </html> 