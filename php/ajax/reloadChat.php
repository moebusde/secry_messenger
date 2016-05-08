<?php
    include '../classes/Messages.php';
    $timesent = filter_input(0, "currentsent");
    $chat = filter_input(0, "chat");
    $dbmessage = new Messages();
    
    echo json_encode($dbmessage->listMessages($chat));
