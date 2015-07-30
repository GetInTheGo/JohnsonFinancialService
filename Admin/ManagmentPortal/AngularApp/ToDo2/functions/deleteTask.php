<?php
require_once 'config.php'; // The mysql database connection script

if(isset($_GET['id'])) {
	$sth = $dbh->prepare("DELETE FROM tasks WHERE id = :id");
	$sth->bindValue(':id', $_GET['id']);
	$sth->execute();
}
?>