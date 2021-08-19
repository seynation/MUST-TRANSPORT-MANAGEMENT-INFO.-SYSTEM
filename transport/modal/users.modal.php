<?php

require_once"connection.php";

class usersmodal
{
	

	static public function usersmodaladd($table,$data)
	{
		$stmt = Connection::connect()->prepare("INSERT INTO $table(othername, role, departid, password, username) VALUES (:othername, :role, :departid, :password, :username)");
		$stmt -> bindParam(":othername", $data["othername"], PDO::PARAM_STR);
		$stmt -> bindParam(":role", $data["role"], PDO::PARAM_STR);
		$stmt -> bindParam(":departid", $data["departid"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":username", $data["username"], PDO::PARAM_STR);
		if ($stmt->execute()) {			
			return 'ok';	
		} else {		
			return 'error'.var_dump($stmt->errorInfo());
		}	
		$stmt -> close();
		$stmt = null;
	}

	static public function driversmodaladd($table,$data)
	{
		$stmt = Connection::connect()->prepare("INSERT INTO $table(name, email, mobile, plate) VALUES (:name, :email, :mobile, :plate)");
		$stmt -> bindParam(":name", $data["name"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":mobile", $data["mobile"], PDO::PARAM_STR);
		$stmt -> bindParam(":plate", $data["plate"], PDO::PARAM_STR);
		if ($stmt->execute()) {			
			return 'ok';	
		} else {		
			return 'error'.var_dump($stmt->errorInfo());
		}	
		$stmt -> close();
		$stmt = null;
	}

	static public function  usersmodalshow($table, $item, $value){
		if($item != null){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
		$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetch();
		}
		else{
		$stmt = Connection::connect()->prepare("SELECT * FROM $table");
		$stmt -> execute();
		return $stmt -> fetchAll();	
		}
		$stmt -> close();
		$stmt = null;

	}

	static public function  advusersmodalshow($table, $item, $value){
		if($item != null){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE  userid = '$_SESSION[id]'");
		$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetch();
		}
		else{
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE departid ='$_SESSION[departid]'");
		$stmt -> execute();
		return $stmt -> fetchAll();	
		}
		$stmt -> close();
		$stmt = null;

	}

	static public function  singleusermodalshow($table, $item, $value){
		if($item != null){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
		$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetch();
		}
		
	}

	static public function mdlUpdateUser($table, $item1, $value1, $item2, $value2){
		$stmt = Connection::connect()->prepare("UPDATE $table set $item1 = :$item1 WHERE $item2 = :$item2");
		$stmt -> bindParam(":".$item1, $value1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $value2, PDO::PARAM_STR);
		if ($stmt->execute()) {	
			return 'ok';
		} else {
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function usersmodaledit($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET othername = :othername,  role  = :role, name  = :name, password  = :password, username  = :username   WHERE id = :id");
		$stmt -> bindParam(":othername", $data["othername"], PDO::PARAM_STR);
		$stmt -> bindParam(":role", $data["role"], PDO::PARAM_STR);
		$stmt -> bindParam(":name", $data["name"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":username", $data["username"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $data["id"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function usersmodalpassword($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET username  = :username, password  = :password    WHERE id = '$_SESSION[id]'");
		$stmt -> bindParam(":username", $data["username"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

}


?>