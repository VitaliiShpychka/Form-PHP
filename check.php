<?php
include('connection.php');

$message = "";
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5|| mb_strlen($login)>90){
    $message = "invalid login length";
}else if(mb_strlen($name)<3|| mb_strlen($name)>50){
    $message = "invalid name length";
}else if(mb_strlen($pass)<2|| mb_strlen($pass)>6){
    $message = "invalid login length: from 2 to6 characters";
}

if(!empty($message)) {
    header('Location: /?status=error');
    exit;
}

$pass=md5($pass."dkjskajdskj");

if(saveUserInDB($login, $pass, $name) === true) {
    header('Location: /?status=ok');
}

?>