<?php
	ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
define( 'BACKUP_FOLDER', 'PHPBackups' );
define( 'SHARE_WITH_GOOGLE_EMAIL', 'johnsonfinancialservicewebsite@gmail.com' );
define( 'CLIENT_ID',  '1076588136671-7q6fhje5lm0kkjnj5j4lvq98326ocog0.apps.googleusercontent.com' );
define( 'SERVICE_ACCOUNT_NAME', '1076588136671-7q6fhje5lm0kkjnj5j4lvq98326ocog0@developer.gserviceaccount.com' );
define( 'KEY_PATH', '/home/anpac/public_html/MyProject-d74675ca8171.p12');
require '/home/anpac/vendor/autoload.php';
require_once '/home/anpac/vendor/google/apiclient/src/Google/autoload.php';
//require_once '/home/anpac/vendor/google-api-php-client/src/contrib/Google_DriveService.php';
class DriveServiceHelper {
	
	protected $scope = array('https://www.googleapis.com/auth/drive');
	
	private $_service;
	
	public function __construct( $clientId, $serviceAccountName, $key ) {
		$client = new Google_Client();
		$client->setClientId( $clientId );
		
		$client->setAssertionCredentials( new Google_Auth_AssertionCredentials(
				$serviceAccountName,
				$this->scope,
				file_get_contents( $key ) )
		);
		
		$this->sef = new Google_Service_Drive($client);
	}
	
	public function __get( $name ) {
		return $this->_service->$name;
	}
	
	public function createFile( $name, $mime, $description, $content, Google_Service_Drive_ParentReference $fileParent = null ) {
		$file = new Google_Service_Drive_DriveFile();
		$file->setTitle( "test.txt");//$name );
		$file->setDescription( $description );
		
		$file->setMimeType( $mime );
		
		if( $fileParent ) {
			$file->setParents( array( $fileParent ) );
		}
		
		$createdFile = $this->sef->files->insert($file, array(
				'data' => $content,
			'mimeType' => $mime
			//'uploadtype' => 'multi-part'
		));
		
		return $createdFile['id'];
	}
	
	public function createFileFromPath( $path, $description, Google_Service_Drive_ParentReference $fileParent = null ) {
		//$fi = new finfo( FILEINFO_MIME );
		$fi = finfo_open(FILEINFO_MIME_TYPE);
		$mimeType = finfo_file($fi,$path) ; // "docx";//explode( ';', $fi->buffer(file_get_contents($path)));
		echo $path;
		echo "<br>";
		echo finfo_file($fi,$path);
		echo "<br>";
		finfo_close($fi);
		$fileName = preg_replace('/.*\//', '', $path );
		echo $mimeType;
		echo $fileName;
		return $this->createFile( $fileName, $mimeType, $description, file_get_contents($path), $fileParent );
	}
	
	
	public function createFolder( $name ) {
		return $this->createFile( $name, 'application/vnd.google-apps.folder', null, null);
	}
	
	public function setPermissions( $fileId, $value, $role = 'writer', $type = 'user' ) {
		$perm = new Google_Service_Drive_Permission();
		$perm->setValue( $value );
		$perm->setType( $type );
		$perm->setRole( $role );
		
		$this->_service->permissions->insert($fileId, $perm);
	}
	
	public function getFileIdByName( $name ) {
		$files = $this->sef->files->listFiles();
		foreach( $files['items'] as $item ) {
			if( $item['title'] == $name ) {
				return $item['id'];
			}
		}
		
		return false;
	}
	
}
//if( $_SERVER['argc'] != 2 ) {
	//echo "ERROR: no file selected\n";
	//die();
//}
$path ="/home/anpac/public_html/test.txt";// $_SERVER['argv'][1];
printf( "Uploading %s to Google Drive\n", $path );

$service = new DriveServiceHelper( CLIENT_ID, SERVICE_ACCOUNT_NAME, KEY_PATH );
echo "Creating folder...\n";
$folderId = $service->getFileIdByName( BACKUP_FOLDER );
if( ! $folderId ) {
	echo "Creating folder...\n";
	$folderId = $service->createFolder( BACKUP_FOLDER );
	$service->setPermissions( $folderId, SHARE_WITH_GOOGLE_EMAIL );
}
$fileParent = new Google_Service_Drive_ParentReference();

$fileParent->setId( $folderId );
$fileId = $service->createFileFromPath( $path, $path, $fileParent );
printf( "File: %s created\n", $fileId );
$service->setPermissions( $fileId, SHARE_WITH_GOOGLE_EMAIL );