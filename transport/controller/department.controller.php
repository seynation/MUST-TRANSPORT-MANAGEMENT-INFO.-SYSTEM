<?php




class departctrl
{
	
	static public function departctrladd()
	{
	if (isset($_POST["departname"])) {
				
		

				$table = "departs";
				$data = array('shortform' =>$_POST["shortform"],
							  'name' =>$_POST["departname"]);
				$answer = departmodal::departmodaladd($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "success",
							title: "New Department is added succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "departments";
							}
						});
						</script>';
				}

		}
	}

	static public function departctrlshow($item, $value){
		$table = "departs";
		$answer = departmodal::departmodalshow($table, $item, $value);
		return $answer;
	
	}


	static public function departctrledit()
	{
	if (isset($_POST["editname"])) {
				
				$table = "departs";
				$data = array('shortform' =>$_POST["editshortform"],
								'id' =>$_POST["editid"],
							  'name' =>$_POST["editname"]);
				$answer = departmodal::departmodaledit($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Department Name is Edited succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "departments";
							}
						});
						</script>';
				}

		}
	}

	static public function departctrldel(){
		if(isset($_GET["dpid"])){
			$table = "departs";
			$data = $_GET["dpid"];
			$answer = departmodal::departmodaldel($table, $data);
			if ($answer == "ok") {
				echo '<script>
						Swal.fire({
							icon: "info",
							title: "The selected department has been deleted succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "departments";
							}
						});
						</script>';
			}
		
		}
	}
}





?>