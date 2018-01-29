<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "projectheader.php"; 
        include "confing.php";?>
        <style type="text/css">
        .error {color: #FF0000;}
        </style>
</head>
<body>
  <?php 
   $nameErr = "";
   $Name = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "<div align='center'>"."*Name is required"."</div>";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $nameErr = "<div align='center'>"."*Only letters and white space allowed"."</div>"; 
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
  <section class="main">
        <div class="content">
          <section class="bar">
            <div class="bar-frame">
              <ul class="breadcrumbs">
                <li><a href="projectHome.php">Home</a></li>
                <li><a href="projectdraw.php">Draw A Story</a></li>
                <li>Share Draw</a></li>
              </ul>
            </div>
          </section>
       <center><form action="projectdshare.php" enctype="multipart/form-data" method="POST" class="form-newsletter">
          <table class="list_table" >
            <fieldset>
             <center>
              <div class="entry">
              <center><h2><b>Awesome You Decided To Share Your Talent In Drawing </b></h2></center>
              <div class="text">
        <center><p><b>You're Amazing Drawing Going To Make The Story Fabulous</b></p></center>
                    <tr><th  class="braun price">NAME</th>
                        <td><input  type="text" name="Name" placeholder="Enter Draw Name..." >
                        <span class="error"><?php echo $nameErr;?></span></td>
                    </tr>
                    <tr><th  class="braun price">IMAGE</th>
                        <td><input  type="file" name="file" id="file"></td>
                    </tr>
                     <tr><td><br><button type="submit" name="SHARE" value="SHARE" />Share</button></td>
                    </tr>
                    </div>
                </div>
            </fieldset>
            </table>
    <?php
    
      if(isset($_POST['SHARE'])){    
         $file =$_FILES['file']['name'];
         $file_loc = $_FILES['file']['tmp_name'];
         $file_size = $_FILES['file']['size'];
         $file_type = $_FILES['file']['type'];
         $Name=mysqli_real_escape_string ($comm,$_POST['Name']);
          $_SESSION['file']=$file;
         $_SESSION['Name'] = $Name;
        // $ppath="images/".$file;
          if($_FILES['file']['type']=="image/jpeg"||$_FILES['file']['type']=="image/png"){
             $content = addslashes(file_get_contents($file_loc)); 
              //$s=move_uploaded_file($file_loc,$ppath);
             $sql="INSERT INTO sharedrow(DrowName,type,content) VALUES('$Name','$file_type','$content')";
                if(mysqli_query($comm,$sql)){
                   $count= mysqli_affected_rows($comm);
                   echo "<img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Your Sharing Has Been done successfully:')</p>";
                  }
            }else{
                 echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Your Sharing Is Failed!!</p>";
                 }
           } 
          
     ?>

          </form></center> 
        </div>
        <br><br><br><br>
</body>
<?php include "projectfooter.php"; ?>
</html>