<?php
// Start the session
session_start();
require_once 'config.php'; // The mysql database connection script


$_SESSION['CurrentApplication'] = 1;
$arr = array();
$sth = $dbh->prepare("SELECT * FROM r_tasks Where ApplicantID = :ApplicantID");
$sth->bindValue(':ApplicantID', $_SESSION['CurrentApplication']);
$sth->execute();
$results = $sth->fetchAll();


foreach($results as $result) {
	array_push($arr, array(
			'id' => $result['id'],
			'name' => $result['name'],
			'completed' => (bool)$result['completed'], // If not casted, it'll be perceived as a string because of the MySQL Tinyint(1) stuff.
			'priority' => $result['priority'],
			'applicantid' => $result['ApplicantID']
			));
}

// JSON-encode the response
echo $json_response = json_encode($arr);
?>