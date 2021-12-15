<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'webproject');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['name']);
   $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
   
   $sql = "SELECT name , password FROM registration WHERE name = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      header("location: showprofile.html");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>

?>