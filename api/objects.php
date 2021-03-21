<?php
include ("database.php");
include ("object.php");
class Objects {
	protected $objectCollection = array();
	protected $dataBase;
	
	public function __construct() {
		$this->dataBase=DataBase::getDataBase();
		$request=mysqli_query($this->dataBase,"SELECT * FROM `YKTPLACES`.`OBJECT`");
		$array=mysqli_fetch_array($request);
		do{
			$buffer = new ObjectY($array["NAME"],$array["DESCRIPTION"],$array["PHOTO"],$array["FILES"],$array["LAT"],$array["LNG"],$array["ID"]);
			
			array_push($this->objectCollection,$buffer);
		} while ($array=mysqli_fetch_array($request));	
	}
	public function getData(){
		return $this->objectCollection;
		
	}
	public function getJsonData() {
		return json_encode($this->objectCollection);
	}
	public function getObjectById($id) {
		for ($i = 0; $i<count($this->objectCollection);$i++) {
			if ($this->objectCollection[$i]->Id==$id) 
			{
				return $this->objectCollection[$i];
			}
			
		}
		return null;
		
		
	}
}
?>