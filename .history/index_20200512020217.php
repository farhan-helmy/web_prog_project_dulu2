<?php

//check connection
$link = mysqli_connect("localhost", "root", "", "webproject");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$re_pass = mysqli_real_escape_string($link, $_REQUEST['re_pass']);
$eventname = mysqli_real_escape_string($link, $_REQUEST['eventname']);
$tickets = mysqli_real_escape_string($link, $_REQUEST['tickets']);
$agree = mysqli_real_escape_string($link, $_REQUEST['agree']);

//
$sql = "INSERT INTO registration (name, email, pass,re_pass, eventname, tickets, agree) 
VALUES ('$name', '$email', '$password' ,'$re_pass' ,'$eventname' ,'$tickets' ,'$agree' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

header('Location: index.html');
exit;
?>