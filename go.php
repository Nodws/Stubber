<?
if(!defined('STUB'))
	die("No direct access");

if($cache)
	include "cached.php";

$db = conn();
$id = stub($uid,1);
$url = urldecode($db->query("SELECT url FROM short WHERE id = $id")->fetch_object()->url);
if($url)
	header("Location: $url");
else
	die("<h2>Url not found</h2>");
die(); //End Redirections