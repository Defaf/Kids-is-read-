<html>
<title></title>
<head><link rel="stylesheet" href="css/all.css" /></head>
    <body>
	<?php include "confing.php" ;
        include "pro.php" ;
$TRUE=0;
$nameErr=$pErr=$phErr=$emailErr=$cErr=$addErr=$answerErr='';
function test_input($data)  {   
global $comm;
        $data=mysqli_real_escape_string($comm,$data);
            return $data;
}
////////////////////////////////////////////////////////////////////////
if(isset($_POST['SUBMIT'])){
    if  (empty($_POST["u"])) {
        
                $nameErr    = "Name is  required";  
        }   
        else    {   
                $name   =mysqli_real_escape_string($comm,$_POST["u"]);
                //  check   if  name    only    contains    letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name))    {
                        $nameErr= "Only letters and white   space   allowed";       
                }
             else{
                $name=$_POST["u"];
                $sq ="SELECT * FROM users WHERE Username='$name'";
                $result=mysqli_query($comm,$sq);
                if(mysqli_num_rows($result)){
                    $nameErr="name is used";
                }
                else
                  $TRUE++;  }  
                   }
/////////////////////////////////////////////////////////////////////////////
  if  (empty($_POST["p"])) {
        
                $pErr  = "full";  
        }   
        else    {   
                $p   =mysqli_real_escape_string($comm,$_POST["p"]);
                //  check   if  name    only    contains    letters and whitespace
                if (!preg_match("/^[a-zA-Z0-9]*$/",$p))    {
                        $pErr= "Only letters and number allowed";       
                }
                else
                  $TRUE++;  
                   }
                    if  (empty($_POST["ph"])) {
        
                $phErr    = "full";  
        }   
        else    {   
                $ph   =mysqli_real_escape_string($comm,$_POST["ph"]);
                //  check   if  name    only    contains    letters and whitespace
                if (!preg_match("/^[0-9]*$/",$ph))    {
                        $phErr= "Only number allowed";       
                }
                else
                  $TRUE++;  
                   }
        if  (empty($_POST["e"]))    {
                $emailErr   = "Email    is  required";  
        }   else    {   
            $nhngh=$_POST["e"];
                $email  =test_input($nhngh);

                //  check   if  e-mail  address is  well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr   = "Invalid  email   format";        
                }
                    else    {   
                  $TRUE++;  
                   }    
        }

         if  (empty($_POST["Answer"])) {
        
                $answerErr    = "full";  
        }   
        else    {   
                $Answer  =mysqli_real_escape_string($comm,$_POST["Answer"]);
                //  check   if  name    only    contains    letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$Answer))    {
                        $answerErr= "Only letters and white   space   allowed";       
                }
                else
                  $TRUE++;  
                   }
    if  (empty($_POST["add"])) {
        
                $addErr    = "Name is  required";  
        }   
        else    {   
                $add   =mysqli_real_escape_string($comm,$_POST["add"]);
                //  check   if  name    only    contains    letters and whitespace
                if (!preg_match("/^[a-zA-Z0-9 ]*$/",$add))    {
                        $addErr= "Only letters and white   space   allowed";       
                }
                else{
                  $TRUE++;  }
                   }

      if($TRUE==4){
        $Uname=$name ;
        $Upass= md5(mysqli_real_escape_string($comm,$_POST['p'])); 
        $Upho =$ph;
        $Umail= $email;
        $Uadd = $add ;
       $an= $Answer ;

        #$Uremem= $_POST['r'];
        #first param names in the DB second param the varible that i make it 
        $sq = "INSERT INTO users (Username , UserPassword, UserPhone , UserEmail  , UserAddress, Answer ) 
                          VALUES ('$Uname' ,   '$Upass'  ,   $Upho   , '$Umail'   ,  '$Uadd'  ,'$an'  )" ;
            if(mysqli_query($comm,$sq)){
                $count=mysqli_affected_rows($comm);
                echo "welcome to books journey!";
                header("location:projectwelcome.php");
            }else{
               # die("<font style="color)
                echo "Sorry you didn't insert anthing..!";
            }

      }
}


     ?>
     <center>

        <form class="form-newsletter" method="POST">
        	 <table class="list_table" >
        	 	 <fieldset>
        	 <div class="entry"><br>
                       <h2><b>Add A New Book To DataBase</b></h2>
                          <div class="text">
         <?php echo'    <center><p><b>Please Fill The Following Form To Add A New Book To DataBase</b></p></center>
    	<tr><td><input type="text" name="u" placeholder="Enter Username" required="required" />'.$nameErr.'</td></tr>
        <tr><td><input type="password" name="p" placeholder="Enter Password" required="required" />'.$pErr.'</td></tr>
        <tr><td><input type="text" name="ph" placeholder="Enter Phone" required="required" />'.$phErr.'</td></tr>
        <tr><td><input type="email" name="e" placeholder="Enter Email" required="required" />'.$emailErr.'</td></tr></td></tr>
      
<tr><td><br><tr><td><br> City </tr></td></br></tr></td>
      <tr><td><br><select name="addErr">
  <option value="1">makkah</option>
  <option value="2">Jeddah</option>
  <option value="3">Almadeena</option>
  <option value="1">altayef</option>
  <option value="2">abha</option>
  <option value="3">Aldammam</option>
   <option value="2">alkhobr</option>
  <option value="3">Algasem</option>
</select></td></tr></td></tr>

        
        <tr><td><br><button type="submit"name="SUBMIT" value="SUBMIT"class="btn btn-primary btn-block btn-large">SUBMIT</button></td></tr>
                         </div>'; ?>







            </div>
                </fieldset>
           </table>
       </form>
     </center>
</body>
</html>