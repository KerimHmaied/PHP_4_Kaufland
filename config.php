<?php
$host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "test";
$conn = mysqli_connect($host, $mysql_user, $mysql_password);
$current_db = mysqli_select_db($conn, $mysql_db);


// Configuration
//$databaseType = 'sqlite'; // The database type
//$databasePath = 'data/database.sqlite'; // Path to SQLite database file


?>