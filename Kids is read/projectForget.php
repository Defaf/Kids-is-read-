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


      if($TRUE==7){
        $Upass= md5(mysqli_real_escape_string($comm,$_POST['p'])); 
       $an= $Answer ;

        #$Uremem= $_POST['r'];
        #first param names in the DB second param the varible that i make it 
        $sq = "INSERT INTO users (Username , UserPassword, UserPhone , UserEmail , UserCity , UserAddress, Answer ) 
                          VALUES ('$Uname' ,   '$Upass'  ,   $Upho   , '$Umail'  ,  '$Ucit' ,  '$Uadd'  ,'$an'  )" ;
            if(mysqli_query($comm,$sq)){
                $count=mysqli_affected_rows($comm);
                echo "Insert ".$count ." record";
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
        <tr><td><input type="text" name="Answer" placeholder="what is your favorit color ?" required="required" />'.$answerErr.'</td></tr>
        <tr><td><br><button type="submit"name="SUBMIT" value="SUBMIT"class="btn btn-primary btn-block btn-large">SUBMIT</button></td></tr>
                         </div>'; ?>
            </div>
                </fieldset>
           </table>
       </form>
     </center>
</body>
</html>