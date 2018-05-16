<?
//INSERT UID in Database, prevent direct access

if($_POST[url] && defined('STUB')){

	$db = conn();
	$url = urlencode($_POST[url]);
	$db->query("INSERT INTO stubs (url) VALUES ('$url')");
	$short = stub($db->insert_id);
	$del = md5($short.time());
	$db->query("UPDATE stubs SET uid='{$short}',del='{$del}' WHERE id = {$db->insert_id}");

	$surl = $ssl ? "https://$domain/$short" : "http://$domain/$short" ;

	echo "<h2 clas='short'><a href='{$surl}'>$domain/$short</a></h2>";
}