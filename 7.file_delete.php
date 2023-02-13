<?php 
// note : we cannot delete an opened file
$filepath = __DIR__ . '/delete_me.txt';

file_put_contents($filepath, 'delete me');

echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";

// this is used to delete a file
unlink($filepath);

// now this should return none because the file was deleted
echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";