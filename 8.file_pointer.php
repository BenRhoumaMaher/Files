<?php 

$filepath = __DIR__ . '/sonnet.txt';

// open the file in read and write mode
$handle = fopen($filepath,'r+');

// ftell used to tell where the cursor is 
echo ftell($handle) . '<br />';

// now we'll read 26 character of the file, so the cursor will be at he 26th position
fread($handle,26);
echo ftell($handle) . '<br />';

// now we'll write on the file, so the cursor will be right after what we've writed
// the world winter will be written at the 26th position
fwrite($handle,'winter');
echo ftell($handle) . '<br />';

// fseek used to jump to a specific position in the file
fseek($handle,35);
echo ftell($handle) . '<br />';

// the world eve will be written at the 35th position
fwrite($handle,'eve');
echo ftell($handle) . '<br />';

fclose($handle);