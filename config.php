<?php
/**
 * Configuration for database connection
 *
*/
$servername = "127.0.0.1";
$username 	= "root";
$password 	= "sarita123";
$charset = 'utf8mb4';
$dsn        = "mysql:host=$host;charset=$charset";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
