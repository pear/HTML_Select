<?php
	include('HTML/Select/Country.php');

	$c = new HTML_Select_Country();
?>

<html>
<body>
	<?=$c->toHTML('country', 'gb')?>
</body>
</html>