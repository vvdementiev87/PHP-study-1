<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_POST['username'], $_POST['password1'], $_POST['password2'], $_POST['name'])) {
    [   'username' => $username,
        'password1' => $password1,
        'password2' => $password2,
        'name' => $name
    ] = $_POST;

    if ($password1 === $password2){
        $user = new User ($username);
        $user->setName($name);
        $userProvider = new UserProvider($pdo);
        $result = $userProvider->registerUser($user, $password1);   
       
        if ($result) {
            $userProvider = new UserProvider($pdo);
            $_SESSION['username'] = $userProvider->getByUsernameAndPassword($username, $password1); 
            header("Location: index.php");
            die();            
        } else {      
            $error = 'Login занят';
        }
    } else {
        $error = 'Пароли не совпадают';
    }
    
}

include "view/registration.php";