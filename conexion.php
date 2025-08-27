<?php

	function conexion(){

	$host = "host=dpg-d2nmblemcj7s73cov7tg-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=exampledbnube2_cdct";
	$user = "user=exampledbnube2_cdct_user";
	$password = "password=9jmW5xCE5INtQGjhWvquOyhl5pYePmA0";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>