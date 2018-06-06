<?php
include "db.php";

$connection = DB::connect();

echo json_encode($connection-query("SELECT * FROM deals ORDER BY id DESC LIMIT 1")->fetch_assoc());


 ?>