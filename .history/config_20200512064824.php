<?php

//check connection
$link = mysqli_connect("localhost", "root", "", "webproject");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// 

?>