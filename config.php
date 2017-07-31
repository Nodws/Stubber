<?
// Site
$domain = 'stubb.er';
$ssl = true; 
$cache = false; //Use html files
$cdir = 'uid'; //Cache directory no trailing slash, allow write
$debug = true; //Show errors
$pages = Array('about','contact'); //List of pages excluded from redirection

// Database
$conn = Array('localhost', 'root', 'pass', 'db');




/*  -=-=-=-=-=-=-=-=-=
	No need to edit anything below this line
	-=-=-=-=-=-=-=-=-=	*/

$uid = ctype_alnum($_GET[uid]) ? $_GET[uid] : false;

function conn()
{	global $conn;
// Connect and select the database
$db = new mysqli($conn[0], $conn[1], $conn[2], $conn[3]);
$db->set_charset("utf8");
mb_internal_encoding('UTF-8');
return $db;
}

define('STUB', true); 

if($debug){
	error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
	ini_set('display_errors',true);
}

require_once "stubber-lib.php";