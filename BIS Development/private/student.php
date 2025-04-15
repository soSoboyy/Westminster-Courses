<?php


require_once('class_database.php');

class Student extends Database {


	static public $table_name="student";
	static protected $db_columns = ['id','name', 'email', 'userName', 'courseToAttend'];
		
	public $id;	
	public $name;
	public $email;
	public $userName;
	public $courseToAttend;


}




?>