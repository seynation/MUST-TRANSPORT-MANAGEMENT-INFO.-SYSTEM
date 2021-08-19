<?php
include "../controller/users.controller.php";
include "../modal/users.modal.php";



class ajaxusers
{
	
	public $userid;
	public function  ajaxusersedit()
	{
		$item = "id";
		$value = $this->userid;
		$answer = usersmanagectrl::usersmanagectrlshow($item,$value);
		echo json_encode($answer);
	}
}

if (isset($_POST["userid"])) {
	$cate = new ajaxusers();
	$cate -> userid = $_POST["userid"];
	$cate -> ajaxusersedit();
}

?>