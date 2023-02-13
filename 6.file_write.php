<?php 

$filepath = __DIR__ . '/sample_file.txt';

// the mode here is write, use the w to overwrite the data inside the file
// use a to add data at the end of the file
$handle = fopen($filepath,'w');

if($handle) {
    fwrite($handle,'abcd');
    fwrite($handle,'1234567890');
    fclose($handle);
} else {
    echo "Could not open the file";
}

/*************************/

$filepath = __DIR__ . '/sample_file2.txt';
// new lines in windows use : "\r\n"
// note : use "" instead of ''
$data = "A page of data\n123\n456\n789\n";
// this is used to open the file, write data, then close the file
file_put_contents($filepath,$data);