<?php
require_once("./User.php");
class Customer extends User
{
	protected $reservation_list;
	protected $coupon;
	public function sign_up($email, $password, $name, $phone_number){

	}
}
$customer=new Customer();
$customer->sign_in("fly2iy@starlit.kr","asdf123123");
echo 3;

?>
