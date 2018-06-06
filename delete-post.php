<?php 
include "session.php";
include "db.php";

SessionClient::checkIfLoggedIn();
$dealId = $_GET['id'];

$connection = DB::connect();

$stmt = $connection->prepare("DELETE FROM deals where id = ? AND user_id = ?");
$stmt->bind_param("ii", $dealId, $_SESSION['currentUser']['id']);
$stmt->execute();

header('Location: profile.php');

?>