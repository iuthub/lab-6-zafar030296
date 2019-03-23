<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>ClearCookie</title>
	</head>
	
	<body>

		<?php
			if (isset($_GET["clear"])) {
	    		setcookie ("PowerAnimal", "", time() - 3600);
	  		}
		?>
		<h1>Cookie is cleared!!!</h1>
		<a href="poweranimal.php"><input type="button" value="Back"></a>
	</body>
</html>