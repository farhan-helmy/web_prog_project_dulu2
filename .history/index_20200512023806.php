<?php

//check connection
$link = mysqli_connect("localhost", "root", "", "webproject");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// 

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$re_pass = mysqli_real_escape_string($link, $_POST['re_pass']);
$eventname = mysqli_real_escape_string($link, $_POST['eventname']);
$tickets = mysqli_real_escape_string($link, $_POST['tickets']);
$agree = mysqli_real_escape_string($link, $_POST['agree']);

//
$sql = "INSERT INTO registration (name, email, pass,re_pass, eventname, tickets, agree) 
VALUES ('$name', '$email', '$password' ,'$re_pass' ,'$eventname' ,'$tickets' ,'$agree')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>