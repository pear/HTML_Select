<?php
	include('HTML/Select/USState.php');

	$c = new HTML_Select_USState();
?>

<html>
<body>
	<?=$c->toHTML('state', 'utah')?>
</body>
</html>