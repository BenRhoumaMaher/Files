<?php


if(isset($_POST['submit'])) {
    // process the form data
    // return all the details concerning the file
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "</pre>";

    // read the content of the uploaded file
    //tmp_name is the name of the temporary file on the server
    $data = file_get_contents($_FILES['file_upload']['tmp_name']); 
    echo nl2br($data);
}