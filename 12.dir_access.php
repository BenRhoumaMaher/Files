<?php 

$dirpath = __DIR__;

// this is how to open a directory 
$handle = opendir($dirpath);

if($handle) {
    // read all the entries in a directory
    // readdir is used to read an entry 
    while (false !== ($entry = readdir($handle))){
        echo $entry  . "<br />";
    }
    // close the open directory at the end of the execution of the script
    closedir($handle);
} else {
    echo "Could not open the file";
}

echo "<br />";
// scandir open a directory, read the entries, than close the directory
$array = scandir($dirpath);
echo $array[3];