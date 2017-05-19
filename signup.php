<?php
require_once("./lib/User.php");
if ((isset($_POST['email']) && isset($_POST['password1']) && isset($_POST['name'])&& isset($_POST['phone-number'])) && ($_POST['password1']==$_POST['password2'])){
	User::sign_up($_POST['email'],$_POST['password1'],$_POST['name'], $_POST['phone-number']);
	header('Location: http://www.starlit.kr/login.html');
} else {
	header('Location: http://www.starlit.kr/signup.html');
}
?>
