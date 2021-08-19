
<?php


class usersmanagectrl
{
	
	static public function usersmanagectrladd()
	{
	if (isset($_POST["username"])) {
				
		if ($_POST["departid"] == null) {
			$departid = $_SESSION["departid"];
		}else{
			if ($_POST["role"] != "Admin") {
			$departid = $_POST["departid"];
			}
		}
				$encryptpass = crypt($_POST["username"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$table = "users";
				$data = array('othername' =>$_POST["othername"],
								'role' =>$_POST["role"],
								'departid' =>$departid,
								'password' =>$encryptpass,
								'username' =>$_POST["username"]);
				$answer = usersmodal::usersmodaladd($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "New User is added succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "manageusers";
							}
						});
						</script>';
				}

		}
	}


	static public function usersmanagectrlshow($item, $value){
		$table = "users";
		$answer = usersmodal::usersmodalshow($table, $item, $value);
		return $answer;
	}

	static public function singleusermanagectrlshow($item, $value){
		$table = "users";
		$answer = usersmodal::singleusermodalshow($table, $item, $value);
		return $answer;
	}
	static public function deprtusersmanagectrlshow($item, $value){
		$table = "users";
		$answer = Modulesmodal::advmodulesmodalshow($table, $item, $value);
		return $answer;
	}

	static public function usersmanagectrledit()
	{
	if (isset($_POST["editfirstname"])) {
				
				$encryptpass = crypt($_POST["editfirstname"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$table = "users";
				$data = array('othername' =>$_POST["editothername"],
								'role' =>$_POST["editrole"],
								'password' =>$encryptpass,
								'username' =>$_POST["editfirstname"],
								'id' =>$_POST["editid"],
							  'name' =>$_POST["editfirstname"]);
				$answer = usersmodal::usersmodaledit($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "The selected User has been edited succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "manageusers";
							}
						});
						</script>';
				}

		}
	}

	static public function usersmanagectrldel(){
		if(isset($_GET["dpid"])){
			$table = "users";
			$data = $_GET["dpid"];
			$answer = departmodal::departmodaldel($table, $data);
			if ($answer == "ok") {
				echo '<script>
						Swal.fire({
							icon: "info",
							title: "The selected User has been deleted succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "manageusers";
							}
						});
						</script>';
			}
		
		}
	}

	static public function usersmanagectrlpassword()
	{
	if (isset($_POST["username"])) {
				
				$encryptpass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$table = "users";
				$data = array('username' =>$_POST["username"],
					            'password' =>$encryptpass);
				$answer = usersmodal::usersmodalpassword($table,$data);
				if ($answer == 'ok') {
						echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "info",
							title: "Login details changed succesfully!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "logout";
							}
						});
						</script>';
				}

		}
	}

	static public function UserLoginctrl(){
		if (isset($_POST["username"])) {
			
			if (preg_match('/^[a-zA-Z0-9 ]+$/',  $_POST["username"]) &&
				preg_match('/^[a-zA-Z0-9 ]+$/',  $_POST["password"])) {
				$encryptpass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
		
				$item = "username";
				$value = $_POST["username"];
				$request = usersmanagectrl::usersmanagectrlshow($item,$value); 

				if ($request["username"] == $_POST["username"] && $request["password"] == $encryptpass) {
					 $_SESSION["loggedIn"] = "ok";
					 $_SESSION["id"] = $request["id"];
					 $_SESSION["name"] = $request["name"];
					 $_SESSION["username"] = $request["username"];
					 $_SESSION["othername"] = $request["othername"];
					 $_SESSION["role"] = $request["role"];
					 $_SESSION["departid"] = $request["departid"];

					echo'<script>
					 	window.location = "home";
						</script>';	
				}else{
					echo '<script>
						Swal.fire({
							position: "top-end",
							icon: "error",
							title: "Wrong password or username",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "login";
							}
						});
						</script>';
					}
				}else{
					echo '<script>
						Swal.fire({
							icon: "danger",
							title: "Characters Entered contain special Characters!",
							showConfirmButton: true,
							confirmButtonText: "Close"
						}).then(function(result){
							if(result.value){
								window.location = "login";
							}
						});
						</script>';
				}
			}

		}
	}


?>