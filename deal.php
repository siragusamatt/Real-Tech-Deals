<?php 
include "db.php";

class deal
{
	public $name = "";
	public $source = "";
	public $salePrice = "";
	public $originalPrice = "";
	public $categories = "";
	public $details = "";
	public $link = "";
	
	function __construct($name, $source, $salePrice, $originalPrice, $categories, $details, $link)
	{
		$this->name = $name;
		$this->source = $source;
		$this->salePrice = $salePrice;
		$this->originalPrice = $originalPrice;
		$this->categories = $categories;
		$this->details = $details;
		$this->link = $link;
	}
	
	public static function selectUser($user)
	{
		//Connect
		$conn = DB::connect();
		
		//Prepare
		$stmt = $connection->prepare("SELECT * FROM realtechdeals.deals WHERE user=?");
		
		//Bind
		$stmt->bind_param("s", $user);
		
		//Execute
		$stmt->execute();
		
		//Bind Result
		$stmt->bind_result($name, $source, $salePrice, $originalPrice, $categories, $details, $link);
		$deals = [];
		while ($stmt->fetch()) {
			$deal = [];
			$deal["name"] = $name;
			$deal["source"] = $source;
			$deal["salePrice"] = $salePrice;
			$deal["originalPrice"] = $originalPrice;
			$deal["categories"] = $categories;
			$deal["details"] = $details;
			$deal["link"] = $link;
			$deals[] = $deal;
		}
		return $deals;
	}
	
	
}



?>