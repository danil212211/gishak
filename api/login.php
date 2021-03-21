<?php
	require ("user.php");
	$data = json_decode(file_get_contents("php://input"), true);

	$user = new User($data["login"]);
	$password =$data["password"];
	$isLogin =$user ->loginUser($password);
	if ($isLogin) {
		echo ' 
		{
		  "answer": "yes",
		  "login": "'.$data["login"].'",
		  "hash": "'.$user ->getHash().'"
		}';
	} else {
		echo '
		{
		  "answer": "no"
		}';
	}
?>