<?php
require_once 'config.php'; // The mysql database connection script

if(isset($_POST['datas'])) {
	$datas = json_decode($_POST['datas']);
	$sth = $dbh->prepare("UPDATE Agents SET FirstName = :fname, LastName= :lname, Email= :email,
											Phone = :phone,Adress= :adress, City= :city,
											State = :state WHERE id = :id");
	$sth->bindValue(':id', $datas->agentid);
	$sth->bindValue(':fname', $datas->fname);
	$sth->bindValue(':lname', $datas->lname);
	$sth->bindValue(':email', $datas->email);
	$sth->bindValue(':phone', $datas->phone);
	$sth->bindValue(':adress', $datas->adress);
	$sth->bindValue(':city', $datas->city);
	$sth->bindValue(':state', $datas->state);
	
	$sth->execute();
}
?>