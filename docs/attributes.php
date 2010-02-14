<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>HTML_Select demo: attributes</title>
 </head>
 <body>
  <form method="get" action="#">
   <p>
<label for="color">Select a color:</label>
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
$hs = new HTML_Select('color');
//with addOption, you can specify additional attributes
$hs->addOption('red',    '#FF0000', false, array('style' => 'color: #F00'));
$hs->addOption('green',  '#00FF00', false, array('style' => 'color: #0F0'));
$hs->addOption('blue',   '#0000BB', true, array('style' => 'color: #00F'));
$hs->addOption('orange', '#FF8000', false, array('style' => 'color: #FF8000'));
echo $hs->toHtml();

?>
   </p>
  </form>
 </body>
</html>