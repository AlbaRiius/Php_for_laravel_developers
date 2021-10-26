<?php

$config = require 'config.php';
require 'helpers.php';
require 'Task.php';


$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

//fetchAllTasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

$greeting = greet();
