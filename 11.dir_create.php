<?php 

// this is how to create a directory
if(!file_exists('temp')){
    mkdir('temp');
}

// this is how to delete a directory
if(file_exists('temp')){
    rmdir('temp');
}