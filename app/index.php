<?php

use framework\App;
use framework\Database\Database;

require 'helpers.php';

//$database = new Database(App::get('config')['database']);
$tasks = App::get('database')->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); //Crida estàtica sense new

$greeting = greet();
