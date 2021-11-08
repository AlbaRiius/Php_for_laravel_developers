<?php

use framework\App;
use framework\Database\Database;


$users = App::get('database')->selectAll('users');

$greeting = greet();

require '../resources/views/users.blade.php';
