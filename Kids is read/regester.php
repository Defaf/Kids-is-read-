<?php
function writ($txt){
$open=fopen("D:\\text.txt",'a');
 if($open){
 if(fwrite($open,$txt."\n")){
  echo 'good';
 }
 else{
  echo 'bad';   
     }
          }        
}  

?>