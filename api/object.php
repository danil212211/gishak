<?php
class ObjectY {
	public $Name;
	public $Description;
	public $Photos;
	public $Files;
	public $Id;
	public $Lat;
	public $Lng;
	public function __construct ($name ,$desc,$photo,$file,$lat,$lng,$id)
	{
		$this->Name=$name;
		$this->Description=$desc;
		$this->Photos=$photo;
		$this->Files=$file;
		$this->Id=$id;
		$this->Lat=$lat;
		$this->Lng=$lng;
	}
	public function getName() {
		return $this->Name;
	}
	public function getDescription() {
		return $this->Description;
	}
	public function getPhotos() {
		return $this->Photos;
	}
	public function getFiles() {
		return $this->Files;
		
	}
	public function getId() {
		return $this->Id;
		
	}
	public function getLat() {
		return $this->Lat;
		
	}
	public function getLng() {	
		return $this->Lng;
		
	}
}
?>