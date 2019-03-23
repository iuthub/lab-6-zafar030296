<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
$cookie_name = "PowerAnimal";
$power_animal= array("Wolf","Duck","Tiger","Lion","Zebra","Elph","Jaguar","Eagle","Wood Bear","Arctic Bear","Mustang","Snake","Sheep","Bat","Leopard",);

if(isset($_COOKIE["VisitCount"])) {
	$cookie_count = ++$_COOKIE["VisitCount"];
}

if(!isset($_COOKIE[$cookie_name])) {
	$cookie_count=1;
	$cookie_value = array_rand($power_animal,1);
	setcookie($cookie_name, $power_animal[$cookie_value], time()+300);
}

setcookie("VisitCount", $cookie_count, time()+300);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PHP</title>
	</head>
	
	<body>

		<?php
			if (isset($_GET["clear"])) {
	    		setcookie ("PowerAnimal", "", time() - 3600);
	  		}
			if(!isset($_COOKIE[$cookie_name])) {
		?>
				<h1><?= "Cookie named '" . $cookie_name . "' is not set!" ?></h1>
		<?php
			} else {
		?>
				<h3><?= "Cookie '" . $cookie_name . "' is set!<br>" ?></h3>
				<h3><?= "Value is: " . $_COOKIE[$cookie_name] ?></h3>
				<h3><?= "Visit Counter: " . $_COOKIE["VisitCount"] ?></h3>
		<?php
			}
		?>

				<a href="clear_cookie.php?clear=true"><input type="button" value="Clear Cookie"></a>
	</body>
</html>