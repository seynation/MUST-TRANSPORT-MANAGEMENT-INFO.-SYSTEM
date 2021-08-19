<?php

include "../controller/managemodules.controller.php";
include "../modal/modules.modal.php";
	

class ajaxmodules
{
	
	public $mdlid;
	public function  ajaxmodulesedit()
	{
		$item = "id";
		$value = $this->mdlid;
		$answer = Modulesctrl::Modulesctrlshow($item,$value); 
		echo json_encode($answer);
	}

	public $crseid;
	public function  ajaxcoarsedit()
	{
		$item = "id";
		$value = $this->crseid;
		$answer = coarsectrl::coarsectrlshow($item,$value); 
		echo json_encode($answer);
	}

	public $idclass;
	public function  ajaxclassdit()
	{
		$item = "id";
		$value = $this->idclass;
		$answer = clasesctrl::clasesctrlshow($item,$value); 
		echo json_encode($answer);
	}
	
	public $tchid;
	public function  ajaxeditsprvsn()
	{
		$item = "id";
		$value = $this->tchid;
		$answer = projectctrl::prjctsprvsnctrlshow($item,$value); 
		echo json_encode($answer);
	}
	
	public $bkstchid;
	public function  ajaxeditbksmrk()
	{
		$item = "id";
		$value = $this->bkstchid;
		$answer = projectctrl::bksprjctctrlshow($item,$value); 
		echo json_encode($answer);
	}
	
	public $iptid;
	public function  ajaxeditipbooks()
	{
		$item = "id";
		$value = $this->iptid;
		$answer = projectctrl::iptbookstrlshow($item,$value); 
		echo json_encode($answer);
	}
	
	
}

if (isset($_POST["mdlid"])) {
	$cate = new ajaxmodules();
	$cate -> mdlid = $_POST["mdlid"];
	$cate -> ajaxmodulesedit();
}

if (isset($_POST["crseid"])) {
	$cate = new ajaxmodules();
	$cate -> crseid = $_POST["crseid"];
	$cate -> ajaxcoarsedit();
}

if (isset($_POST["idclass"])) {
	$cate = new ajaxmodules();
	$cate -> idclass = $_POST["idclass"];
	$cate -> ajaxclassdit();
}
if (isset($_POST["tchid"])) {
	$cate = new ajaxmodules();
	$cate -> tchid = $_POST["tchid"];
	$cate -> ajaxeditsprvsn();
}

if (isset($_POST["bkstchid"])) {
	$cate = new ajaxmodules();
	$cate -> bkstchid = $_POST["bkstchid"];
	$cate -> ajaxeditbksmrk();
}

if (isset($_POST["iptid"])) {
	$cate = new ajaxmodules();
	$cate -> iptid = $_POST["iptid"];
	$cate -> ajaxeditipbooks();
}



?>