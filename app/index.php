<?php

$config = require 'config.php';
require 'helpers.php';
require 'Task.php';


$tasks = fetchAllTasks(connectDB($config));

$greeting = greet();
