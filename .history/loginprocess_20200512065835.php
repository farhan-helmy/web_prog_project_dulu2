<?php

$conn = mysqli_connect("localhost","root","","admindb");

if(isset($_POST["submit"])){
  $uname = $_POST["your_name"];
  $pass =$_POST["your_pass"];

  $sql = mysqli_query($conn, "SELECT count(*) as total from user where username = '".$uname."' 
  and password = '".$pass."'") or die(mysqli_error($conn));

  $rw = mysqli_fetch_array($sql);

  if($rw['total'] > 0){
    header("Location: successful.html")
  }
  else{
    echo "<script>alert('username and password are incorrect')</script>";
  }

}

?>