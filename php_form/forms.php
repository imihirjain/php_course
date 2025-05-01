<?php
// print_r($_REQUEST);
if (isset($_REQUEST["name"])) {
    echo "User name is " . $_REQUEST["name"];
    echo "</br>";
    echo "User email is " . $_REQUEST["email"];
    echo "</br>";
    echo "User password is " . $_REQUEST["password"];
    echo "</br>";
    echo "User skills are " . implode(", ", $_REQUEST["skills"]);
    echo "</br>";
    echo "User gender is " . $_REQUEST["gender"];
    echo "</br>";
    echo "User city is " . $_REQUEST["city"];
    echo "</br>";
    echo "User bio is " . $_REQUEST["bio"];
    echo "</br>";
}
