<!DOCTYPE html>
<html lang="en">

<head>
    <title>Call The function</title>
</head>

<body>

    <form method="post">
        <button name="btn" value="btn1">
            Call Function
        </button>
    </form>
</body>

</html>

<?php
if (isset($_REQUEST["btn"])) {
    greet();
}
function greet()
{
    echo "Hello User, welcome to the course of PHP</br>";
}
?>