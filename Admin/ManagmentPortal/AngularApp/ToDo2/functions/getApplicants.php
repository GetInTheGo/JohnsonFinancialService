<?php
// Start the session
session_start();
require_once 'config.php'; // The mysql database connection script


$arr = array();
$sth = $dbh->prepare("SELECT * FROM r_applicants where Archived is NULL");
$sth->execute();
$results = $sth->fetchAll();
foreach($results as $result) {
	
	array_push($arr, array(
			'applicantid' => $result['ApplicantID'],
			'name' => $result['FirstName'],
			
			
			));
}

// JSON-encode the response
echo $json_response = json_encode($arr);
?>