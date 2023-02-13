<?php 

// return the current work directory
echo getcwd() . "<br />";

// change the directory
chdir('assets');
// now we're in the assets directory
echo getcwd() . "<br />";

// change to the parent directory
chdir('..');
// now we're in the files directory
echo getcwd() . "<br />";

// change to another under-directory
chdir(__DIR__ . '/assets');
echo getcwd() . "<br />";