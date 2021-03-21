<?php
include ("objects.php");
class ObjectChanger {
	private $baseSource = '/var/www/14-bit/www/yktPlaces/vue-router/src/files/';
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
		print_r($Object);
		$prevFile=time().md5($files['tmp_name']).".".pathinfo( $files['name'], PATHINFO_EXTENSION);
		$prevPhoto=time().md5($photos['tmp_name']).".".pathinfo( $photos['name'], PATHINFO_EXTENSION);
		$uploadFile = $this->baseSource.'files/'.$prevFile/;
		$uploadPhoto=$this->baseSource .'images/'.$prevPhoto.pathinfo($files['tmp_name'], PATHINFO_EXTENSION);
		move_uploaded_file($file['tmp_name'], $uploadFile).pathinfo($photos['tmp_name'], PATHINFO_EXTENSION);;
		move_uploaded_file($photos['tmp_name'], $uploadPhoto);
		copy($photos['tmp_name'], $uploadfile);
		echo "INSERT INTO `YKTPLACES`.`OBJECT`( `NAME`, `DESCRIPTION`, `PHOTO`, `FILES`, `LAT`, `LNG`) VALUES ('$name','$description','$uploadFile','$uploadPhoto','$lat','$lng')";
		$result=mysqli_query ($this->dataBase,"INSERT INTO `YKTPLACES`.`OBJECT`( `NAME`, `DESCRIPTION`, `PHOTO`, `FILES`, `LAT`, `LNG`) VALUES ('$name','$description','$uploadFile','$uploadPhoto','$lat','$lng')");

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