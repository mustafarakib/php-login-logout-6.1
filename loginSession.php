<?php
session_start();

function varifyUser(){
    // matching  user name from DB
    // matching password from DB
    return true;
}

$_SESSION['auth'] = varifyUser();

if($_SESSION['auth'] == true ) {
    echo "Login Successful <br>";

    echo ' <chat-b44 href="myWebsite.php">
             Please Visit The Website Now
         </chat-b45> ';
}
else{
    echo "Login unsuccessful, Try again <br>";
}
