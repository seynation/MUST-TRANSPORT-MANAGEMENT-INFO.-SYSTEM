<?php
include "../controller/vehicles.controller.php";
include "../modal/vehicles.modal.php";
include "../modal/transport.modal.php";
include "../controller/transport.controller.php";




class ajaxvehicles
{
	
	public $vid;
	public function  ajaxvehiclesedit()
	{
		$item = "id";
		$value = $this->vid;
		$answer = vehiclesmanagectrl::vehiclesmanagectrlshow($item,$value);
		echo json_encode($answer);
	}
}

if (isset($_POST["vid"])) {
	$cate = new ajaxusers();
	$cate -> vid = $_POST["vid"];
	$cate -> ajaxvehiclesedit();
}



?>