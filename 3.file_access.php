<?php 

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';

// this is how to open a file
// in here we've opened in read mode 
$handle = fopen($filepath,'r');

if($handle) {
    echo 'Success';
    // close the open file at the end of the execution of the script
    fclose($handle);
} else {
    echo "Could not open the file";
}