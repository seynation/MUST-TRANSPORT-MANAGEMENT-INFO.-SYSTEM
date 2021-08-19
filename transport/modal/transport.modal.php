<?php


require_once"connection.php";

class transportmodal
{


	static public function transportmodaladd($table,$data)
	{
		$stmt = Connection::connect()->prepare("INSERT INTO $table (FullName, department, destination, date, nature, passengercount, passengernames, userid, departid) VALUES (:FullName, :department, :destination, :date, :nature, :passengercount, :passengernames, :userid, :departid)");
		$stmt -> bindParam(":FullName", $data["FullName"], PDO::PARAM_STR);
		$stmt -> bindParam(":department", $data["department"], PDO::PARAM_STR);
		$stmt -> bindParam(":destination", $data["destination"], PDO::PARAM_STR);
		$stmt -> bindParam(":date", $data["date"], PDO::PARAM_STR);
		$stmt -> bindParam(":nature", $data["nature"], PDO::PARAM_STR);
		$stmt -> bindParam(":passengercount", $data["passengercount"], PDO::PARAM_STR);
		$stmt -> bindParam(":passengernames", $data["passengernames"], PDO::PARAM_STR);
		$stmt -> bindParam(":userid", $data["userid"], PDO::PARAM_STR);
		$stmt -> bindParam(":departid", $data["departid"], PDO::PARAM_STR);
		
		if ($stmt->execute()) {			
			return 'ok';	
		} else {		
			return 'error'.var_dump($stmt->errorInfo());
		}	
		$stmt -> close();
		$stmt = null;
	}

	
	static public function transportmodalreply($table,$data){
	$stmt = Connection::connect()->prepare("UPDATE $table SET reply = :reply WHERE id = :id");
		$stmt -> bindParam(":reply", $data["reply"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $data["id"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'ok';
		} else {	
			return 'error';
		}
		$stmt -> close();
		$stmt = null;
	}


	static public function  transportmodalshow($table, $item, $value){
		
		$stmt = Connection::connect()->prepare("SELECT * FROM $table");
		//$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetchAll();
			
	}

	static public function  transportmodalshowlog($table, $item, $value){
		
		$stmt = Connection::connect()->prepare("SELECT * FROM $table");
		//$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetchAll();
			
	}
	
	static public function  transportmodalspecialshow($table, $item, $value){
		
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE reply='AUTHORIZED'");
		//$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
		$stmt -> execute();
			return $stmt -> fetchAll();
		
			
	}

	static public function  advtransportmodalshow($table, $item, $value){
		if($item == null){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE userid ='$_SESSION[id]'");
		$stmt -> execute();
		return $stmt -> fetchAll();	
		}
	}


	static public function  dprttransportmodalshow($table, $item, $value){
		if($item == null){
		$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE departid ='$_SESSION[departid]'");
		$stmt -> execute();
		return $stmt -> fetchAll();	
		}
	}

}


?>