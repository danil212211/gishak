<?php
include ("objects.php");
class ObjectChanger {
	private $baseSource = '/var/www/14-bit/www/yktPlaces/vue-router/src/files';
	private $dataBase;
	public function __construct() {
		$this->dataBase = DataBase::getDataBase();
		
	}
	public function addObject($Object) {
		$name=$Object->getName();
		$description=$Object->getDescription();
		$files=$Object->getFiles();
		$photos=$Object->getPhotos();
		$id=$Object->getId();
		$lat=$Object->getLat();
		$lng=$Object->getLng();
		$result=mysqli_query ($this->dataBase,"INSERT INTO `YKTPLACES`.`OBJECT`( `NAME`, `DESCRIPTION`, `PHOTO`, `FILES`, `LAT`, `LNG`) VALUES ('$name','$description','$photos','$files','$lat','$lng')");

	}		
	public function changeObject($Object){         // Будем считать, что изменяется все данные кроме ID, а значит нужно поменять объект $Object в бд где айди = айди это объекта
		
		$name=$Object->getName();
		$description=$Object->getDescription();
		$files=$Object->getFiles();
		$photos=$Object->getPhotos();
		$id=$Object->getId();
		$lat=$Object->getLat();
		$lng=$Object->getLng();
		$result=mysqli_query ($this->dataBase,"UPDATE `YKTPLACES`.`OBJECT` SET NAME='$name' , DESCRIPTION='$description', PHOTO='$photos',  FILES='$files' , LAT='$lat',LNG='$lng' WHERE ID='$id'");

	}
	public function deleteObjectById($id) {
		$result = mysqli_query ($this->dataBase,"DELETE FROM `YKTPLACES`.`OBJECT` WHERE ID='".$id."'");
		return true;
	}
	
}
?>