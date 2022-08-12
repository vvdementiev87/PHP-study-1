<?php
require_once 'model/User.php';
session_start();
$pageHeader = 'Вторая';

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: index.php");
    die();
}

include "view/second.php";