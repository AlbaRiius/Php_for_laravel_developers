<?php

use framework\App;
use framework\Database\Database;


$users = App::get('database')->selectAll('users');

require '../resources/views/users.blade.php';
