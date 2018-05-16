<?
// Site
$domain = 'stubb.er';
$ssl = true; 
$cache = false; //Use html files
$cdir = 'uid'; //Cache directory no trailing slash, allow write
$debug = true; //Show errors
$pages = ['about','contact']; //List of pages excluded from redirection

// Database
$conn = ['localhost', 'root', 'pass', 'db'];




/*  -=-=-=-=-=-=-=-=-=
	No need to edit anything below this line
	-=-=-=-=-=-=-=-=-=	*/

$args = explode('/', trim($_SERVER['QUERY_STRING'],'/'));

$uid = ctype_alnum($args[0]) ? $args[0] : false;
$del = ($args[1]=='del' && ctype_alnum($args[2])) ? $args[2] : false;

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