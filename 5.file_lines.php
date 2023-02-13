<?php 

$filepath = __DIR__ . '/assets/us_presidents.csv';

$data = '';
$handle = fopen($filepath,'r');

if($handle) {
    // read the file line by line
    // feof used to check if we attend the end of the file
    // fgets used to read the next line in the file
    while(!feof($handle)) {
        // $data .= fgets($handle);
        /*****Example of use : return only the names of the presidents*****/
        $row = fgets($handle);
        // transform each line of the file to an array, and the elements are separated by comma
        $array = explode(',', $row);
        // return the second element of each line
        echo $array[1] . '<br />';
    }
    fclose($handle);
} else {
    echo "Could not open the file";
}

echo nl2br($data);