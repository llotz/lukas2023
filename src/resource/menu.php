<?

$menu = array(
	'start' => '/',
	'links' => '/links',
	'blog' => 'https://blog.fcr33p.com/'
)

?>

<div class="menu">
	<?
	foreach ($menu as $item => $link) {
		echo "<a href='" . $link . "'>" . $item . "</a>";
		if ($item != array_key_last($menu))
			echo " | ";
	}
	?>
</div>