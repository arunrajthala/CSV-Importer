<?php
/**
 * Migrate date from table `original_data` to `migrated_data`
 *
*/

// database configuration
require "config.php";

try {
	// insert into database
	$connection = new PDO($dsn, $username, $password, $options);
	$sql = 'UPDATE migrated_data
	  JOIN original_data
	    ON (original_data.product_code, original_data.product_label) = (migrated_data.sku, migrated_data.name)
	   SET migrated_data.product_id = original_data.product_id
	';

	$statement = $connection->prepare($sql);
	$statement->execute();
	echo $sql;


} catch(PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
}
