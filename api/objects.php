<?php
include ("database.php");
include ("object.php");
class Objects {
	private $objectCollection = array();
	private $database;
	
	public function __construct() {
		$this->database=DataBase::getDataBase();
		$request=mysqli_query($this->database,"SELECT * FROM `YKTPLACES`.`OBJECT`");
		$array=mysqli_fetch_array($request);
		do{
			$buffer = new ObjectY($array["NAME"],$array["DESCRIPTION"],$array["PHOTO"],$array["FILE"],$array["ID"],$array["LAT"],$array["LNG"]);
			
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