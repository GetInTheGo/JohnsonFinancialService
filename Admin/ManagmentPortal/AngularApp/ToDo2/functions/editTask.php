<?php
require_once 'config.php'; // The mysql database connection script

if(isset($_POST['datas'])) {
	$datas = json_decode($_POST['datas']);
	$sth = $dbh->prepare("UPDATE tasks SET name = :name, priority= :priority WHERE id = :id");
	$sth->bindValue(':id', $datas->id);
	$sth->bindValue(':name', $datas->name);
	$sth->bindValue(':priority', $datas->priority);
	$sth->execute();
}
?>