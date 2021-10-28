<?php

use framework\App;
use framework\Database\Database;
use framework\Database\Connection;


App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));
