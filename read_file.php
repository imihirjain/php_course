<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br><br>
    <button>Read file</button>
</form>

<?php
// $fileName = "files/test.txt";
// $myFile = fopen($fileName, "r")  or die("unable to read the file");
// echo fread($myFile, filesize($fileName));
// fclose($myFile);

if (isset($_FILES['file'])) {
    // print_r($_FILES['file']);
    $fileName = $_FILES["file"]["tmp_name"];
    $myFile = fopen($fileName, "r") or die("unable to read the file");
    echo fread($myFile, filesize($fileName));
    fclose($myFile);
}
