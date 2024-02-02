<?php
define('HOST_STUNNEL', 'localhost');
define('DB_HOST', HOST_STUNNEL);
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'toy_store');

// Create a  MySQLi connection
$connexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the connection is successful
if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_set_charset($connexion, 'utf8');


?>
