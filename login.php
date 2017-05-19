<?php
require_once("./lib/User.php");
$user = new User();
if ($user->sign_in($_POST["email"],$_POST["password"])){
	header('Location: http://www.starlit.kr/index.php');
} else {
	header('Location: http://www.starlit.kr/login.html');
}

?>
