<?php
 require_once '../phpscripts/EmailReader.php';
error_reporting(E_ERROR);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>


<?php
$mailbox = 'webmail.johnsonfinancialservice.com';
$username = 'cody@johnsonfinancialservice.com';
$password = 'Skibum60';
$encryption = 'tls'; // or ssl or '';
$imap = new Imap($mailbox, $username, $password, $encryption);

if($imap->isConnected()===false) {
    die($imap->getError());
}
$folders = $imap->getFolders(); // returns array of strings
foreach($folders as $folder) {
		//echo $folder;
}
$imap->selectFolder("INBOX");
$overallMessages = $imap->countMessages();
$unreadMessages = $imap->countUnreadMessages();
//echo "<br>";
//echo $overallMessages;
//echo "<br>";
//echo $unreadMessages;
$Account = new stdClass();
$emails = $imap->getMessages($withbody= false);
$Account->AllEmails = $emails;
$Account->Unread = $unreadMessages;
$Account->Total = $overallMessages;
//var_dump($Account);
//echo "test";
echo $json_response = json_encode($Account);
?>