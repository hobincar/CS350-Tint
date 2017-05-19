<?php
require_once("./lib/Sql.php");
session_start();
class User
{
	protected $email;
	protected $password;
	protected $name;
	protected $phone_number;
	protected $type;
	protected function make_a_reservation($email,$check_in,$check_out,$type,$adult,$children, $options){
	
	}
	protected function cancel_a_reservation($reservation_id){

	}
	protected function modify_a_reservation($reservation_id,$check_in, $check_out, $type, $adult, $children, $options){

	}
	public function sign_in_session(){
		$user =$_SESSION["uid"];
		$this->email=$user[0];
		$this->name = $user[1];
		$this->phone_number = $user[2];
		$this->type=$user[3];
	}
	public function sign_in($email, $password){
		$connect = new Sql();
		$connect->connect();
		$connect->query("SELECT email, name, phone_number, type FROM Users WHERE email='".$email."' and password='".$password."';");
		if($connect->result){
			if (mysqli_num_rows($connect->result)==0){
				print("login failed!");
				print("redirected to login page!");
				return false;
			}
			$result = $connect->fetch();
			$this->email = $result->email;
			$this->name = $result->name;
			$this->phone_number = $result->phone_number;
			$this->type = $result->type;
			$_SESSION["uid"] = array($this->email,$this->name,$this->phone_number,$this->type);
			return true;
		} else {
			print("login failed!");
			print("redirected to login page!");
			return false;

		}
		$connect->close();

	}
	public function sign_out(){
		unset($_SESSION['uid']);

	}
	public function get_user_info(){

	}
	public function modify_user_info($password, $name, $phone_number){
		
	}
	public function is_admin(){
		if ($this->type==1){
			return true;
		} else {
			return false;
		}
	}
	public static function sign_up($email, $password, $name, $phone_number){
		$type = "0";
		$connect = new Sql();
		$connect->connect();
		$query="INSERT INTO Users ( email ,  password , name , phone_number , type ) VALUES ('".$email."','".$password."','".$name."','".$phone_number."',".$type.")";
		$connect->query($query);
		print($query);

	}
}
?>
