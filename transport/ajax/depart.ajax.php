<?php
include "../controller/department.controller.php";
include "../modal/department.modal.php";
include "../controller/accountsection.controller.php";
include "../modal/accountsection.modal.php";

class ajaxdeparts
{
	
	public $dprtid;
	public function  ajaxdepartsedit()
	{
		$item = "id";
		$value = $this->dprtid;
		$answer = departctrl::departctrlshow($item,$value);
		echo json_encode($answer);
	}

	public $prrid;
	public function  ajaxpriceedit()
	{
		$item = "id";
		$value = $this->prrid;
		$answer = pricelistctrl::pricelistctrlshow($item,$value);
		echo json_encode($answer);
	}


	
}

if (isset($_POST["dprtid"])) {
	$cate = new ajaxdeparts();
	$cate -> dprtid = $_POST["dprtid"];
	$cate -> ajaxdepartsedit();
}

if (isset($_POST["prrid"])) {
	$cate = new ajaxdeparts();
	$cate -> prrid = $_POST["prrid"];
	$cate -> ajaxpriceedit();
}

?>