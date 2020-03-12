<?php 

// var_dump($_SERVER['SERVER_PROTOCOL']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {		
	// var_dump($_SERVER);
	echo $_REQUEST['fname'];
	echo $_REQUEST['email'];
}
if ($_SERVER['REQUEST_METHOD']=="GET") {
	echo $_GET['id'];
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Email: <input type="text" name="email">
  <input type="submit">
</form>

<a href="test.php?id=2">Send</a>
