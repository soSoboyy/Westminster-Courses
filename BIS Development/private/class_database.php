<?php

class Database {

	static protected $database;
	static protected $table_name = "";
	static protected $columns;
	
	
	
		static public function set_database($database) {
			self::$database = $database;
		}


	static public function find_by_sql($sql){
		//echo $sql;
			$results = self::$database->query($sql);		
				if(!$results) {								//add valuation of the query succeded or failed
					exit("Database query failed. ");
					}
			$object_array=[];
			while($record = $results->fetch_assoc()) { //get the first row as an array and create an object
				$object_array[] = static::instantiate($record);
				}
			return $object_array;		
			}

	static public function find_all() {
			$sql = "SELECT * FROM " . static::$table_name; 
			return static::find_by_sql($sql);
		} 
	
	static public function find_by_id($id) {
			$sql = "SELECT * FROM " . static::$table_name . " WHERE id='" . static::$database->escape_string($id) . "'"; //escape the string
			$result = static::find_by_sql($sql);
			if(!empty($result)){
				return array_shift($result);
			} else {
				echo "empty";
			}
		} 
		

	static protected function instantiate($record) {
			$object = new static;
			foreach($record as $property => $value) {
				if(property_exists($object, $property)){
					 $object->$property=$value;
					}
				}
			return $object;
		}
		

/*
	static public function verify_user($loginname, $password){
				$sql = "SELECT * FROM " . static::$table_name . " WHERE loginname='$loginname' AND password='$password' "; //escape the string
				$result = static::find_by_sql($sql);			
				return array_shift($result);
			}

*/

	public function update() {
		$attributes = $this->attributes();
		$attribute_pairs=[];
			foreach($attributes as $key=>$value) {
				$attribute_pairs[] = "{$key}='{$value}'";
			}
		$sql = "UPDATE " . static::$table_name . " SET ";
		$sql .= join(', ', $attribute_pairs);
		$sql .= " WHERE id=' ". static::$database->escape_string($this->id) . " '"; //
			$results = static::$database->query($sql); //
			return $results;			
		}
		

	public function create() {				
		$attributes = $this->attributes();
		$sql = "INSERT INTO " . static::$table_name . " (";
		$sql .= join(', ', array_keys($attributes));
		$sql .= ") VALUES (' ";
		$sql .= join("', '", array_values($attributes));
		$sql .= " ' )";
		$results = static::$database->query($sql);
			if($results) {
				$this->id = static::$database->insert_id;
				}
			return $results;
		}


	 public function delete() {
		$sql = "DELETE FROM " . static::$table_name . " WHERE id='" . $this->id . "' LIMIT 1";
		$results = static::$database->query($sql);
		return $results;			
		}

//$attributes are the properties that have the database columns excluding 'id'
	public function attributes() {
		$attributes=[];
		foreach(static::$db_columns as $column) {
			if($column == 'id') { continue; }
			$attributes[$column] = $this->$column;
		}
	return $attributes;
	}


	public function merge_attributes($args=[]) {
			foreach($args as $key=>$value) {
					if(property_exists($this, $key)) {
							$this->$key = $value;
						}
					}
				}

	


}



?>