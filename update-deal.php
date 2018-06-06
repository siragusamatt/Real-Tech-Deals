<?php 
include 'session.php';
include 'db.php';

SessionClient::checkIfLoggedIn();

$connection = DB::connect();

$stmt = $connection->prepare("UPDATE realtechdeals.deals SET name = ?, source = ?, salePrice = ?, originalPrice = ?, categories = ?, details = ?, link = ? WHERE id = ?");
$bindWorked = $stmt->bind_param("sssssssi", $_POST['name'], $_POST['source'], $_POST['salePrice'], $_POST['originalPrice'], $_POST['categories'], $_POST['details'], $_POST['link'], $_POST['id']);

if (!$bindWorked) {
	die($stmt->error);
}

$executeWorked = $stmt->execute();

if (!$executeWorked) {
	die($stmt->error);
}

header('Location: index.php');

?>