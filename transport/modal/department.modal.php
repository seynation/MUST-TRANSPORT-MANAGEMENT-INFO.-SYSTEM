<?php
require_once"connection.php";

class departmodal
{
	
	static public function departmodaladd($table,$data)
	{
		$stmt = Connection::connect()->prepare("INSERT INTO $table(shortform, name) VALUES (:shortform, :name)");
		$stmt -> bindParam(":shortform", $data["shortform"], PDO::PARAM_STR);
		$stmt -> bindParam(":name", $data["name"], PDO::PARAM_STR);
		if ($stmt->execute()) {			
			return 'ok';	
		} else {		
			return 'error'.var_dump($stmt->errorInfo());
		}	
		$stmt -> close();
		$stmt = null;
	}

	static public function  departmodalshow($table, $item, $value){
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


	static public function departmodaledit($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET shortform = :shortform,  name  = :name  WHERE id = :id");
		$stmt -> bindParam(":shortform", $data["shortform"], PDO::PARAM_STR);
		$stmt -> bindParam(":name", $data["name"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $data["id"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function departmodaldel($table, $data){
		$stmt = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");
		$stmt -> bindParam(":id", $data, PDO::PARAM_INT);
		if($stmt -> execute()){
		return "ok";
		}else{
			return "error";	
		}
		$stmt -> close();
		$stmt = null;
	}
}


?>