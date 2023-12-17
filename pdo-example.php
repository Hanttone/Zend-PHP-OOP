<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant','vagrant');
	
	$query = $pdo->prepare('INSERT INTO customers (firstname,lastname) VALUES (?,?)');
	
	$fname = 'Lisa';
	$lname = 'Lindholm';
	
	// Parameter bindings
	$query->bindParam(1, $fname);
	$query->bindParam(2, $lname);
	
	// Execute the SQL statement
	$query->execute();
	
} catch (PDOException $e) {

	echo $e->getMessage();
	
}
