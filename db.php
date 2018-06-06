<?php

class DB
{
	public static function connect($database="realtechdeals")
	{
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$connection = new mysqli($server, $username, $password, $database);

		if ($connection->connect_error) {
			die('Failed to connect');
		}

		return $connection;
	}
}


?>
