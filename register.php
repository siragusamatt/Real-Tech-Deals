<?php
session_start();

if($_POST["temp_password"] != $_POST["confirmPassword"]) {
	$_SESSION['signUpBadPassword'] = true;
	header('Location: signup.php');
}

include "db.php";
$conn = DB::connect();

//Prepare
$stmt = $conn->prepare("INSERT INTO realtechdeals.users (firstName, lastName, userName, email,  password) VALUES (?, ?, ?, ?, ?)");

//Bind
$stmt->bind_param("sssss", $_POST["firstName"], $_POST["lastName"], $_POST["userName"], $_POST["email"], $_POST["password"]);

//Execute
$stmt->execute();

$conn->close();

header('Location: index.php');

?>