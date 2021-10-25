<?php

require 'helpers.php';
require 'Task.php';
$config = require 'config.php';

try {
    $dbh = new PDO(
        $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
} catch (\Exception $e) {
    dd($config);

    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

//fetchAllTasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

$greeting = greet();
