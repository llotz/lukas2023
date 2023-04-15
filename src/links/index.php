<!DOCTYPE html>
<html lang="de">

<head>
	<title>Lukas' Links</title>
	<? include_once("../resource/meta.php"); ?>
	<style>
		<?php echo file_get_contents("../global.css"); ?>
	</style>
</head>

<body>
	<? include("../resource/menu.php"); ?>
	<p>Hier gibts Links, die ich nützlich finde oder einfach für die Nachwelt
		festhalten will.
	</p>
	<div class="links">
		<?php
		include_once("../includes/parsedown.php");
		$p = new Parsedown();
		echo $p->text(file_get_contents("links.md"));
		?>
	</div>
</body>

</html>