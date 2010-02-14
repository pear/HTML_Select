<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>HTML_Select demo: multi-selection</title>
 </head>
 <body>
  <form method="get" action="#">
   <p>
<label for="color">Select some colors:</label>
<?php
/**
 * Demo for HTML_Select with multiple attributes
 */
//you do *not* need the following line!
set_include_path(
    dirname(__FILE__) . '/../'
    . PATH_SEPARATOR . get_include_path()
);

require_once 'HTML/Select.php';

//key is used as label, value as <option value="">.
$colors = array(
    'red'    => '#FF0000',
    'green'  => '#00FF00',
    'blue'   => '#0000FF',
    'orange' => '#FF8000',
    'yellow' => '#FFFF00',
);

//multiselect with height of 5 lines
$hs = new HTML_Select('color', 5, true);

//preselected values are orange and red
$hs->load($colors, array('#FF8000', '#FF0000'));

echo $hs->toHtml();

?>
   </p>
  </form>
 </body>
</html>