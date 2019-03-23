<?php
	setcookie ("username_c", "", time() - 3600);
	setcookie ("password_c", "", time() - 3600);
	setcookie ("VisitCount", "", time() - 3600);
	header('location: http://localhost/login.php');
    die;
?>
