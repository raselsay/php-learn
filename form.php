<?php 
session_start();
$error=[];

// $error['username']="User name is required";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$user = input_data($_POST['username']);
	$password = input_data($_POST['password']);

	if (empty($user)) {
	  $error['username']="User name is required";		
	}else {
		if ($user == "abedin" && $password==123456) {
	    	$_SESSION['username']=$user;
	    	header('Location:home.php');	
		} else {
		   $error['username']="Username is error !";	
		}
	}
	if (! $password) {
	  $error['password']='Password is required';	
	} else{
		echo $password;
	}
}

function input_data($data)
{
	$data = htmlspecialchars($data);
	$data = stripslashes($data);
	return $data;
}

?>

<form action="form.php" method="post">
	<input type="text" name="username" value="<?php echo $_POST['username']?:' ' ?>"> <br>

	 <span style="color:red"><?php echo $error['username']?:' '  ?></span> <br>

	<input type="password" name="password"><br>

	 <span style="color:red"><?php echo $error['password']?:' ' ?></span> <br>

	<button type="submit">send</button>
</form>