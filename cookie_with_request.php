<form action="" method="post">
    <input type="text" name="user">
    <br><br>
    <button name="button" value="set">set cookie</button>
    <br><br>
    <button name="button" value="display">display cookie</button>
    <br><br>
    <button name="button" value="delete">delete cookie</button>
</form>

<?php
if (isset($_REQUEST['button'])) {
    if ($_REQUEST["button"] == "set") {
        $val = $_REQUEST["user"];
        setcookie("user", $val);
        echo "cookie is set</br>";
    }
    if ($_REQUEST["button"] == "display") {
        if (isset($_COOKIE["user"])) {
            echo $_COOKIE["user"];
        }
    }
    if ($_REQUEST["button"] == "delete") {
        if (isset($_COOKIE["user"])) {
            setcookie("user", null, -1);
            echo "cookie deleted";
        }
    }
}
?>