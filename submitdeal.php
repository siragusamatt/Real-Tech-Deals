<?php
include 'session.php';
include 'db.php';

SessionClient::checkIfLoggedIn();

$conn = DB::connect();

if (!$stmt = $conn->prepare("INSERT INTO realtechdeals.deals SET name=?, source=?, salePrice=?, originalPrice=?, categories=?, details=?, link=?, user_id=?")){
	die($conn->error);
	header('Location: 500.html');
}
//Bind 
if (!$stmt->bind_param("sssssssi", $_POST["name"], $_POST["source"], $_POST["salePrice"], $_POST["originalPrice"], $_POST["categories"], $_POST["details"], $_POST["link"], $_SESSION["currentUser"]["id"])) {
	die($stmt->error);
	header('Location:500.html');
}
//var_dump($_POST["name"], $_POST["source"], $_POST["salePrice"], $_POST["originalPrice"], $_POST["details"], $_POST["link"] );
//Execute
if (!$stmt->execute()) {
	die($stmt->error);
	header('Location:500.html');
}

header('Location: index.php');

?>