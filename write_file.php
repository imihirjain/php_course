<form method="post">
    <input type="text" name="filename">
    <br><br>
    <textarea name="content"></textarea>
    <br><br>
    <button>Create File</button>

</form>
<?php
if (isset($_REQUEST["filename"])) {
    $fileName = "files/" . $_REQUEST["filename"];
    $content = $_REQUEST["content"];
    $file = fopen($fileName, "w") or die("unable to create the file");
    fwrite($file, $content);
    fclose($file);
    echo "File created successfully<br>";
}
