<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: index.php");
    die();
}

$tasks = [];

if (isset($_POST['description'])) {
    $description = strip_tags($_POST['description']);
    
    $_SESSION['tasks']->addTask($description);
    header('Location: index.php/?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] == 'markDone') {
    $key =(int) $_GET['key'];
    $_SESSION['tasks']->setTaskDone($key);
    header('Location: index.php/?controller=tasks');
    die();
}

if (isset($_SESSION['tasks'])) {
    $tasks = $_SESSION['tasks']->getUndoneList();
}

include "view/tasks.php";