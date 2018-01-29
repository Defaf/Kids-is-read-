<html>
<head>
<title>Control Board</title>
<?php include"confing.php";
      include"pro.php";?>
    <link rel="stylesheet" type="text/css" href="css/all.css" /> 
 <style type="text/css">
 body{
  background-image: url("images/bg_body.gif");
     }
 </style> 
</head>
<body>
  <br><br><br><br><br><br><br>
     <center>
        <fieldset>
	 <div class="entry"><br>
         <center><h2><b>Edit Comments Site</b></h2></center>
           <div class="text">
<textarea rows="12" cols="98" >
<?php
$array=file("D:\\text.txt");
foreach($array as $I){
    echo $I;
}
?>
</textarea>


<form class="form-newsletter" method="POST"> 
 <a href="javascript:location.reload(true)">
  <button type="submit" name="submit" value="clean" />Clean</button></a>
</form>



<?php

if(isset($_POST['submit'])){
	
$open=fopen("D:\\text.txt",'w');
 if($open){
 if(fwrite($open,'')){
  echo 'good';
 }
 else{
  echo 'bad';   
     }
          }  
	
}
?>
</div>
</div>
</fieldset>
</center>
<br><br><br><br><br>
 </body>
 </html>
