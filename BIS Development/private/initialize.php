<?php

require_once('credentials.php');
require_once('database_functions.php');
require_once('class_database.php');
require_once('student.php');
require_once('tutor.php');



$database = db_connect(); // call the connection; 
Database::set_database($database); // class 'becomes aware'about the database 


?>