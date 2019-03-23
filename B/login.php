<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php

if(isset($_COOKIE["username_c"])) {
	// $username=isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
	$username=$_COOKIE["username_c"];
	$password=$_COOKIE["password_c"];
	$visits=$_COOKIE["VisitCount"];
}
else{
	$username="";
	$password="";
	$visits="";
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>LOGIN</title>
	</head>
	
	<body>

		<form action="validation.php" method="post">
			<label>Username: <input type="text" name="username" pattern="^[A-Za-z]+\w+" title="Username first is LETTER" value="<?= $username ?>"></label>
			<label>Password: <input type="password" name="password" value="<?= $password ?>"></label>
			<input type="submit" value="Log In">
		</form>

		<!-- <a href="clear_cookie.php?clear=true"><input type="button" value="Clear Cookie"></a> -->
	</body>
</html>