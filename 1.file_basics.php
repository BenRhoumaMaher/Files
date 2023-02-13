<?php

$filepath = "file_basics.php";
$dirpath = "C:/xampp/htdocs/files";

// check if a file exists
echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";

// check if a directory exists
echo file_exists($dirpath) ? 'exists' : 'none';
echo "<br />";

// check if it's a file or not
echo is_file($filepath) ? 'file' : 'not file';
echo "<br />";

// check if it's a directory or not
echo is_dir($dirpath) ? 'dir' : 'not dir';
echo "<br />";