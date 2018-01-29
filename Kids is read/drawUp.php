<html>
<title></title>
<head>
<style type="text/css">
button:active{
    background:green;
}
button:focus{
    background: #FFB6C1;
}

</style>
<?php include "pro.php"; 
      include "confing.php";?>
</head>
<body>
    <br><br><br>
<center><form>
   name:  <input type="text" name="name" /><br><br>
   pass: <input type="text" name="pass" /><br><br>
    <button type="submit" name="submit">submit</button>

</form></center>
<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear();
  for(var i = 1900; i < year+1; i++){
      document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>

</body>
</html>