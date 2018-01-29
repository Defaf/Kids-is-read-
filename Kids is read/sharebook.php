<html>
<title></title>
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
                <li>Uplaod Story</a></li>
              </ul>
            </div>
          </section>
		<center>				
	<form action="sharebook.php" class="form-newsletter"  method="POST" enctype="multipart/form-data">
		<table class="list_table" >
            <fieldset>
              <div class="entry">
              <center><h2><b>Awesome You Decided To Share Your Story With Us </b></h2></center>
              <div class="text">
        <center><p><b> Don't worry we're going to publish a great book for you</b></p></center>
							<tr><th class="braun price">NAME</th>
								<td><input type="text" name="Name" placeholder="Enter File Name..."  />
									<span class="error"><?php echo $nameErr;?></span></td></tr>
							<tr><th class="braun price">FILE</th>
								<td><input type="file" name="file" /></td><tr>
								<tr><td><br><button type="submit" name="upload" value="upload" />Uplaod</button></td>
								</table>
								<?php
if(isset($_POST['upload']))// 1111111111111111111
{    
     
 $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $Name=$_POST['Name'];
  $ppath="images/".$file;
 if($_FILES['file']['type']=="application/pdf"){
 //$content = addslashes (file_get_contents( $file_loc)) ;

  
$s=move_uploaded_file($file_loc,$ppath);
 $sql="INSERT INTO sharestor(names,FileName,content) VALUES('$Name','$file','$ppath')";
 if(mysqli_query($comm,$sql) )
{
$count= mysqli_affected_rows($comm);
echo "<img src='images/right_ic.png' width='16' height='16'/>"."<p style='color:green;' > Your Uplaoding Has Been done successfully:')</p>";
}}
else{
   echo "<img src='images/wrong_ic.png' width='16' height='16'/>"."<p style='color:red;' > Your Uplaoding Is Failed!!</p>";
}}
?>
							</fieldset>
						</form></center>
	            </div>
            </div>
</body>
<?php include "projectfooter.php"; ?>
</html>
