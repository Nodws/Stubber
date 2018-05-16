<?
require "config.php";
//Initialize Controller
if($uid && !in_array($uid, $pages))
	require "go.php";
//End Controller
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=ucfirst($domain) ?></title>
	<style>
		body{
			font-family: sans-serif;
			text-align: center;
		}
		h1{
			font-style: italic;
			color:#aaa;
		}
		a{
			color: #08c;
		}
		input{
			padding: 10px 20px;
			font-size: 1.2em;
			margin:5px;
			border:1px solid #ddd;
			border-radius: 5px
		}
		input[type=submit]{
			cursor: pointer;
		}
		.short{
			background: rgba(212, 221, 226, 0.62);
			padding: 10px 15px;
			font-size: 2em;
			width: 500px;
			margin:0 auto;
		}
	</style>
</head>
<body>
<h1><?=ucfirst($domain) ?></h1>
	<? require "insert.php";
	?>
<form action="" method="post">
	<input type="url" placeholder="Your Url" name="url"> <br>
	<input type="submit">

</form>