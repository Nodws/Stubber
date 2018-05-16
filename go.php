<?
if(!defined('STUB'))
	die("No direct access");

if($cache)
	include "cached.php";

$db = conn();
$id = stub($uid,1);

// Handle termination

if($del):
  if (!$db->query("SELECT id FROM stubs WHERE id = $id AND del = '$del'")->fetch_object()->id)
    throw new Exception(die("<h2>Not found or wrong code</h2>"));
     
      $db->query("DELETE FROM stubs WHERE id = $id AND del = '$del'");
    // exit("Are you sure? $domain/$uid<br> <a href='$del/doit'>Yes</a>");
      exit('<h2>Url has been terminated</h2>');  
endif;

$url = urldecode($db->query("SELECT url FROM stubs WHERE id = $id")->fetch_object()->url);
if($url)
	header("Location: $url");
else
	die("<h2>Url not found</h2>");
die(); //End Redirections