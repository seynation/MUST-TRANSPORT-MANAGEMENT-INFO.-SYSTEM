<?php


class transportctrl
{
	
	static public function transportctrladd()
	{
		if (isset($_POST["FullName"])) {
				$table = "requesttransport";
				$data = array('FullName'=>$_POST["FullName"],
								'department'=>$_POST["department"],
								'destination'=>$_POST["destination"],
								'date'=>$_POST["date"],
								'nature'=>$_POST["nature"],
								'passengercount'=>$_POST["passengercount"],
								'passengernames'=>$_POST["passengernames"],
				                'userid'=>$_SESSION["id"],
				                'departid'=>$_SESSION["departid"]);
				$answer = transportmodal::transportmodaladd($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Request Delivered Succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "requesttransport";
							}
						});
						</script>';
				}
			}
	
	}



	static public function transportctrlreply()
	{
		if (isset($_POST["reply"])) {
				$table = "requesttransport";
				$data = array('reply'=>$_POST["reply"],
			                  'id'=>$_POST["id"]);
				$answer = transportmodal::transportmodalreply($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Replied Succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "requestsmade";
							}
						});
						</script>';
				}
			}
	
	}


	static public function transportctrlshow($item, $value){
		$table = "requesttransport";
		$answer = transportmodal::transportmodalshow($table, $item, $value);
		return $answer;
	}

	

	static public function transportctrlspecialshow($item, $value){
		$table = "requesttransport";
		$answer = transportmodal::transportmodalspecialshow($table, $item, $value);
		return $answer;
	}

	static public function advtransportctrlshow($item, $value){
		$table = "requesttransport";
		$answer = transportmodal::advtransportmodalshow($table, $item, $value);
		return $answer;
	}

	static public function dprttransportctrlshow($item, $value){
		$table = "requesttransport";
		$answer = transportmodal::dprttransportmodalshow($table, $item, $value);
		return $answer;
	}


	
	}


?>