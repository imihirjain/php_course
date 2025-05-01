<form method="post">
    <input type="text" name="user">
    <br><br>
    <button name="button" value="set">Set Session</button>
    <br><br>
    <button name="button" value="get">Get Session</button>
    <br><br>
    <button name="button" value="delete">Delete Session</button>
</form>

<?php
session_start();
if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"] == "set") {
        $val = $_REQUEST["user"];
        $_SESSION["user"] = $val;
        echo "Session has set</br>";
    }
    if ($_REQUEST["button"] == "get") {
        echo $_SESSION["user"];
    }
    if ($_REQUEST["button"] == "delete") {
        session_destroy();
        if ($_SESSION["user"]) {
            echo "Session is deleted</br>";
        } else {
            echo "No Session is set</br>";
        }
    }
}
?>