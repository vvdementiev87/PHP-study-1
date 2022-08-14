<?php
require_once "model/User.php";
require_once "model/UserProvider.php";

$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR(150) NOT NULL,
    isDone TINYINT NOT NULL DEFAULT 0,
    userId INTEGER NOT NULL
  )');

/* $user = new User('admin');
$user->setName('Ember Song');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123'); */