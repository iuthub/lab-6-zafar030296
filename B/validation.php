<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php

			if (isset($_POST["username"])&&isset($_POST["password"])) {
		
						// $file = 'loggedin.txt';
						// $accounts = file_get_contents($file);
						// $accounts = explode("\r", $accounts);
						$accounts = file('loggedin.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
						$flag=0;
						if(isset($accounts)){
							foreach ($accounts as $value) {
								$pair = explode(" ", $value);
								if($pair[0]==$_POST["username"]&&$pair[1]==$_POST["password"]){
									$flag=1;
									break;
								}
							}
						}else{
							header('location: http://localhost/login.php');
                			die;
						}
						if($flag==0){
			    			header('location: http://localhost/login.php');
                			die;	
						}
						// $newaccount = $_REQUEST["name"].";".$_REQUEST["section"].";".$_REQUEST["credit_card"].";".$_REQUEST["credit_type"]."\r\n";
						// file_put_contents($file, $newaccount, FILE_APPEND);
			

				// if($_POST["username"]=="Suxrobkhodja"){
	    				
	   //  		}
	   //  		else{
	   //  			header('location: http://localhost/login.php');
    //             	die;
	   //  		}
	  		}
	  		else{
	  			header('location: http://localhost/login.php');
                die;
	  		}

$cookie_name = "username_c";
$cookie_password = "password_c";
$cookie_visit = "VisitCount";

if (isset($_POST["username"])&&isset($_POST["password"])) {


		// if(isset($_COOKIE[$cookie_visit])) {
		// 	$cookie_count = ++$_COOKIE[$cookie_visit];
		// }

		if(!isset($_COOKIE[$cookie_name])) {
			$cookie_count=1;
			setcookie($cookie_name, $_POST["username"], time()+300);
			setcookie($cookie_password, $_POST["password"], time()+300);
		}
		else{
			if($_POST["username"]==$_COOKIE[$cookie_name]){
				if(isset($_COOKIE[$cookie_visit])) {
					$cookie_count = ++$_COOKIE[$cookie_visit];
				}
				else{
					///////////////////////////////////////////
				}
			}
			else{
				$cookie_count=1;
				setcookie($cookie_name, $_POST["username"], time()+300);
				setcookie($cookie_password, $_POST["password"], time()+300);
			}
		}

		setcookie($cookie_visit, $cookie_count, time()+300);
}


// if(isset($_COOKIE[$cookie_visit])) {
// 	$cookie_count = ++$_COOKIE[$cookie_visit];
// }

// if(!isset($_COOKIE[$cookie_name])) {
// 	$cookie_count=1;
// 	setcookie($cookie_name, $_POST["username"], time()+300);
// 	setcookie($cookie_password, $_POST["password"], time()+300);
// }

// setcookie($cookie_visit, $cookie_count, time()+300);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validation</title>
	</head>
	
	<body>

				<h1>
		<?php
			if(isset($_COOKIE[$cookie_name])) {
				if($_POST["username"]==$_COOKIE[$cookie_name]){
					echo "Hello Dear ".$_COOKIE[$cookie_name]." !!!";
				}
				else{
					echo "---Your first time on page---";
				}
			} else{
				echo "---Your first time on page---";
			}
		?>
		</h1>

		<h3>
		<?php
			if(!isset($_COOKIE[$cookie_visit])) {
			    echo "Cookie named '" . $cookie_visit . "' is not set!";
			} else {
				if($_POST["username"]==$_COOKIE[$cookie_name]){
					echo "Cookie '" . $cookie_visit . "' is set!<br>";
			    	echo "It is your: " . $_COOKIE[$cookie_visit]." visit";
				}
				else{
					echo "Cookie named '" . $cookie_visit . "' is not set!";
				}
			}
		?>
		<h3>
		<a href="clear_cooks.php"><input type="button" value="Log Out"></a>


<!-- 		<h1>HI <?= $_COOKIE[$cookie_name]?></h1>
		<h3> -->
<!-- 		<?php
			if(!isset($_COOKIE[$cookie_visit])) {
			    echo "Cookie named '" . $cookie_visit . "' is not set!";
			} else {
			    echo "Cookie '" . $cookie_visit . "' is set!<br>";
			    echo "It is your: " . $_COOKIE[$cookie_visit]." visit";
			}
		?> -->
<!-- 		<h3>
		<a href="clear_cooks.php"><input type="button" value="Log Out"></a> -->

	</body>
</html>