<?php
header("Location: successful.html");
include "config.php";

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['pass']);
$re_pass = mysqli_real_escape_string($link, $_REQUEST['re_pass']);
$eventname = mysqli_real_escape_string($link, $_REQUEST['eventname']);
$tickets = mysqli_real_escape_string($link, $_REQUEST['tickets']);


//
$sql = "INSERT INTO registration (name, email, password, re_pass, eventname, tickets) 
VALUES ('$name', '$email', '$password' ,'$re_pass' ,'$eventname' ,'$tickets' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>


