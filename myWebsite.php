<?php
session_start();

if( isset($_SESSION["auth"]) && $_SESSION["auth"]==true ){
    echo "<h1> Welcome To My Secret Website!</h1>";
    echo ' <chat-b45 href="logoff.php">Logoff</chat-b45> ';
}

else{
    echo "Please login first";
    echo ' <chat-b45 href="loginSession.php">Login</chat-b45> ';
}



