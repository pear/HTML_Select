<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>HTML_Select demo: option groups</title>
 </head>
 <body>
  <form method="get" action="#">
   <p>
<label for="color">Select some colors:</label>
<?php
/**
 * Demo for HTML_Select with options groups
 */
//you do *not* need the following line!
set_include_path(
    dirname(__FILE__) . '/../'
    . PATH_SEPARATOR . get_include_path()
);

require_once 'HTML/Select.php';

//key is used as label, value as <option value="">.
$colors = array(
    'dark' => array(
        'black' => '#000000',
        'dark grey' => '#666666',
    ),
    'light' => array(
        'white' => '#FFFFFF',
        'yellow' => '#FFFF00',
        'light grey' => '#DDDDDD',
    ),
    'colorful' => array(
        'red'    => '#FF0000',
        'green'  => '#00FF00',
        'blue'   => '#0000FF',
        'orange' => '#FF8000',
    )
);

//multiselect with height of 12 lines
$hs = new HTML_Select('color', 12, true);

//preselected values are dark grey and red
$hs->loadArray($colors, array('#666666', '#FF0000'));

echo $hs->toHtml();

?>
   </p>

   <p>
<label for="year">Select a year:</label>
<?php
/**
 * Demo for HTML_Select with options groups
 */

$years = array(
    'seventies' => range(1970, 1979),
    'eighties'  => range(1980, 1989),
    'nineties'  => range(1990, 1999)
);

//multiselect with height of 12 lines
$hs = new HTML_Select('year');

//preselected year is 1982
$hs->loadValueArray($years, 1982);

echo $hs->toHtml();

?>
   </p>
  </form>
 </body>
</html>