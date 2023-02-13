<?php 

$filepath = __DIR__ . '/sonnet.txt';

// to check if the file is readable
echo is_readable($filepath) ? 'readeable' : 'no';
echo '<br />';
// to check if the file is writable
echo is_writable($filepath) ? 'writable' : 'no';
echo '<br />';
// to check if the file is executable
echo is_executable($filepath) ? 'executable' : 'no';
echo '<br />';

echo '<br />';
// return the last modified time of the file
echo date('m/d/Y',filemtime($filepath)) . '<br />';
// return the last time the content has changed
echo date('m/d/Y',filectime($filepath)) . '<br />';
// return the last access time, the last time was any read or change on the file
echo date('m/d/Y',fileatime($filepath)) . '<br />';

echo '<br />';

// array of all details of the file
$path = pathinfo($filepath);

echo $path['dirname'] . '<br />';
echo $path['basename'] . '<br />';
echo $path['filename'] . '<br />';
echo $path['extension'] . '<br />';

echo '<br />';

// return the file directory
echo dirname($filepath) . '<br />';
// return the file full name
echo basename($filepath) . '<br />';