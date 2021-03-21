<?php
require('database.php');
class User {
	private $userLogin = 'none';
	private $userHash = 'none';
	private $database;
	private function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function __construct($userLoginBuffer) {
		$this->userLogin=$userLoginBuffer;
		$this->database = DataBase::getDataBase();
	}		
	public function setHash($userHashBuffer) {
		$this->userHash = $userHashBuffer;
	}
	public function signupUser($userPassword) {
		

			$Salt= $this->generateRandomString();
			$password_hash=hash('SHA512',$Salt.$userPassword.$Salt);
			$request = mysqli_query($this->database,"SELECT * FROM  `YKTPLACES`.`USER` WHERE `LOGIN`='".$this->userLogin."'");
			$array=mysqli_fetch_array($request);
			if ($array["LOGIN"]=="") {
			$this->userHash=$password_hash;
			$sql = mysqli_query($this->database,"INSERT INTO `YKTPLACES`.`USER` (`LOGIN`, `HASH` , `SALT`) VALUES ('".$this->userLogin."', '".$password_hash."','".$Salt."');");				
			return true;
			} else {
				return false;
			}
		
	}
	public function loginUser($userPassword) {
			$request = mysqli_query($this->database,"SELECT * FROM  `YKTPLACES`.`USER` WHERE `LOGIN`='".$this->userLogin."'");
			$array=mysqli_fetch_array($request);
			$Salt=$array["SALT"];
			$hash_user=hash('SHA512',$Salt.$userPassword.$Salt);
			$hash_bd=$array["HASH"];
			if ($hash_bd==$hash_user) {
			$this->userHash=$password_hash;
			return true;
			} else {
			return false;
			}
	}
	
	public function getLogin() {
		return $this->userLogin;
	}

	public function getHash() {
		return $this->userHash;
	}
}
?>