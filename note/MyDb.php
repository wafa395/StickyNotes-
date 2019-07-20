<?php

require 'config.php';

 class MyDb{

 	private static $connection;


 	public function connect(){

 		if(!isset(self::$connection)){
 			$config = parse_ini_file('config.ini');
 			self::$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
 		}

 		if(self::$connection == false){

 			echo "No connection" . self::$connection->connect_error;
 			return false;
 		}

 		return self::$connection;
 	}


 

public function add($first_name,$last_name){

 		$sql = "insert into user (first_name,last_name) values ('$first_name','$last_name')";


 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		
 		return $result;
 	}

  
    public function addcomment($first_name,$comment){



    $sql = "insert into comment (first_name,comment) values ('$first_name','$comment')";

    $conn = $this->connect();
    $result = $conn->query($sql);
    echo $conn->error;
    
    return $result;

  }


}

 	?>
