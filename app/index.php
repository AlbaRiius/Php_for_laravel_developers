<?php

use framework\Database\Database;

$config = require 'config.php';
require 'helpers.php';





$database = new Database($config);
$tasks = $database->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); //Crida estàtica sense new

$greeting = greet();
