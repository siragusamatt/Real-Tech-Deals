<?php
include "session.php";
include "db.php";

SessionClient::checkIfLoggedIn();

$connection = DB::connect();
$stmt = $connection->prepare("SELECT name, source, salePrice, originalPrice, details, link, user_id FROM realtechdeals.deals WHERE id = ?");
$stmt->bind_param('i', $_GET['id']);
$stmt->execute();
$stmt->bind_result($name, $source, $salePrice, $originalPrice, $details, $link, $user_id);
if ($stmt->fetch()) {
	
} else {
	header('Location: profile.php');
}

include "header.php";

?>
<link rel="stylesheet" type="text/css" href="newdeal.css">
<form action="update-deal.php" method="post">
	<legend>Update Your Deal</legend>
		<input type="text" name="name" value="<?php echo $name ?>">
		<br>
		<input type="text" name="source" value="<?php echo $source ?>">
		<br>
		$<input type="price" name="salePrice" class="price" value="<?php echo $salePrice ?>">
		<br>
		$<input type="price" name="originalPrice" class="price" value="<?php echo $originalPrice ?>">
		<br>
		<input type="text" name="details" class="details" value="<?php echo $details ?>">
		<br>
		<input type="text" name="link" value="<?php echo $link ?>">
		<input hidden type="text" name="id" value="<?php echo $_GET['id'] ?>">
		<br>
		<button type="submit" name="submit" value="Update">Submit</button>
</form>
