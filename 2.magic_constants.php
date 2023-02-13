<?php

// return the full address of the current file
echo __FILE__ . "<br />";
// return the full address of the current directory
echo __DIR__ . "<br />";

echo file_exists(__FILE__) ? 'exists' : 'none';
echo "<br />";

$filepath = __DIR__ . '/file_basics.php';

echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";