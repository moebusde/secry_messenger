<?php
    session_start();
    include '../classes/Users.php';
    $dbuser = new Users();
    
    $dbuser->logout();