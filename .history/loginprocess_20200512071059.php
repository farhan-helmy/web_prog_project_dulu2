<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'admindb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['your_name']);
   $mypassword = mysqli_real_escape_string($db,$_POST['your_pass']); 
   
   $sql = "SELECT count(*) FROM user WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      
      header("location: form.html");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>

?>