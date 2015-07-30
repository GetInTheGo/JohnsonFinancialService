<?php
require_once 'config.php'; // The mysql database connection script

if(isset($_GET['completed'])) {
	$completed = ($_GET['completed'] == 'true') ? true : false;
	$sth = $dbh->prepare("UPDATE tasks SET completed = :completed");
	$sth->bindValue(':completed', $completed);
	$sth->execute();
}
?>