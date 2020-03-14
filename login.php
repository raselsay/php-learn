<?php 
// var_dump($_SERVER);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (! empty($username)) {
		if ($username=='abedin' && $password == 'password') {
			echo 'You are login';
		} else {
			echo "Username and Password wrong";
		}
	}else{	
		echo "User name is empty";		
	}

}

if ($_SERVER['REQUEST_METHOD']=='GET') {
	$id = $_GET['id'];
	
	echo (integer) $id+10;
}


 ?>