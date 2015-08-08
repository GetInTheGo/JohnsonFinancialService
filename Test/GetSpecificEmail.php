<?php
 require_once '../phpscripts/EmailReader.php';
//$datas = json_decode($_POST['datas']);
$data =$_GET["id"];
$to = $data;//$datas->emailid; // this is your Email address

$mailbox = 'webmail.johnsonfinancialservice.com';
$username = 'cody@johnsonfinancialservice.com';
$password = 'Skibum60';
$encryption = 'tls'; // or ssl or '';
$imap = new Imap($mailbox, $username, $password, $encryption);

if($imap->isConnected()===false) {
    die($imap->getError());
}
//$folders = $imap->getFolders(); // returns array of strings
//foreach($folders as $folder) {
		//echo $folder;
//}
$imap->selectFolder("INBOX");
$overallMessages = $imap->countMessages();
$unreadMessages = $imap->countUnreadMessages();
//echo "<br>";
//echo $overallMessages;
//echo "<br>";
//echo $unreadMessages;
//$Account = new stdClass();
$email = $imap->getMessage($to);
//$Account->AllEmails = $emails;
//$Account->Unread = $unreadMessages;
//$Account->Total = $overallMessages;
//var_dump($Account);
//echo "test";
echo $email['body'];//$json_response = json_encode($email);
?>