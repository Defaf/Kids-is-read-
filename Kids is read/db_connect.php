
<?php
$host = "localhost";
$db_name = "books";
$username = "root";
$password = "";
 
/*try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
*/

 $con =mysqli_connect($host,$username,$password,$db_name);

//to handle connection error
/*catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();*/

?>
