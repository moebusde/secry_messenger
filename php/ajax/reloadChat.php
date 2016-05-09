<?php
    include '../classes/Messages.php';
    $last_shown_id = filter_input(0, "lastmessageid");
    $chat = filter_input(0, "chat");
    $dbmessage = new Messages();
    if ($dbmessage->isUpdateRequired($chat, $last_shown_id)) {
        echo json_encode($dbmessage->listMessages($chat, $last_shown_id));
    } else {
        
        echo "no update required";
    }
    
