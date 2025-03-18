<?php

// autoload classes

require_once "autoloader.php";

// start session
session_start();


//include the main conf file 
require_once "config/config.php";


//Load databse
// require_once "classes/database.php";


//include helper functions
require_once "helpers.php";


// define global const 
define("APP_NAME", "CMS PDO SYS");
define("PROJECT_DIR", "cms-pdo");



?>