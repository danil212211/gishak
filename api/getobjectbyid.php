<?php
	include("objects.php");
	$data = json_decode(file_get_contents("php://input"), true);
	$id = $data["Id"];
	$objects = new Objects();
	return (json_encode($objects->getObjectById($id)));
?>