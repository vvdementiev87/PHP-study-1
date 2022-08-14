<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';
$pdo = require 'db.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: index.php");
    die();
}

$tasks = [];

if (isset($_SESSION['tasks'])) {
    $taskProvider = new taskProvider($pdo);
    $tasks = $_SESSION['tasks'] = $taskProvider->getUndoneList($user->getUserId());    
}

if (isset($_POST['description'])) {
    $description = strip_tags($_POST['description']);
    
    $taskProvider->addTask($description, $user->getUserId());
    header('Location: index.php/?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'markDone') {
    $key =(int) $_GET['key'];
    $taskProvider->setTaskDone($key);
    header('Location: index.php/?controller=tasks');
    die();
}



include "view/tasks.php";