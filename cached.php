<?
if(!defined('STUB'))
	die("No direct access");
//Get that file
if(file_exists("$cdir/$uid.html")):
	header("Location: ".file_get_contents("$cdir/$uid.html"));
 die();
endif; 