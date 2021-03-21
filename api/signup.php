<?php
	require ("user.php");
	$data = json_decode(file_get_contents("php://input"), true);
	$registerUser = new User($data["login"]);
	$password = $data["password"];
	$isSignup= $registerUser -> signupUser($password);
	if ($isSignup){
	echo '{
		"answer":"good",
		"login": "'.$data["login"].'",
		"hash": "'.$registerUser ->getHash().'"
	}';
	} else {
	echo '{
		"answer":"bad"
	}';
	}
?>