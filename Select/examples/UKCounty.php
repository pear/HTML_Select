<?php
	include('HTML/Select/UKCounty.php');

	$c = new HTML_Select_UKCounty();
?>

<html>
<body>
	<?=$c->toHTML('county')?>
</body>
</html>