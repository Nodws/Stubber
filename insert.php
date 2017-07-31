<?
//INSERT UID in Database, No remote access
if($_POST[url] && defined('STUB')){
	$db = conn();
	$url = urlencode($_POST[url]);
	$db->query("INSERT INTO short (url) VALUES ('$url')");
	$short = stub($db->insert_id);
	$del = md5($short.time());
	$surl = $ssl ? "https://$domain/$short" : "http://$domain/$short" ;
	$db->query("UPDATE short SET uid='{$short}',del='{$del}' WHERE id = {$db->insert_id}");
	echo "<h2 clas='short'><a href='{$surl}'>{$surl}</a></h2>";
}