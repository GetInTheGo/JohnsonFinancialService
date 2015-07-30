<?php
require_once 'config.php'; // The mysql database connection script

$datas = json_decode($_POST['datas']);

$sth = $dbh->prepare("INSERT INTO tasks(name, completed, priority) VALUES (:name, :completed, :priority)");
$sth->bindValue(':name', $datas->name);
$sth->bindValue(':completed', $datas->completed);
$sth->bindValue(':priority', $datas->priority);
$sth->execute();
$id = $dbh->lastInsertId(); // We get the last inserted ID back to put it in $scope.todos's array.

echo json_encode((int)$id); // Once again, we need to cast $id, because of mySQL's love for strings.
?>