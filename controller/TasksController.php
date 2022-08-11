<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

session_start();

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