<?php

use framework\App;
use framework\Database\Database;


//$database = new Database(App::get('config')['database']);
$tasks = App::get('database')->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); //Crida estàtica sense new

$greeting = greet();

require 'resources/views/index.blade.php';

