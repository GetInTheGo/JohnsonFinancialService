<?php
// Start the session
session_start();
require_once 'config.php'; // The mysql database connection script


$arr = array();
$sth = $dbh->prepare("SELECT * FROM Agents where Active = 1");
$sth->execute();
$results = $sth->fetchAll();
foreach($results as $result) {
	
	array_push($arr, array(
			'agentid' => $result['id'],
			'fname' => $result['FirstName'],
			'lname' => $result['LastName'],
			'phone' => $result['Phone'],
			'city' => $result['City'],
			'state' => $result['State'],
			'email' => $result['Email'],
			'adress' => $result['Adress'],
			'active' => $result['Active'],
			'profilepic' => $result['profilepic'],
			
			
			));
}

// JSON-encode the response
echo $json_response = json_encode($arr);
?>