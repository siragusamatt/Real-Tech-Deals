<?php 
include "session.php";
include "db.php";

SessionClient::checkIfLoggedIn();
$postId = $_GET['id'];

$connection = DB::connect();

$stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i",$_SESSION['currentUser']['id']);
$stmt->execute();

header('Location: index.php');

?>