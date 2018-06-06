<?php 
session_start();

$email = $_POST['email'];
$temp_password = $_POST['temp_password'];
$submit = $_POST['submit'];

include "db.php";
$conn = DB::connect();

//Prepare
$stmt = $conn->prepare("SELECT * FROM realtechdeals.users where email = ?");
if(!$stmt) {
	die($conn->error);
}

//Bind
if (!$stmt->bind_param("s", $email)) {
	die($stmt->error);
}

//Execute
if(!$stmt->execute()) {
	die($stmt->error);
}

//Bind result
if (!$stmt->bind_result($firstName, $lastName, $username, $email, $password, $id)) {
	die($stmt->error);
}

//Fetch
if (!$stmt->fetch()) {
	header('Location: login.php');
}



if ($temp_password == $password) {
	$_SESSION['loggedIn'] = true;
	$_SESSION['currentUser'] = ["firstName" => $firstName,  "lastName" => $lastName, "userName" => $userName, "email" => $email, "id" => $id];
	header('Location: newdeal.php');
} else {
	header('Location:signup.php');
}

//var_dump($email, $temp_password, $password);
	


?>