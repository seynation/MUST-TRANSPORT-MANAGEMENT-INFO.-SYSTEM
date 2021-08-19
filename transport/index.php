<?php


include "controller/department.controller.php";
include "controller/users.controller.php";
include "controller/vehicles.controller.php";
include "controller/transport.controller.php";
include "controller/template.controller.php";



include "modal/department.modal.php";
include "modal/vehicles.modal.php";
include "modal/users.modal.php";
include "modal/modules.modal.php";
include "modal/transport.modal.php";



$newview = new deftemplate;
$newview ->	template();

?>