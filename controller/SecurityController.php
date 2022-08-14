<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
$pdo = require 'db.php';

session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {    
    unset($_SESSION['username']);
    header("Location: index.php");
    die();  
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);    
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;        
        header("Location: index.php");
        die();
    }
}

include "view/signin.php";