<?php


require_once('class_database.php');

class Tutor extends Database {


	static public $table_name="tutor";
	static protected $db_columns = ['id','name', 'email', 'userName', 'courseToTeach', 'qualification'];
		
	public $id;	
	public $name;
	public $email;
	public $userName;
	public $courseToTeach;
	public $qualification;


}




?>