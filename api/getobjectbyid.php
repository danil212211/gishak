<?php
	include("objects.php");
	$data = json_decode(file_get_contents("php://input"), true);
	$id = $data["Id"];
	$objects = new Objects();
	echo (json_encode($objects->getObjectById($id)));
?>