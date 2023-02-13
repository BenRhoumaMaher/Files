<?php 

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';

// this is used to return all the bytes inside the file 
$bytes = filesize($filepath);

$handle = fopen($filepath,'r');

if($handle) {
    // use fread to read an opened file
    // first argument is the file handler
    // second argument is the length of how much we wanna read from the file
    $data = fread($handle,$bytes);
    fclose($handle);
} else {
    echo "Could not open the file";
}

// this is used to convert any new lines to br tags which html will respect
// echo nl2br($data);

/*************************/

// this is used to read all the content of the file at once, then close the file
// the argument is the file path
$data = file_get_contents($filepath);
echo nl2br($data);