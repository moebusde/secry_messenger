<?php
    session_start();
    include '../classes/Messages.php';

    $dbmessage = new Messages();
    $message = filter_input(0, "message");
    $chat = filter_input(0, "chat");
    
    if($dbmessage->setMessage($message, $chat, $_SESSION['username'])) {
        echo "gesendet";
    }
    