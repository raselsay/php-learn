<?php 
 

 ?>

<form action="login.php" method="post">
	<input type="text" name="username" placeholder="Username"> <br>
	<input type="password" name="password" placeholder="Password"> <br>
	<button type="submit">Login</button>	
</form>
<?php 
  $email = "rasel.self@gmail.com";
 ?>
<a href="login.php?email=<?php echo $email?>">Forget Password ?</a>

<a href="login.php?id=1">forget password</a>
