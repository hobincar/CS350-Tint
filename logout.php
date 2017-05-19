<?php
require_once("./lib/User.php");
$user = new User();
$user->sign_out();
header('Location: http://www.starlit.kr/index.php');

?>
