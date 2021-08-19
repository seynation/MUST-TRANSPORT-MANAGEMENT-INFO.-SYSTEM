<?php


class vehiclesmanagectrl
{
	
	static public function vehiclesmanagectrladd()
	{
		if (isset($_POST["make"])) {
				$table = "vehicles";
				$data = array('make' =>$_POST["make"],
								'model' =>$_POST["model"],
								'seats' =>$_POST["seats"],
								'plate' =>$_POST["plate"]);
				$answer = vehiclesmodal::vehiclesmodaladd($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "New Vehicle Added Succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "managevehicles";
							}
						});
						</script>';
				}
			}
	
	}

	static public function vehiclesmanagectrlshow($item, $value){
		$table = "vehicles";
		$answer = vehiclesmodal::vehiclesmodalshow($table, $item, $value);
		return $answer;
	}

	static public function vehiclesmanagectrlspecialshow($item, $value){
		$table = "vehicles";
		$answer = vehiclesmodal::vehiclesmodalspecialshow($table, $item, $value);
		return $answer;
	}


	static public function vehiclesmanagectrledit()
	{
		if (isset($_POST["editmake"])) {
	
				$table = "vehicles";
				$data = array('make' =>$_POST["editmake"],
					           'availability' =>$_POST["availability"],
								'model' =>$_POST["editmodel"],
								'seats' =>$_POST["editseats"],
								'plate' =>$_POST["editplate"],
							     'id' =>$_POST["editid"],);
				$answer = vehiclesmodal::vehiclesmodaledit($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle details edited succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "managevehicles";
							}
						});
						</script>';
				}
			}

		}
	

	static public function vehiclesmanagectrldel(){
		if(isset($_GET["dpid"])){
			$table = "vehicles";
			$data = $_GET["dpid"];
			$answer = departmodal::departmodaldel($table, $data);
			if ($answer == "ok") {
				echo '<script>
						Swal.fire({
							icon: "info",
							title: "Vehicle entry deleted succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "managevehicles";
							}
						});
						</script>';
			}
		
		}
	}

	static public function vehiclesmanagectrlshowlog($item, $value){
		$table = "transportlog";
		$answer = vehiclesmodal::vehiclesmodalshowlog($table, $item, $value);
		return $answer;
	}

	static public function vehiclesmanagectrlassign1()
	{
		if (isset($_POST["availability"])) {
				$table = "transportlog";
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"],
			                   'dateout' =>$_POST["dateout"],
			                   'timeout' =>$_POST["timeout"],
			                   'timein' =>$_POST["timein"],
			                   'availability' =>$_POST["availability"]);
				$answer = vehiclesmodal::vehiclesmodalassign($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}

		if (isset($_POST["rid"])) {
				$table = "requesttransport";
				
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"]);
				$answer = vehiclesmodal::vehiclesmodalmark($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}
	
	}

	static public function vehiclesmanagectrlavailability()
	{
		if (isset($_POST["editid"])) {
				$table = "vehicles";
				$data = array('id' =>$_POST["editid"],
			                   'availability' =>$_POST["editavailability"]);
				$answer = vehiclesmodal::vehiclesmodalavailability($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Status Changed",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "managevehicles";
							}
						});
						</script>';
				}
			}
	
	}


	static public function vehiclesmanagectrlassign()
{
	if (isset($_POST["rid"])) {
	$item= null;
	$value = null;
	$departs = vehiclesmanagectrl::vehiclesmanagectrlshowlog($item,$value);

	foreach ($departs as $key => $value) {
	if ($value["vid"] == $_POST['vid']) {

	if ($_POST['dateout'] == $value["dateout"] && 
	  ($_POST['timeout'] < $value["timeout"] || $_POST['timeout'] > $value["timein"])  && 
	    ($_POST['timein'] < $value["timeout"] || $_POST['timein'] > $value["timein"])) {

	if (isset($_POST["availability"])) {
				$table = "transportlog";
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"],
			                   'dateout' =>$_POST["dateout"],
			                   'timeout' =>$_POST["timeout"],
			                   'timein' =>$_POST["timein"],
			                   'availability' =>$_POST["availability"]);
				$answer = vehiclesmodal::vehiclesmodalassign($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}

		if (isset($_POST["rid"])) {
				$table = "requesttransport";
				
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"]);
				$answer = vehiclesmodal::vehiclesmodalmark($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}

			break;
		}

    elseif ($_POST['dateout'] != $value["dateout"]){
        	if (isset($_POST["availability"])) {
				$table = "transportlog";
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"],
			                   'dateout' =>$_POST["dateout"],
			                   'timeout' =>$_POST["timeout"],
			                   'timein' =>$_POST["timein"],
			                   'availability' =>$_POST["availability"]);
				$answer = vehiclesmodal::vehiclesmodalassign($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}

		if (isset($_POST["rid"])) {
				$table = "requesttransport";
				
				$data = array('rid' =>$_POST["rid"],
			                   'vid' =>$_POST["vid"]);
				$answer = vehiclesmodal::vehiclesmodalmark($table,$data);
				
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Vehicle Assigned!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
				}
			}
			break;
		}

    else {
    	echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "error",
							title: "Sorry, The selected vehicle is unavailable in the selected timeframe.",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "assignvehicles";
							}
						});
						</script>';
		    break;
		}
	}
}
}
}



}


?>