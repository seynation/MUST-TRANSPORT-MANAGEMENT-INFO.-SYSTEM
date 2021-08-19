<?php

require_once"connection.php";

class vehiclesmodal
{


	static public function vehiclesmodaladd($table,$data)
	{
		$stmt = Connection::connect()->prepare("INSERT INTO $table(make, model, seats, plate) VALUES (:make, :model, :seats, :plate)");
		$stmt -> bindParam(":make", $data["make"], PDO::PARAM_STR);
		$stmt -> bindParam(":model", $data["model"], PDO::PARAM_STR);
		$stmt -> bindParam(":seats", $data["seats"], PDO::PARAM_STR);
		$stmt -> bindParam(":plate", $data["plate"], PDO::PARAM_STR);
		
		if ($stmt->execute()) {			
			return 'ok';	
		} else {		
			return 'error'.var_dump($stmt->errorInfo());
		}	
		$stmt -> close();
		$stmt = null;
	}

	static public function  vehiclesmodalshow($table, $item, $value){
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

	static public function  vehiclesmodalspecialshow($table, $item, $value){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE availability='AVAILABLE' ");
		$stmt -> execute();
		return $stmt -> fetchAll();	
		
		$stmt -> close();
		$stmt = null;

	}


	static public function vehiclesmodaledit($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET make = :make,  model  = :model, seats  = :seats, plate  = :plate, availability = :availability WHERE id = :id");
		$stmt -> bindParam(":make", $data["make"], PDO::PARAM_STR);
		$stmt -> bindParam(":model", $data["model"], PDO::PARAM_STR);
		$stmt -> bindParam(":seats", $data["seats"], PDO::PARAM_STR);
		$stmt -> bindParam(":plate", $data["plate"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $data["id"], PDO::PARAM_STR);
		$stmt -> bindParam(":availability", $data["availability"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function vehiclesmodalmark($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET vid = :vid WHERE id = :rid");
		
		$stmt -> bindParam(":vid", $data["vid"], PDO::PARAM_STR);
		$stmt -> bindParam(":rid", $data["rid"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function vehiclesmodalassign($table,$data){
	$stmt = Connection::connect()->prepare("INSERT INTO $table(vid, rid, dateout, timeout, timein, availability) VALUES (:vid, :rid, :dateout, :timeout, :timein, :availability)");

		$stmt -> bindParam(":vid", $data["vid"], PDO::PARAM_STR);
		$stmt -> bindParam(":rid", $data["rid"], PDO::PARAM_STR);
		$stmt -> bindParam(":dateout", $data["dateout"], PDO::PARAM_STR);
		$stmt -> bindParam(":timeout", $data["timeout"], PDO::PARAM_STR);
		$stmt -> bindParam(":timein", $data["timein"], PDO::PARAM_STR);
		$stmt -> bindParam(":availability", $data["availability"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error'.var_dump($stmt->errorInfo());
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function vehiclesmodalavailability($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET availability = :availability WHERE id = :id");
		$stmt -> bindParam(":id", $data["id"], PDO::PARAM_STR);
		$stmt -> bindParam(":availability", $data["availability"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}

	static public function  vehiclesmodalshowlog($table, $item, $value){
		
		$stmt = Connection::connect()->prepare("SELECT * FROM $table");
		//$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetchAll();
			
	}
	


	static public function vehiclesmodaldel($table, $data){
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