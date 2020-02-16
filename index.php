<?php
session_start(); 

require "config.php";
require "vendor/autoload.php";

define('INFO', array('VERSION' => '1.0.1.1',
'YEAR' => '2019')
);

define('BASE_URL', 'http://localhost/conduapp/');
$core = new Core\Core();
$core->start();