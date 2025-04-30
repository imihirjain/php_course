<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if ($_FILES) {
    $path = $_FILES["fileName"]["name"];
    $upload_file = "./uploads/" . $path;
    if (move_uploaded_file($_FILES["fileName"]["tmp_name"], $upload_file)) {
        echo "File Uploaded Successfully</br>";
    } else {
        die("File upload failed");
    }
}
