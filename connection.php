<?php

function saveUserInDB($login, $pass, $name) {
    try {
        $mysql = new mysqli('localhost', 'root','', 'register-bd');
        $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
        $mysql->close();
        return true;
    } catch(Exception $error) {
        return false;
    }
}




