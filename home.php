<?php 
session_start();
if (! $_SESSION['username']) {
	header('Location:form.php');	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	<link rel="stylesheet" href="styel.css">
</head>
<body>

<div class="flex">
	<div class="nav">
	   <a href="index.php" class="link">Home</a>	
	</div>
	<div class="nav">
	   <a href="#" class="link">Hi : <?php echo $_SESSION['username']?></a> 
	</div>
</div>

</body>
</html>