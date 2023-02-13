<?php

// this is the directory where to upload the file
$upload_dir = __DIR__ . '/uploads';

// set a function to handle the errors properly
function upload_error($error) {
    $upload_errors = array(
        UPLOAD_ERR_OK => "No errors.",
        UPLOAD_ERR_INI_SIZE => "Larger than upload max filesize.",
        UPLOAD_ERR_FORM_SIZE => "Larger than form max file size.",
        UPLOAD_ERR_PARTIAL => "Partial upload.",
        UPLOAD_ERR_NO_FILE => "No file.",
        UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE => "Can't write on disk.",
        UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
    );
    return $upload_errors[$error];
}

if(isset($_POST['submit'])) {
    // process the form data
    // handle the errors
    $error = $_FILES['file_upload']['error'];
    if($error > 0) {
        echo upload_error($error);
    } else {
    // get the temporary name of the file
    $tmp_path = $_FILES['file_upload']['tmp_name'];
    // get the original name of the file
    $filename = basename($_FILES['file_upload']['name']);
    // set where to store the file
    $target_path = $upload_dir . '/' . $filename;
    
    // now move the file to the destination
    if(move_uploaded_file($tmp_path,$target_path)) {
        echo "File uploaded";
    } else {
        echo "File upload failed";
    }
}
}   