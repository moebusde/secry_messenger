<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author dennis
 */
include 'php/gitignore.php';

class Users {
    public function login($user, $password) {
        $mysqli = new mysqli(Credentials::getServer(), Credentials::getUser(), Credentials::getPassword(), Credentials::getDB());
        $query = "SELECT * FROM users WHERE username = '$user' AND password = '".hash("sha512", $password)."'";
        if($result = $mysqli->query($query)) {
            if($result->num_rows > 0) {
                return true;
            } else {
                echo $mysqli->error;
                return false;
            }
        }
    }
}
