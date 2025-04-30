<?php
// print_r($_REQUEST);
if ($_REQUEST) {
    foreach ($_REQUEST as $key => $data) {
        echo "$key => $data";
        echo "</br>";
    }
}
