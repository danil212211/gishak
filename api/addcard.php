<?php
include ("objectchanger.php");
	$data = json_decode(file_get_contents("php://input"), true);
	$Name=$data["Name"];
	$Description=$data["Description"];
	$File=$data["File"];
	$Photo=$data["Photo"];
	$Lat=$data["Lat"];
	$Lng=$data["Lng"];
	$object = new ObjectY($Name,$Description,$Photo,$File,$Lat,$Lng);
	$change = new ObjectChanger();
	$change->addObject($object);
	echo "123";
?>