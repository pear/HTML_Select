<?php
/**
 * Demo for HTML_Select
 */
require_once 'HTML/Select.php';

//key is used as label, value as <option value="">.
$colors = array(
    'red'    => '#FF0000',
    'green'  => '#00FF00',
    'blue'   => '#0000FF',
    'orange' => '#FF8000'
);
$years = range(2000, 2010);

//load key-value array
$hs = new HTML_Select('color');
$hs->load($colors);

//load array with values only
//2004 is pre-selected
$yearsel = new HTML_Select('year');
$yearsel->loadValueArray($years, 2004);

echo <<<HTM
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>HTML_Select demo</title>
 </head>
 <body>
  <form method="get" action="#">
   <p>
<label for="color">Select a color:</label>
HTM;
echo $hs->toHtml();

echo <<<HTM
   </p>
   <p>
<label for="year">Select a year:</label>
HTM;
echo $yearsel->toHtml();
echo <<<HTM
   </p>
  </form>
 </body>
</html>
HTM;
?>