<?php
setcookie("fruit", "apple", time() + (86400));
setcookie("color", "blue", time() + (86400));

if (isset($_COOKIE["fruit"])) {
    echo "Current fruit is:- " . $_COOKIE["fruit"];
} else {
    echo "No fruit is found";
}
echo "</br>";

if (isset($_COOKIE["color"])) {
    echo "Current color is:- " . $_COOKIE["color"];
} else {
    echo "No color is found";
}
