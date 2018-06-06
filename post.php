<?php
include "db.php";

class Post 
{
	public static function selectUser($userId)
	{
		$connection = DB::connect("realtechdeals");
		$stmt = $connection->prepare("SELECT id, name, source, salePrice, originalPrice, categories, details, link FROM realtechdeals.deals WHERE user_id = ? ORDER BY `id` DESC");
		$stmt->bind_param("i", $userId);
		$stmt->execute();
		$stmt->bind_result($id, $name, $source, $salePrice, $originalPrice, $categories, $details, $link);
		$deals = [];
		while ($stmt->fetch()) {
			$deals[] = ["id" => $id, "name" => $name, "source" => $source, "salePrice" => $salePrice, "originalPrice" => $originalPrice, "categories" => $categories, "details" => $details, "link" => $link];
		}
		return $deals;
	}
	
}


?>