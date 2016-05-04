<?php
    
    include '../classes/Messages.php';

    $dbmessage = new Messages();
    $message = filter_input(0, "message");
    
    $dbmessage->setMessage($message, 1, 2);
    