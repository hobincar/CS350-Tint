<?php
header('Content-Type: application/json');
require_once("./lib/User.php");
$user = new User();
if ($user->sign_in($_POST["email"],$_POST["password"])){
	$o=array("success" => 1);
} else {
	$o=array("success"=>0);
}
echo json_encode($o);
?>
