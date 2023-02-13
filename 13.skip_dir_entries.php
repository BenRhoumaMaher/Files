<?php 

$dirpath = __DIR__;

$handle = opendir($dirpath);

if($handle) { 
    while (false !== ($entry = readdir($handle))){
        // skip the . and .. entries
        if($entry == '.' || $entry == '..') { continue;}
        // skip all the entries that start with .
        if(stripos($entry,'.') == 0) { continue;}
        // skip all the directories
        if(is_dir($dirpath . '/' . $entry)) { continue;}
        echo $entry  . "<br />";
    }
    closedir($handle);
} else {
    echo "Could not open the file";
}

echo "<br />";
$array = scandir($dirpath);
echo $array[3];