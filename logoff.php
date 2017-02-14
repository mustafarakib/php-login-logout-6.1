<?php
session_start();
session_destroy();

echo "You are logged off"."<br>";
echo ' <chat-b45 href="loginSession.php">
         Please Login
       </chat-b45> ';
