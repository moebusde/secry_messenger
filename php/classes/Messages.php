<?php

include '../gitignore.php';

class Messages {
    
    public function listMessages($chat) {
        $mysqli = new mysqli(Credentials::getServer(), Credentials::getUser(), Credentials::getPassword(), Credentials::getDB());
        $query = "SELECT * FROM alle_nachrichten WHERE f_id_chats = $chat ORDER BY id_messages";
        $counter = 0;
        $messages = array();
        
        if($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $messages[$counter] = $row;
                $counter++;
            }
            return $messages;
        }
    }
    
    public function getMessage($chat, $limit="") {
        $mysqli = new mysqli(Credentials::getServer(), Credentials::getUser(), Credentials::getPassword(), Credentials::getDB());
        $query = "SELECT * FROM alle_nachrichten WHERE f_id_chats = $chat ORDER BY id_messages DESC LIMIT $limit";
        
        if($result = $mysqli->query($query)) {
            $fetch = $result->fetch_assoc();
            return $fetch;
        }
    }
    
    public function isNewMessage($chat, $timestamp) {
        $last_message = $this->getMessage($chat, 1);
        return $last_message;
        if($last_message['sent'] > $timestamp) {
            
        }
    }

        public function setMessage($message, $chat, $user) {
        $mysqli = new mysqli(Credentials::getServer(), Credentials::getUser(), Credentials::getPassword(), Credentials::getDB());
        $query = "INSERT INTO messages (f_id_users, f_id_chats, message) VALUES ((SELECT id_users FROM users WHERE username = '$user'), $chat, '$message')";
        if($result = $mysqli->query($query)) {
            return true;
        } else {
            echo $mysqli->error;
            return false;
        }
    }
}
